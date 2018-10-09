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
 * Low stock node
 */
class LowStock extends \XLite\View\Menu\Admin\ANodeNotification
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
        return [
            'lowStockUpdateTimestamp' => $this->getLastUpdateTimestamp(),
        ];
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && $this->getCounter();
    }

    /**
     * @return bool
     */
    protected function checkACL()
    {
        return parent::checkACL()
            && (Auth::getInstance()->hasRootAccess()
             || Auth::getInstance()->isPermissionAllowed('manage catalog'));
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = \XLite\Core\TmpVars::getInstance()->lowStockUpdateTimestamp;

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
        \XLite\Core\TmpVars::getInstance()->lowStockUpdateTimestamp = $timestamp;
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
        $list[] = 'low-stock';

        return $list;
    }

    /**
     * Returns icon
     *
     * @return string
     */
    protected function getIcon()
    {
        return $this->getSVGImage('images/info.svg');
    }

    /**
     * Returns header url
     *
     * @return string
     */
    protected function getHeaderUrl()
    {
        return $this->buildURL(
            'product_list',
            '',
            [
                \XLite\Model\Repo\Product::P_INVENTORY => \XLite\Model\Repo\Product::INV_LOW,
            ]
        );
    }

    /**
     * Returns header
     *
     * @return string
     */
    protected function getHeader()
    {
        return static::t('Low stock info');
    }

    /**
     * Get entries count
     *
     * @return integer
     */
    protected function getCounter()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Product')->getLowInventoryProductsAmount();
    }

    // }}}
}
