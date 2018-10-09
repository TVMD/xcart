<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\View\WizardStep;


/**
 * Payment
 */
class Payment extends \XLite\Module\XC\Onboarding\View\AWizardStep
{
    /**
     * @return string
     */
    protected function getMoreSettingsLocation()
    {
        return $this->buildURL('payment_settings');
    }

    /**
     * @return \XLite\Model\Payment\Method|null
     */
    protected function getMethod()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')->findOneBy([
            'service_name' => 'PhoneOrdering'
        ]);
    }

    /**
     * @return int|null
     */
    protected function getOfflineMethodId()
    {
        return $this->getMethod()
            ? $this->getMethod()->getMethodId()
            : null;
    }

    /**
     * @return string|null
     */
    protected function getOfflineMethodName()
    {
        return $this->getMethod()
            ? $this->getMethod()->getName()
            : null;
    }

    /**
     * @return bool
     */
    protected function isOfflineMethodEnabled()
    {
        return $this->getMethod() && $this->getMethod()->isEnabled();
    }

    /**
     * @return array
     */
    protected function getOnlineWidgets()
    {
        return [];
    }
}