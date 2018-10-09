<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\View\Menu\Admin;

use XLite;
use XLite\Module\QSL\CloudSearch\Main;

/**
 * Left menu widget
 */
 class LeftMenu extends \XLite\Module\XC\CustomOrderStatuses\View\Menu\Admin\LeftMenu implements \XLite\Base\IDecorator
{
    /**
     * Define items
     *
     * @return array
     */
    protected function defineItems()
    {
        $list = parent::defineItems();

        if (isset($list['catalog'])) {
            $version = XLite::getInstance()->getVersion();

            if (version_compare($version, '5.3.3') >= 0) {
                $title = 'CloudSearch & CloudFilters';

                $list['catalog'][static::ITEM_CHILDREN]['cloud_search'] = [
                    static::ITEM_TITLE      => $title,
                    static::ITEM_TARGET     => 'cloud_search',
                    static::ITEM_PERMISSION => 'manage catalog',
                    static::ITEM_WEIGHT     => 440,
                ];
            }
        }

        return $list;
    }
}
