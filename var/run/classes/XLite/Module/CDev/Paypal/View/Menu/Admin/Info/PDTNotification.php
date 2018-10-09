<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Menu\Admin\Info;


use XLite\Core\TmpVars;

class PDTNotification extends \XLite\View\Menu\Admin\ANodeNotification
{
    /**
     * Check if data is updated (must be fast)
     *
     * @return boolean
     */
    public function isUpdated()
    {
        return $this->getLastReadTimestamp() < $this->getLastUpdateTimestamp();
    }

    /**
     * Get cache parameters
     *
     * @return array
     */
    public function getCacheParameters()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && TmpVars::getInstance()->paypalPDTNotificationVisible
            && $this->getPaypalWPSMethod()
            && $this->getPaypalWPSMethod()->getAdded();
    }

    protected function getPaypalWPSMethod()
    {
        return \XLite\Module\CDev\Paypal\Main::getPaymentMethod('PaypalWPS');
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = TmpVars::getInstance()->paypalPDTNotificationUpdateTimestamp;

        if (!isset($result)) {
            $result = LC_START_TIME;
            TmpVars::getInstance()->paypalPDTNotificationUpdateTimestamp = $result;
        }

        return $result;
    }

    protected function getIcon()
    {
        return $this->getSVGImage('images/icon-attention.svg');
    }

    protected function getHeaderUrl()
    {
        return $this->buildURL(
            'paypal_settings',
            '',
            [
                'method_id' => $this->getPaypalWPSMethod()->getMethodId(),
            ]
        );
    }

    protected function getHeader()
    {
        return static::t('Use of the unsupported Payment Data Transfer (PDT) method has been detected');
    }
}