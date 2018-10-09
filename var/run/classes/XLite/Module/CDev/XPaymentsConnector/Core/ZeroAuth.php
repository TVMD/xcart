<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Core;

/**
 * Zero-dollar authorization (card setup)
 *
 */
class ZeroAuth extends \XLite\Base\Singleton
{
    /**
     * This is a key for the Do not use card setup option
     */
    const DISABLED = -1;

    /**
     * Placeholder for comma in address
     */
    const COMMA = '__COMMA__';

    /**
     * Get config
     *
     * @return object
     */
	protected static function getConfig()
	{
		return \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector;
	}

    /**
     * Get X-Payments client 
     *
     * @return object
     */
	protected static function getClient()
	{
		return \XLite\Module\CDev\XPaymentsConnector\Core\XPaymentsClient::getInstance();
	}

    /**
     * Get payment method for zero-auth (card setup)
     *
     * @return \XLite\Model\Payment\Method
     */
    public function allowZeroAuth()
    {
        return self::DISABLED != $this->getConfig()->xpc_zero_auth_method_id
            && $this->getPaymentMethod();
    }

    /**
     * Get list of payment methods which allow to save cards and are marked by admin so
     *
     * @param $resultAsTitle Return values as method titles or as objects
     *
     * @return array
     */
    public function getCanSaveCardsMethods($resultAsTitle = false)
    {
        static $list = null; 

        if (is_null($list)) {

            $list = array();

            $paymentMethods = \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')->findAllActive();

            foreach ($paymentMethods as $pm) {
                if (
                    'Module\CDev\XPaymentsConnector\Model\Payment\Processor\XPayments' == $pm->getClass()
                    && 'Y' == $pm->getSetting('saveCards')
                ) {
                    $list[$pm->getMethodId()] = $resultAsTitle ? $pm->getTitle() : $pm;
                }
            }
        }

        return $list;
    }

    /**
     * Get payment method for zero-auth (card setup)
     *
     * @return \XLite\Model\Payment\Method
     */
    public function getPaymentMethod()
    {
        $methods = $this->getCanSaveCardsMethods();

        return array_key_exists($this->getConfig()->xpc_zero_auth_method_id, $methods)
            ? $methods[$this->getConfig()->xpc_zero_auth_method_id]
            : null;
    }

    /**
     * Get customer profile
     *
     * @return \XLite\Model\Profile
     */
    protected function detectProfile()
    {
        $profile = null;

        if (\XLite\Core\Request::getInstance()->xpcBackReference) {
            $profile = \XLite\Core\Database::getRepo('XLite\Model\Profile')
                ->findOneBy(array('pending_zero_auth' => \XLite\Core\Request::getInstance()->xpcBackReference));
        }

        return $profile;
    }

    /**
     * Detect payment transaction 
     *
     * @return \XLite\Model\Payment\Transaction
     */
    protected function detectTransaction()
    {
        return \XLite\Core\Request::getInstance()->xpcBackReference
            ? \XLite\Core\Database::getRepo('XLite\Model\Payment\Transaction')->findOneBy(
                array('public_id' => \XLite\Core\Request::getInstance()->xpcBackReference)
            )
            : null;
    }

    /**
     * Default description for Card setup
     *
     * @return string
     */
    public static function getDefaultDescription()
    {
        return \XLite\Core\Translation::lbl('Card setup');
    }

    /**
     * Get address item as string
     *
     * @param \XLite\Model\Address $address Address
     *
     * @return string
     */
    public function getAddressItem(\XLite\Model\Address $address)
    {

        $addressFields = $address->getAvailableAddressFields();

        $hasStates = $address->hasStates();

        $result = '';

        foreach ($addressFields as $field) {

            if ('country_code' === $field) {
                $field = 'country';
            }

            if ($hasStates) {
                if ('state_id' === $field) {
                    $field = 'state';
                } elseif ('custom_state' === $field) {
                    continue;
                }
            } else {
                if ('state_id' === $field) {
                    continue;
                }
            }

            $method = 'get' . ucfirst($field);

            $item = $address->$method();

            if (is_callable(array($item, $method))) {
                $item = $item->$method();
            }

            $result = $result . ' ' . $item;
        }

        return trim($result);
    }

