<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FreeShipping\View\Menu\Admin;


class FreeShippingUpdate extends \XLite\View\Menu\Admin\ANodeNotification
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
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && $this->getModule()
            && $this->isShouldDisplayUpdateInfo();
    }

    /**
     * Check if aggregate_css,aggregate_js and use_view_cache is enabled
     *
     * @return bool
     */
    protected function isShouldDisplayUpdateInfo()
    {
        \XLite\Core\Config::updateInstance();
        $config = \XLite\Core\Config::getInstance()->XC->FreeShipping;

        return (boolean)$config->display_update_info;
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = \XLite\Core\TmpVars::getInstance()->freeShippingUpdateStatusTimestamp;

        if (null === $result) {
            $result = LC_START_TIME;
            $this->setLastUpdateTimestamp($result);
        }

        return $result;
    }

    /**
     * Set update timestamp
     *
     * @param integer $timestamp Timestamp
     *
     * @return void
     */
    protected function setLastUpdateTimestamp($timestamp)
    {
        \XLite\Core\TmpVars::getInstance()->freeShippingUpdateStatusTimestamp = $timestamp;
    }

    // {{{ View helpers

    /**
     * Returns node style class
     *
     * @return array
     */
    protected function getNodeStyleClasses()
    {
        $list   = parent::getNodeStyleClasses();
        $list[] = 'free-shipping-update';

        return $list;
    }

    /**
     * Returns icon
     *
     * @return string
     */
    protected function getIcon()
    {
        return $this->getSVGImage('images/icon-attention.svg');
    }

    protected function getModule()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneByModuleName(
            'XC\\FreeShipping'
        );
    }

    /**
     * Returns header url
     *
     * @return string
     */
    protected function getHeaderUrl()
    {
        return $this->getModule()->getSettingsForm();
    }

    /**
     * Returns header
     *
     * @return string
     */
    protected function getHeader()
    {
        return static::t('Important info on the Free shipping addon update');
    }

    // }}}
}