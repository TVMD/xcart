<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\ItemsList\Module;

/**
 * Addons search and installation widget
 */
class HotAddons extends \XLite\View\ItemsList\Module\Install
{
    public static function getAllowedTargets()
    {
        $result   = parent::getAllowedTargets();
        $result[] = 'hot_addons_list';

        return $result;
    }

    /**
     * @return int
     */
    protected function getMaxItemsCount()
    {
        return 5;
    }

    protected function isFooterVisible()
    {
        return false;
    }

    protected function isVisibleAddonFilters()
    {
        return false;
    }

    protected function isHeaderVisible()
    {
        return false;
    }

    protected function isLandingPage()
    {
        return true;
    }

    public function isBannerVisible()
    {
        return false;
    }

    protected function getPromoBanner()
    {
        return false;
    }

    protected function isPopupFooter()
    {
        return true;
    }

    protected function showStickyPanel()
    {
        return false;
    }

    public function installViaButton()
    {
        return true;
    }

    protected function isCacheAvailable()
    {
        return true;
    }

    protected function getCacheParameters()
    {
        return array_merge(
            parent::getCacheParameters(),
            [
                \XLite\Core\Database::getRepo('XLite\Model\Module')->getVersion()
            ]
        );
    }

    protected function getCacheTTL()
    {
        return 86400;
    }
}
