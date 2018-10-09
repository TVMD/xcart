<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Controller\Customer;

use \XLite\Module\CDev\XPaymentsConnector\Core\XPaymentsClient;

/**
 * Callback 
 *
 */
 class Callback extends \XLite\Controller\Customer\CallbackAbstract implements \XLite\Base\IDecorator
{

    /**
     * Allow check cart action
     *
     * @return string
     */
    public function getAction()
    {
        return 'check_cart' == \XLite\Core\Request::getInstance()->action
            ? \XLite\Core\Request::getInstance()->action
            : parent::getAction();
    }

    /**
     * Send current cart details back to X-Payments.   
     *
     * @return void
     */
    protected function doActionCheckCart()
    {
        // Suppress default output, we need only our code be outputed
        $this->setSuppressOutput(true);
        $this->set('silent', true);

        $refId = \XLite\Core\Request::getInstance()->refId;
        
        $transaction = $this->detectTransaction();

        $xml = '';

        if ($transaction) {
            $cart = $transaction->getOrder();

            $response = array(
                'status' => 'cart-changed',
                'ref_id' => $refId,
            );

            if (
                method_exists($transaction, 'isAntiFraudApplied')
                && method_exists($transaction, 'checkBlockOrder')
                && $transaction->isAntiFraudApplied()
                && $transaction->checkBlockOrder(true)
            ) {
                // ANTIFRAUD RELATED CHANGES

                // This makes a error top messsage at checkout
                $transaction->setDataCell('status', 'AF Error #1: Cannot process this order. Contact administrator', null, 'C');

            } elseif (
                $cart->hasCartStatus()
                && $cart->checkCart()
            ) {
                // If cart is OK, send the actual cart and proceed with payment

                $transaction->setStatus($transaction::STATUS_INPROGRESS);
                $transaction->registerTransactionInOrderHistory();

                $forceAuth = $transaction->isPendingZeroAuth();
                $preparedCart = XPaymentsClient::getInstance()->prepareCart($cart, $transaction->getPaymentMethod(), $refId, $forceAuth);

                if ($cart && $preparedCart) {
                    $response['cart'] = $preparedCart;
                }

            }

            try {

                // Convert array to XML and encrypt it
                $xml = XPaymentsClient::getInstance()->encryptRequest($response);

            } catch (\XLite\Module\CDev\XPaymentsConnector\Core\XpcResponseException $exception) {

                // Doesn't matter, but al least we can send something
                $xml = $exception->getMessage();
            }

            XPaymentsClient::getInstance()->forceCloseConnection($xml);
            die (0);
        }
    }

}
