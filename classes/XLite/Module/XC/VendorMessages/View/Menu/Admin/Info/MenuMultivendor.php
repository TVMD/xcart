<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\VendorMessages\View\Menu\Admin\Info;

/**
 * Left side menu widget
 *
 * @Decorator\After ("XC\VendorMessages")
 * @Decorator\Depend ("XC\MultiVendor")
 */
class MenuMultivendor extends \XLite\View\Menu\Admin\Info\Menu implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected function defineItems()
    {
        $list = parent::defineItems();
        $list['disputes'] = [
            static::ITEM_WEIGHT => 1100,
            static::ITEM_WIDGET => 'XLite\Module\XC\VendorMessages\View\Menu\Admin\Info\Disputes',
        ];

        return $list;
    }

    /**
     * @inheritdoc
     */
    protected function getAllowedInfoItems()
    {
        $list = parent::getAllowedInfoItems();
        $list[] = 'messages';
        $list[] = 'disputes';

        return $list;
    }
}
