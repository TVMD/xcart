<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
 
namespace XLite\Module\CDev\XPaymentsConnector\Controller\Customer;

/**
 * Redirect inside iframe 
 * it should redirect the parent window
 */
class ACustomer extends \XLite\Controller\Customer\ACustomer implements \XLite\Base\IDecorator
{
    /**
     * Get iframe singleton
     *
     * @return boolean
     */
    public function getIframe()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Iframe::getInstance();
    }

    /**
     * Perform redirect
     *
     * @param string $url Redirect URL OPTIONAL
     * @param null   $code
     */
    protected function redirect($url = null, $code = null)
    {
        if ($this->getIframe()->getEnabled()) {
            if ('checkout' == \XLite\Core\Request::getInstance()->action) {
                if ($this->get('absence_of_product')) {
                    $this->getIframe()->setError('Error initializing payment form. Please try to refresh the page.');
                    $this->getIframe()->setType(\XLite\Module\CDev\XPaymentsConnector\Core\Iframe::IFRAME_ALERT);
                } else {
                    $this->getIframe()->setError('');
                    $this->getIframe()->setType(\XLite\Module\CDev\XPaymentsConnector\Core\Iframe::IFRAME_DO_NOTHING);
                }
            }
            $this->getIframe()->finalize();
        } else {
            parent::redirect($url, $code);
        }
    }

    /**
     * Check if transaction is X-Payments's one and is initialized/in progress 
     *
     * @param \XLite\Model\Payment\Transaction $transaction Transaction
     *
     * @return void
     */
    protected function isTransactionOpenXpayments(\XLite\Model\Payment\Transaction $transaction)
    {
        return $transaction
            && $transaction->isXpc()
            && $transaction->isOpen();
    }

}
