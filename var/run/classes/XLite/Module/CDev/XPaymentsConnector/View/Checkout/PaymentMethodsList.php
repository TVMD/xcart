<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\View\Checkout;

/**
 * Shipping methods list
 *
 */
 class PaymentMethodsList extends \XLite\View\Checkout\PaymentMethodsListAbstract implements \XLite\Base\IDecorator
{
    /**
     * Check - payment method is selected or not
     *
     * @param \XLite\Model\Payment\Method $method Payment methods
     *
     * @return boolean
     */
    protected function isPaymentSelected(\XLite\Model\Payment\Method $method)
    {
        if (
            $method
            && 'Module\CDev\XPaymentsConnector\Model\Payment\Processor\XPayments' == $method->getClass()
            && $this->getCart()->getPaymentMethod()
            && 'Module\CDev\XPaymentsConnector\Model\Payment\Processor\XPayments' == $this->getCart()->getPaymentMethod()->getClass()
        ) {

            $currentMethodServiceName = $this->getCart()->getPaymentMethod()->getServiceName();
            $methodServiceName = $method->getServiceName();

            $result = $method->getServiceName() === $this->getCart()->getPaymentMethod()->getServiceName()
                && $method->getSetting('id') == $this->getCart()->getPaymentMethod()->getSetting('id');

        } else {
            $result = parent::isPaymentSelected($method);
        }
 
        return $result;

    }
}
