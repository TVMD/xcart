<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Core\Auth;
use XLite\Core\CommonCell;
use XLite\Module\QSL\CloudSearch\Model\Repo\Product;
use XLite\View\ItemsList\Product\Customer\Search as SearchList;


/**
 * Produces CloudSearch search parameters from CommonCell conditions
 */
abstract class SearchParametersAbstract implements SearchParametersInterface
{
    /**
     * @var CommonCell
     */
    protected $cnd;

    /**
     * SearchParameters constructor.
     *
     * @param CommonCell $cnd
     */
    public function __construct(CommonCell $cnd)
    {
        $this->cnd = $cnd;
    }

    /**
     * Get search parameters
     *
     * @return array
     */
    public function getParameters()
    {
        $query           = $this->cnd->{Product::P_SUBSTRING};
        $categoryId      = $this->cnd->{Product::P_CATEGORY_ID};
        $searchInSubcats = $this->cnd->{Product::P_SEARCH_IN_SUBCATS};
        $filters         = $this->cnd->{Product::P_CLOUD_FILTERS};
        list($offset, $limit) = $this->cnd->{Product::P_LIMIT};
        list($sortMode, $sortDir) = $this->cnd->{Product::P_ORDER_BY};

        $searchBy = array_keys(array_filter([
            'name'        => $this->cnd->{Product::P_BY_TITLE},
            'description' => $this->cnd->{Product::P_BY_DESCR},
            'sku'         => $this->cnd->{Product::P_BY_SKU},
        ]));

        // Workaround for X-Cart bug when offset is set to a negative value
        $offset = max($offset, 0);

        $membership = Auth::getInstance()->getMembershipId();

        $sortFieldMappings = $this->getSortFieldMappings();

        // X-Cart sends asc direction for the below sort modes. Force to use desc.
        if (isset($sortFieldMappings[$sortMode])
            && in_array($sortFieldMappings[$sortMode], ['sort_float_rating', 'sort_int_sales'])
        ) {
            $sortDir = 'desc';
        }

        $sort = isset($sortFieldMappings[$sortMode])
            ? $sortFieldMappings[$sortMode] . ' ' . $sortDir : null;

        // Switch to relevance sorting on default sorting mode if P_SUBSTRING isn't empty
        if (
            $sortMode == SearchList::SORT_BY_MODE_DEFAULT
            && $query !== null
            && $query !== ''
        ) {
            $sort = null;
        }

        return [
            'q'               => $query,
            'searchIn'        => $searchBy,
            'categoryId'      => $categoryId,
            'searchInSubcats' => $searchInSubcats,
            'conditions'      => [],
            'filters'         => $filters,
            'facet'           => true,
            'membership'      => $membership,
            'sort'            => $sort,
            'offset'          => $offset,
            'limits'          => [
                'products'      => $limit,
                'categories'    => 0,
                'manufacturers' => 0,
                'pages'         => 0,
            ],
        ];
    }

    /**
     * Get "X-Cart search mode -> CloudSearch sort field" mapping
     *
     * @return array
     */
    protected function getSortFieldMappings()
    {
        return [
            'cp.orderby'        => 'sort_int_orderby',
            'p.arrivalDate'     => 'sort_int_arrival_date',
            'p.price'           => 'sort_float_price',
            'translations.name' => 'sort_str_name',
            'r.rating'          => 'sort_float_rating',
            'p.sales'           => 'sort_int_sales',
        ];
    }
}
