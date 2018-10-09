<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\Module\XC\Onboarding\View\WizardStep;

/**
 * Payment step
 *
 * @Decorator\Depend("XC\Onboarding")
 */
class Payment extends \XLite\Module\XC\Onboarding\View\WizardStep\Payment implements \XLite\Base\IDecorator
{
    protected function getOnlineWidgets()
    {
        return array_merge(parent::getOnlineWidgets(), [
            '\XLite\Module\CDev\Paypal\View\Onboarding\Payment',
        ]);
    }
}