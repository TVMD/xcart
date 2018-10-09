<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Model\Product;
use XLite\Module\XC\ProductTags\Model\Tag;


/**
 * CloudSearch store-side API methods
 *
 * @Decorator\Depend ({"XC\ProductTags"})
 */
class StoreApiProductTags extends \XLite\Module\QSL\CloudSearch\Core\StoreApi implements \XLite\Base\IDecorator
{
    /**
     * Get single product data
     *
     * @param Product $product
     *
     * @return array
     */
    public function getProduct(Product $product)
    {
        return parent::getProduct($product) + ['tags' => $this->getTagValues($product)];
    }

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

        $tagValues = $this->getTagValues($product);

        if ($tagValues) {
            $attributes[] = [
                'id'                => 'XC\ProductTags',
                'name'              => (string) static::t('Tags'),
                'preselectAsFilter' => true,
                'group'             => 'Product Tags module',
                'values'            => $tagValues,
            ];
        }

        return $attributes;
    }

    /**
     * Get product's tag values
     *
     * @param Product $product
     *
     * @return array
     */
    protected function getTagValues(Product $product)
    {
        $tags = $product->getTags();

        $tagValues = [];
        /** @var Tag $tag */
        foreach ($tags as $tag) {
            $tagValues[] = $tag->getName();
        }

        return $tagValues;
    }
}
