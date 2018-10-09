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
class Purchased extends \XLite\View\ItemsList\Module\Install
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result   = parent::getAllowedTargets();
        $result[] = 'addons_list_purchased';

        return $result;
    }

    /**
     * Return params list to use for search
     *
     * @return \XLite\Core\CommonCell
     */
    protected function getSearchCondition()
    {
        $result = new \XLite\Core\CommonCell();

        $result->{\XLite\Model\Repo\Module::P_PURCHASED} = true;
        $result->{\XLite\Model\Repo\Module::P_ISSYSTEM}  = false;

        // Always sort installed modules by moduleName
        $result->{\XLite\Model\Repo\Module::P_ORDER_BY} = [static::SORT_OPT_ALPHA, self::SORT_ORDER_ASC];

        return $result;
    }

    /**
     * Get URL common parameters
     *
     * @return array
     */
    protected function getCommonParams()
    {
        $this->commonParams[] = [];

        return $this->commonParams;
    }

    /**
     * Return name of the base widgets list
     *
     * @return string
     */
    protected function getListName()
    {
        return preg_replace('/install$/', 'purchased', parent::getListName());
    }

    /**
     * Return dir which contains the page body template
     *
     * @return string
     */
    protected function getPageBodyDir()
    {
        return 'purchased';
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
}
