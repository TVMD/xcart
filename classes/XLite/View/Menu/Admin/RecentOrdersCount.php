<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin;

use XLite\Core\View\DynamicWidgetInterface;

/**
 * ExpandedMenuNodeClass dynamic widget renders 'active pre-expanded' css class on a menu node if it is active
 */
class RecentOrdersCount extends \XLite\View\AView implements DynamicWidgetInterface
{
    /**
     * Display widget with the default or overriden template.
     *
     * @param $template
     */
    protected function doDisplay($template = null)
    {
        $count = \XLite\Core\Database::getRepo('XLite\Model\Order')->searchRecentOrders(null, true);

        if ($count) {
            echo $count;
        }
    }

    protected function isCacheAvailable()
    {
        return false;
    }

    protected function getCacheParameters()
    {
        return array_merge(
            parent::getCacheParameters(),
            [
                \XLite\Core\Database::getRepo('XLite\Model\Order')->getVersion()
            ]
        );
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return null;
    }
}
