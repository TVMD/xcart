<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Module\XC\GDPR\View\Checkout;

/**
 * GdprConsent
 *
 * @Decorator\Depend({"XC\GDPR"})
 */
class GdprConsent extends \XLite\Module\XC\GDPR\View\Checkout\GdprConsent implements \XLite\Base\IDecorator
{
    /**
     * Disable unwanted JS hacks that were required for old Connector module
     *
     * @return bool
     */
    protected function isIframeHackRequired()
    {
        return false;
    }
}
