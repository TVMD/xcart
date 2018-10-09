<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Controller\Customer;

/**
 * Return to the store in X-Payments's iframe 
 *
 */
 class PaymentReturn extends \XLite\Module\QSL\BraintreeVZ\Controller\Customer\PaymentReturn implements \XLite\Base\IDecorator
{
    /**
     * Return
     *
     * @return void
     */
    protected function doActionReturn()
    {
        $this->getIframe()->enable();

        parent::doActionReturn();
    }

}
