<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Module\XC\GDPR\Controller\Customer;

/**
 * Checkout
 *
 * @Decorator\Depend({"XC\GDPR"})
 */
class Checkout extends \XLite\Controller\Customer\Checkout implements \XLite\Base\IDecorator
{
    /**
     * Skips GDPR consent check to display iframe
     *
     * @return bool
     */
    protected function isIframeFLCHackRequired()
    {
        /** @var \XLite\Model\Cart $cart */
        $cart = \XLite::getController()->getCart();

        $xpaymentsEnabled = \XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('CDev\XPaymentsConnector');

        return $cart
            && $xpaymentsEnabled
            && (
                'xpc_iframe' === $this->getAction()
                || 'update_profile' === $this->getAction() && $this->isAJAX()
            )
            && $cart->getPaymentProcessor() instanceof \XLite\Module\CDev\XPaymentsConnector\Model\Payment\Processor\AXPayments;
    }



}
