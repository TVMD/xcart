<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\Info\Node;

use XLite\Core\Auth;
use XLite\Model\Role\Permission;

/**
 * Speed-up node
 */
class SpeedUp extends \XLite\View\Menu\Admin\ANodeNotification
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
        return parent::isVisible() && !$this->isAllPerformanceOptionsEnabled();
    }

    /**
     * @return bool
     */
    protected function checkACL()
    {
        return parent::checkACL()
            && Auth::getInstance()->hasRootAccess();
    }

    /**
     * Check if aggregate_css,aggregate_js and use_view_cache is enabled
     *
     * @return bool
     */
    protected function isAllPerformanceOptionsEnabled()
    {
        $config = \XLite\Core\Config::getInstance()->Performance;

        return $config->aggregate_css && $config->aggregate_js && $config->use_view_cache;
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = \XLite\Core\TmpVars::getInstance()->speedUpStatusTimestamp;

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
        \XLite\Core\TmpVars::getInstance()->speedUpStatusTimestamp = $timestamp;
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
        $list[] = 'speed-up';

        return $list;
    }

    /**
     * Returns icon
     *
     * @return string
     */
    protected function getIcon()
    {
        return $this->getSVGImage('images/fa-cog.svg');
    }

    /**
     * Returns header url
     *
     * @return string
     */
    protected function getHeaderUrl()
    {
        return $this->buildURL('css_js_performance');
    }

    /**
     * Returns header
     *
     * @return string
     */
    protected function getHeader()
    {
        return static::t('Speed up your store');
    }

    // }}}
}