    /**
     * Get list of addresses
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return array 
     */
    public function getAddressList(\XLite\Model\Profile $profile)
    {
        static $list = array();

        if (empty($list)) {
            $addresses = $profile->getAddresses()->toArray();

            foreach ($addresses as $address) {
                $list[$address->getAddressId()] = $this->getAddressItem($address);
            }
        }

        return $list;
    }

    /**
     * Is it single address or there are some more
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return bool 
     */
    public function isSingleAddress(\XLite\Model\Profile $profile)
    {
        return 1 == count($this->getAddressList($profile));
    }

    /**
     * Get string line for the single address 
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return string 
     */
    public function getSingleAddress(\XLite\Model\Profile $profile)
    {
        $list = $this->getAddressList($profile);

        return array_shift($list);
    }

    /**
     * Get address ID
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * return int
     */
    public function getAddressId(\XLite\Model\Profile $profile)
    {
        if ($profile->getBillingAddress()) {
            $addressId = $profile->getBillingAddress()->getAddressId();
        } else {
            $list = $this->getAddressList($profile);
            $addressId = key($list);
        }

        return $addressId;
    }

    /**
     * Create cart
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return \XLite\Model\Cart 
     */
    protected function createCart(\XLite\Model\Profile $profile)
    {
        $cart = $this->getClient()->createFakeCart(
            $profile,
            $this->getPaymentMethod(),
            $this->getConfig()->xpc_zero_auth_amount,
            $this->getConfig()->xpc_zero_auth_description
                ? $this->getConfig()->xpc_zero_auth_description
                : self::getDefaultDescription(),
            'CardSetup',
            $this->getAddressId($profile)
        );

        return $cart;
    }

    /**
     * Prepare cart hash to send to X-Payments
     *
     * @param \XLite\Model\Cart $cart Customers cart
     *
     * @return array
     */
    protected function getPreparedCart(\XLite\Model\Cart $cart)
    {
        return $this->getClient()->prepareCart($cart, $this->getPaymentMethod(), null, true, true);
    }

    /**
     * Get iframe form fields to post
     *
     * @param \XLite\Model\Payment\Transaction $transaction Transaction for fake cart
     * @param array $preparedCart Prepared cart as array for API request
     * @param string $xpcBackReference X-Cart transaction reference
     *
     * @return \XLite\Module\CDev\XPaymentsConnector\Transport\Response 
     */
    protected function getInitDataRequest(\XLite\Model\Payment\Transaction $transaction, array $preparedCart, $xpcBackReference)
    {
        // Data to send to X-Payments
        $data = array(
            'confId'      => intval($this->getPaymentMethod()->getSetting('id')),
            'refId'       => $xpcBackReference,
            'cart'        => $preparedCart,
            'language'    => \XLite\Core\Session::getInstance()->getLanguage()->getCode(),
            'returnUrl'   => $this->getClient()->getReturnUrl($xpcBackReference, true),
            'callbackUrl' => $this->getClient()->getCallbackUrl($xpcBackReference),
        );

        // For API v1.3-v1.6 we need to force the template for iframe
        if (
            version_compare($this->getConfig()->xpc_api_version, '1.3') >= 0
            && version_compare($this->getConfig()->xpc_api_version, '1.6') < 0
        ) {

            $data += array(
                'saveCard'    => 'Y',
                'template'    => 'xc5',
            );
        }

        $request = $this->getClient()->getApiRequest()->send(
            'payment',
            'init',
            $data
        );

        if ($request->isSuccess()) {

            $response = $request->getResponse();

            // Set fields for the "Redirect to X-Payments" form
            $data = [ 
                'xpcBackReference' => $xpcBackReference,
                'txnId'            => $response['txnId'],
                'module_name'      => $this->getPaymentMethod()->getSetting('moduleName'),
                'url'              => \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector->xpc_xpayments_url . '/payment.php',
                'expiryTime'       => \XLite\Core\Converter::time() + 900,
                'fields'           => array(
                    'target' => 'main',
                    'action' => 'start',
                    'token'  => $response['token'],
                ),
            ];
            $request->setResponse($data);

            $this->getClient()->saveInitDataToSession($transaction, $data);

        }

        return $request;
    }

