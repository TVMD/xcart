<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Model;

/**
 * XPayments payment processor
 *
 */
 class Cart extends \XLite\Module\XC\MailChimp\Model\Cart implements \XLite\Base\IDecorator
{
    /**
     * Checks if any X-Payments payment methods are available for this cart
     *
     * @return boolean
     */
    public function isXpcMethodsAvailable()
    {
        $found = false;
        foreach ($this->getPaymentMethods() as $method) {
            if (
                'Module\CDev\XPaymentsConnector\Model\Payment\Processor\XPayments' == $method->getClass()
                || 'Module\CDev\XPaymentsConnector\Model\Payment\Processor\SavedCard' == $method->getClass()
            ) {
                $found = true;
                break;
            }
        }
        return $found;
    }

    /**
     * If we can proceed with checkout with current cart
     *
     * @return boolean
     */
    public function checkCart()
    {
        $result = parent::checkCart();

        if (
            \XLite\Module\CDev\XPaymentsConnector\Core\XPaymentsClient::getInstance()->isModuleConfigured()
            && !$result
        ) {
            \XLite\Module\CDev\XPaymentsConnector\Core\XPaymentsClient::getInstance()->clearInitDataFromSession();
        }

        return $result;
    }
}
