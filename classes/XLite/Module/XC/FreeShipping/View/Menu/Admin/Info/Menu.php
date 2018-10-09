<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FreeShipping\View\Menu\Admin\Info;


class Menu extends \XLite\View\Menu\Admin\Info\Menu implements \XLite\Base\IDecorator
{
    protected function defineItems()
    {
        return parent::defineItems() + [
                'freeShippingUpdate' => [
                    static::ITEM_WEIGHT => 150,
                    static::ITEM_WIDGET => 'XLite\Module\XC\FreeShipping\View\Menu\Admin\FreeShippingUpdate',
                ],
            ];
    }
}