    /**
     * JS code to redirect back to saved cards page
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return string 
     */
    protected function getRedirectCode(\XLite\Model\Profile $profile)
    {
        $url = \XLite::getInstance()->getShopUrl(
                \XLite\Core\Converter::buildUrl(
                    'saved_cards', 
                    '', 
                    array('profile_id' => $profile->getProfileId()),
                    $profile->getPendingZeroAuthInterface()
                )
            );

        return '<script type="text/javascript">'
			. 'window.parent.location = "' . $url . '";'
			. '</script>';
    }

    /**
     * Cleanup pending zero-auth data from profile 
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return void
     */
    protected function cleanupZeroAuthPendingData(\XLite\Model\Profile $profile)
    {
        $profile->setPendingZeroAuthTxnId('');
        $profile->setPendingZeroAuth('');
        $profile->setPendingZeroAuthInterface('');

        \XLite\Core\Database::getEM()->flush();
    }

    /**
     * Display form inside iframe that redirects to X-Payments
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     * @param $interface Admin or Customer interface
     *
     * @return void
     */
    public function doActionXpcIframe(\XLite\Model\Profile $profile, $interface = false)
    {
        if (!$interface) {
            $interface = \XLite::getCustomerScript();
        }

        // Cleanup fake carts from session
        self::cleanupFakeCartsForProfile($profile);

        // Prepare cart
        $cart = $this->createCart($profile);
        $preparedCart = $this->getPreparedCart($cart);

        if ($preparedCart) {

            $transaction = $cart->getFirstOpenPaymentTransaction();

            $this->getPaymentMethod()->getProcessor()->savePaymentSettingsToTransaction($transaction);

            $xpcBackReference = $transaction->getPublicId();

            $profile->setPendingZeroAuth($xpcBackReference);
            $profile->setPendingZeroAuthInterface($interface);
            \XLite\Core\Database::getEM()->flush();

            $request = $this->getInitDataRequest($transaction, $preparedCart, $xpcBackReference);

            if ($request->isSuccess()) {

                $data = $request->getResponse();

                $transaction->setDataCell('xpc_txnid', $data['txnId'], 'X-Payments transaction id', 'C');
                $transaction->setDataCell('xpcBackReference', $xpcBackReference, 'X-Payments back reference', 'C');
                // Set flag to deny callbacks until final processing
                $transaction->setXpcDataCell('xpc_deny_callbacks', '1');

                // AntiFraud service
                if (method_exists($transaction, 'processAntiFraudCheck')) {
                    $transaction->processAntiFraudCheck();
                }

                \XLite\Core\Database::getEM()->flush();

                $this->getPaymentMethod()->getProcessor()->pay($transaction);

            } else {

                // Parse error
                $message = $request->getError();

                $transaction->setDataCell('status', $message, 'X-Payments error', 'C');
                $transaction->setNote($message);

                $iframe = \XLite\Module\CDev\XPaymentsConnector\Core\Iframe::getInstance();

                $iframe->setError($message);
                $iframe->setType(\XLite\Module\CDev\XPaymentsConnector\Core\Iframe::IFRAME_ALERT);

                $iframe->finalize();

            }

        }
    }

