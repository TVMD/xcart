<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Model\Attribute;
use XLite\Module\XC\ProductVariants\Model\AttributeValue\AttributeValueSelect;
use XLite\Model\Product;
use XLite\Module\XC\ProductVariants\Model\ProductVariant;

/**
 * CloudSearch store-side API methods
 *
 * @Decorator\Depend ({"XC\ProductVariants"})
 */
abstract class StoreApiProductVariants extends \XLite\Module\QSL\CloudSearch\Core\StoreApi implements \XLite\Base\IDecorator
{
    /**
     * Get product variants data.
     *
     * @param Product $product
     * @param         $attributes
     *
     * @return array
     */
    protected function getProductVariants(Product $product, $attributes)
    {
        $variants = [];

        if ($product->getVariants()->count() > 0) {
            $variantAttrIds = array_map(function ($v) {
                return $v->getAttribute()->getId();
            }, $product->getVariants()->first()->getValues());

            $commonAttrs = array_filter($attributes, function ($attr) use ($variantAttrIds) {
                return !in_array($attr['id'], $variantAttrIds);
            });

            /** @var ProductVariant $variant */
            foreach ($product->getVariants() as $variant) {
                if ($variant->isOutOfStock()) {
                    continue;
                }

                $variantData = [
                    'id'         => $variant->getId(),
                    'price'      => $variant->getDisplayPrice(),
                    'attributes' => [],
                ];

                /** @var AttributeValueSelect $value */
                foreach ($variant->getValues() as $value) {
                    /** @var Attribute $attribute */
                    $attribute = $value->getAttribute();

                    $variantData['attributes'][] = [
                        'id'     => $attribute->getId(),
                        'name'   => htmlspecialchars_decode($attribute->getName()),
                        'values' => [(string) $value->asString()],
                    ];
                }

                $variantData['attributes'] = array_merge($variantData['attributes'], $commonAttrs);

                $variants[] = $variantData;
            }

            if (empty($variants)) {
                // Return a fake variant if all existing variants are out of stock to allow filtering on regular (non-variant) attributes. This keeps behavior consistent with regular products.

                return parent::getProductVariants($product, $commonAttrs);
            }

        } else {
            return parent::getProductVariants($product, $attributes);
        }

        return $variants;
    }

    /**
     * Get product price.
     *
     * @param Product $product
     *
     * @return float
     */
    protected function getProductPrice(Product $product)
    {
        if ($product->getVariants()->count() > 0) {
            return $product->getDisplayPrice();
        }

        return parent::getProductPrice($product);
    }

    /**
     * Get product SKUs (multiple if there are variants)
     *
     * @param $product
     *
     * @return array
     */
    protected function getSkus($product)
    {
        $skus = parent::getSkus($product);

        foreach ($product->getVariants() as $variant) {
            $skus[] = $variant->getSku();
        }

        return $skus;
    }
}
