<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\PINCodes\Logic\BulkEdit;

/**
 * @Decorator\Depend ("XC\BulkEditing")
 */
 class Scenario extends \XLite\Module\CDev\Sale\Logic\BulkEdit\Scenario implements \XLite\Base\IDecorator
{
    /**
     * @return array
     */
    protected static function defineScenario()
    {
        $result = parent::defineScenario();
        $result['product_pin_codes'] = [
            'title'   => \XLite\Core\Translation::getInstance()->translate('PIN codes'),
            'url'     => 'https://ideas.x-cart.com/forums/229428-x-cart-5-x/suggestions/15147651-bulk-products-editing-pin-codes',
        ];

        return $result;
    }
}