    /**
     * Return action
     *
     * @return void
     */
    public function doActionReturn()
    {
        $profile = $this->detectProfile();
        $transaction = $this->detectTransaction();

        if (
            $profile
            && $transaction
        ) {

            $transaction->getPaymentMethod()->getProcessor()->processReturn($transaction);

            $cart = $transaction->getOrder();
            if ($cart instanceof \XLite\Model\Cart) {
                $cart->tryClose();
            }
            $transaction->getOrder()->setPaymentStatusByTransaction($transaction);
            $transaction->getOrder()->update();

            $isOldApi = (version_compare(\XLite\Core\Config::getInstance()->CDev->XPaymentsConnector->xpc_api_version, '1.6') < 0);

            if (
                $transaction->isCompleted()
                && (
                    $isOldApi
                    || 'Y' == $transaction->getXpcData()->getUseForRecharges()
                )
            ) {

                if ($isOldApi) {
                    $transaction->getXpcData()->setUseForRecharges('Y');
                }

                \XLite\Core\TopMessage::addInfo('Card has been successfully saved');

            } else {

                \XLite\Core\TopMessage::addError('Card was not saved due to payment processor error');
            }

            \XLite\Core\Database::getEM()->flush();

            echo $this->getRedirectCode($profile);

            // Cleanup pending zero-auth data
            $this->cleanupZeroAuthPendingData($profile);

            // Cleanup fake carts from session
            self::cleanupFakeCartsForProfile($profile);

            exit;


        } else {

            die('Error occured when saving card. Customer profile not found');
            // Just in case show error inside iframe. However this should not happen

        }

	}

    /**
     * Update address (set selected address for the current zero auth)
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * return void
     */
    public function doActionUpdateAddress(\XLite\Model\Profile $profile)
    {
        $addresses = $profile->getAddresses();

        foreach ($addresses as $address) {
            if (\XLite\Core\Request::getInstance()->address_id == $address->getAddressId()) {
                $address->setIsBilling(true);
            } else {
                $address->setIsBilling(false);
            }
        }

        \XLite\Core\Database::getEM()->flush();
    }

    /**
     * Mark fake cart as order
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return void
     */
    public function processSucceedFakeCart(\XLite\Model\Profile $profile)
    {
        $carts = \XLite\Core\Database::getRepo('XLite\Model\Cart')->findByProfile($profile);

        if ($carts) {
            foreach ($carts as $cart) {

                // Fake cart contains only one item, but there is no first() method
                $item = $cart->getItems()->last();

                if (
                    $item
                    && $item->isXpcFakeItem()
                ) {
                    if ($cart->getPaymentStatus()) {
                        // Reset profile in cart to avoid removing it on cascade
                        $cart->setProfileCopy($profile);
                        $cart->processSucceed();
                    }
                }

            }

            \XLite\Core\Database::getEM()->flush();    
        }
    }
    /**
     * Cleanup fake carts from session
     *
     * @param \XLite\Model\Profile $profile Customer's profile
     *
     * @return void
     */
    public static function cleanupFakeCartsForProfile(\XLite\Model\Profile $profile)
    {
        $carts = \XLite\Core\Database::getRepo('XLite\Model\Cart')->findByProfile($profile);

        if ($carts) {
            self::cleanupFakeCarts($carts, true);
        }
    }

    /**
     * Cleanup fake carts from session
     *
     * @param array $carts List of carts
     * @param bool $flush Flush or not
     *
     * @return void
     */
    public static function cleanupFakeCarts($carts = array(), $flush = false)
    {
        if (empty($carts)) {
            $carts = \XLite\Core\Database::getRepo('XLite\Model\Cart')->findBy(['is_zero_auth' => true]);
            if (!$carts) {
                $carts = array();
            }
        }

        foreach ($carts as $cart) {

            // Do not remove paid cart
            if ($cart->getPaymentStatus()) {
                continue;
            }

            // Fake cart contains only one item, but there is no first() method
            $item = $cart->getItems()->last();

            if (
                $item
                && $item->isXpcFakeItem()
            ) {
                // Reset profile in cart to avoid removing it on cascade
                $cart->setProfile(null);
                \XLite\Core\Database::getEM()->remove($cart);
            }

        }

        if ($flush) {
            \XLite\Core\Database::getEM()->flush();    
        }
    }
}
