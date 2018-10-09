<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Menu\Admin\Info;


class Menu extends \XLite\View\Menu\Admin\Info\Menu implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected function defineItems()
    {
        $list = parent::defineItems();
        $list['paypal_PDT_detected'] = [
            static::ITEM_WEIGHT => 200,
            static::ITEM_WIDGET => '\XLite\Module\CDev\Paypal\View\Menu\Admin\Info\PDTNotification',
        ];

        return $list;
    }
}