<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Model\Product;
use XLite\Module\XC\MultiVendor\Model\Product as MultiVendorProduct;


/**
 * CloudSearch store-side API methods
 *
 * @Decorator\Depend ({"XC\MultiVendor"})
 */
class StoreApiMultiVendor extends \XLite\Module\QSL\CloudSearch\Core\StoreApi implements \XLite\Base\IDecorator
{
    /**
     * Get filterable product attributes data
     *
     * @param $product
     *
     * @return array
     */
    protected function getFilterableProductAttributes(Product $product)
    {
        $attributes = parent::getFilterableProductAttributes($product);

        /** @var MultiVendorProduct $product */
        $vendor = $product->getVendor();

        $vendorName = $vendor !== null ? $vendor->getVendorCompanyName() : (string) static::t('Main vendor');

        if (!empty($vendorName)) {
            $attributes[] = [
                'id'                => 'XC\MultiVendor',
                'name'              => (string) static::t('Vendor'),
                'preselectAsFilter' => true,
                'group'             => 'Multi-vendor module',
                'values'            => [$vendorName],
            ];
        }

        return $attributes;
    }

    /**
     * Get searchable product attributes data
     *
     * @param $product
     *
     * @return array
     */
    protected function getSearchableProductAttributes(Product $product)
    {
        $attributes = parent::getSearchableProductAttributes($product);

        /** @var MultiVendorProduct $product */
        $vendor = $product->getVendor();

        $vendorName = $vendor !== null ? $vendor->getVendorCompanyName() : (string) static::t('Main vendor');

        if (!empty($vendorName)) {
            $attributes[] = [
                'name'   => (string) static::t('Vendor'),
                'values' => [$vendorName],
            ];
        }

        return $attributes;
    }

    /**
     * Get "conditions" that can be used to restrict the results when searching.
     *
     * This is different from "attributes" which are used to construct full-fledged filters (CloudFilters).
     *
     * @param Product $product
     * @return array
     */
    protected function getProductConditions(Product $product)
    {
        $conditions = parent::getProductConditions($product);

        /** @var MultiVendorProduct $product */
        $vendor = $product->getVendor();

        $vendorId = $vendor !== null ? $vendor->getProfileId() : 0;

        $conditions['vendor'] = [$vendorId];

        return $conditions;
    }
}
