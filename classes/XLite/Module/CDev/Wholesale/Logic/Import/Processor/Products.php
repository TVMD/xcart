<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Wholesale\Logic\Import\Processor;

use XLite\Module\CDev\Wholesale\Model\Base\AWholesalePrice;

/**
 * Products
 */
abstract class Products extends \XLite\Logic\Import\Processor\Products implements \XLite\Base\IDecorator
{
    // {{{ Columns

    /**
     * Define columns
     *
     * @return array
     */
    protected function defineColumns()
    {
        $columns = parent::defineColumns();

        $columns['wholesalePrices'] = [
            static::COLUMN_IS_MULTIPLE => true,
        ];

        return $columns;
    }

    // }}}

    /**
     * @inheritdoc
     */
    public static function getMessages()
    {
        return parent::getMessages()
               + [
                   'WHOLESALE-DUPLICATE-ERR' => 'Tier with same quantity range and membership already defined.',
               ];
    }

    // {{{ Verification

    /**
     * Verify 'wholesalePrices' value
     *
     * @param mixed $value  Value
     * @param array $column Column info
     *
     * @return void
     */
    protected function verifyWholesalePrices($value, array $column)
    {
        if ($value) {
            $values = [];
            foreach ($value as $price) {
                if (preg_match('/^(\d+)(-(\d+))?(\((.+)\))?=(\d+\.?\d*)(%?)$/iSs', $price, $m)) {
                    $data = [
                        'membership'         => $this->normalizeValueAsMembership($m[5]),
                        'price'              => $m[6],
                        'quantityRangeBegin' => $m[1],
                        'quantityRangeEnd'   => intval($m[3]),
                    ];
                    if (isset($m[7]) && '%' == $m[7]) {
                        $data['type'] = AWholesalePrice::WHOLESALE_TYPE_PERCENT;
                    } else {
                        $data['type'] = AWholesalePrice::WHOLESALE_TYPE_PRICE;
                    }

                    $callback = function ($tier) use ($data) {
                        return $data['quantityRangeBegin'] === $tier['quantityRangeBegin']
                            && $data['membership'] === $tier['membership'];
                    };

                    if (array_filter($values, $callback)) {
                        $this->addError('WHOLESALE-DUPLICATE-ERR', ['column' => $column, 'value' => $data]);
                    } else {
                        $values[] = $data;
                    }
                }
            }
        }
    }

    // }}}

    // {{{ Import

    /**
     * Import 'wholesalePrices' value
     *
     * @param \XLite\Model\Product $model  Product
     * @param array                $value  Value
     * @param array                $column Column info
     *
     * @return void
     */
    protected function importWholesalePricesColumn(\XLite\Model\Product $model, array $value, array $column)
    {
        foreach (\XLite\Core\Database::getRepo('\XLite\Module\CDev\Wholesale\Model\WholesalePrice')->findByProduct($model) as $price) {
            \XLite\Core\Database::getRepo('\XLite\Module\CDev\Wholesale\Model\WholesalePrice')->delete($price);
        }

        if ($value) {
            $repo = \XLite\Core\Database::getRepo('XLite\Module\CDev\Wholesale\Model\WholesalePrice');
            foreach ($value as $price) {
                if (preg_match('/^(\d+)(-(\d+))?(\((.+)\))?=(\d+\.?\d*)(%?)$/iSs', $price, $m)) {
                    $data = [
                        'membership'         => $this->normalizeValueAsMembership($m[5]),
                        'product'            => $model,
                        'price'              => $m[6],
                        'quantityRangeBegin' => $m[1],
                        'quantityRangeEnd'   => intval($m[3]),
                    ];

                    if (isset($m[7]) && '%' == $m[7]) {
                        $data['type'] = AWholesalePrice::WHOLESALE_TYPE_PERCENT;
                    } else {
                        $data['type'] = AWholesalePrice::WHOLESALE_TYPE_PRICE;
                    }

                    $repo->insert($data, false);
                }
            }
        }
    }

    // }}}
}
