<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\View\ItemsList\Product\Customer;

use XLite\Module\QSL\CloudSearch\Main;


/**
 * ACustomer
 */
abstract class ACustomer extends \XLite\View\ItemsList\Product\Customer\ACustomer implements \XLite\Base\IDecorator
{
    protected function isCloudFiltersMobileLinkVisible()
    {
        return Main::isCloudFiltersEnabled()
            && in_array($this->getTarget(), [
                'category',
                'search',
                'sale_products',
                'bestsellers',
                'new_arrivals',
                'coming_soon',
                'vendor',
                'brand',
            ], true);
    }
}
