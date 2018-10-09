<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\ItemsList\Module;

/**
 * Sales channels modules list
 */
class SalesChannels extends \XLite\View\ItemsList\Module\Install
{
    const MAX_ITEMS = 5;

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result   = parent::getAllowedTargets();
        $result[] = 'addons_list_sales_channels';

        return $result;
    }

    /**
     * Register JS files. TODO REWORK with Popup button widget
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list   = parent::getJSFiles();
        $list[] = 'items_list/module/sales_channels/controller.js';

        return $list;
    }

    /**
     * Return name of the base widgets list
     *
     * @return string
     */
    protected function getListName()
    {
        return preg_replace('/install$/', 'sales-channels', parent::getListName());
    }

    /**
     * Return dir which contains the page body template
     *
     * @return string
     */
    protected function getPageBodyDir()
    {
        return 'sales_channels';
    }

    /**
     * Return class name for the list pager
     *
     * @return string
     */
    protected function getPagerClass()
    {
        return 'XLite\View\Pager\Infinity';
    }

    /**
     * isHeaderVisible
     *
     * @return boolean
     */
    protected function isHeaderVisible()
    {
        return false;
    }

    /**
     * Return params list to use for search
     *
     * @return \XLite\Core\CommonCell
     */
    protected function getSearchCondition()
    {
        $cnd = new \XLite\Core\CommonCell();

        $cnd->{\XLite\Model\Repo\Module::P_FROM_MARKETPLACE} = true;
        $cnd->{\XLite\Model\Repo\Module::P_ISSYSTEM}         = false;
        $cnd->{\XLite\Model\Repo\Module::P_SALES_CHANNELS}   = true;

        return $cnd;
    }

    /**
     * Return products list
     *
     * @param \XLite\Core\CommonCell $cnd       Search condition
     * @param boolean                $countOnly Return items list or only its size OPTIONAL
     *
     * @return array|integer
     */
    protected function getData(\XLite\Core\CommonCell $cnd, $countOnly = false)
    {
        $result = parent::getData($cnd, $countOnly);

        if (!$countOnly) {
            $filtered = [];

            /** @var \XLite\Model\Module $module */
            foreach ($result as $module) {
                if (!$module->isInstalled()) {
                    $filtered[] = $module;
                }

                if (count($filtered) === self::MAX_ITEMS) {
                    break;
                }
            }

            $result = $filtered;
        }

        return $result;
    }

    /**
     * Flag if the addon filters box is visible
     *
     * @return boolean
     */
    protected function isVisibleAddonFilters()
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

    protected function getURLParams()
    {
        $result = parent::getURLParams();

        unset($result[static::PARAM_SESSION_CELL]);

        return $result;
    }
}
