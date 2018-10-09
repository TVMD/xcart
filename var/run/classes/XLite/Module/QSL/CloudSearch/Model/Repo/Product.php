<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Model\Repo;

use Doctrine\ORM\QueryBuilder;
use XLite\Core\CommonCell;
use XLite\Module\QSL\CloudSearch\Core\ServiceApiClient;
use XLite\Module\QSL\CloudSearch\Core\SearchParameters;


/**
 * The "product" repo class
 */
abstract class Product extends \XLite\Module\QSL\CloudSearch\Model\Repo\ProductBestsellers implements \XLite\Base\IDecorator
{
    const P_CLOUD_FILTERS = 'cloudFilters';

    const P_LOAD_PRODUCTS_WITH_CLOUD_SEARCH = 'loadProductsWithCloudSearch';

    const P_SKIP_MEMBERSHIP_CONDITION = 'skipMembershipCondition';

    /**
     * Get CloudSearch search results with current searchState conditions
     *
     * @return array|null
     */
    protected function getCloudSearchResults()
    {
        $client = new ServiceApiClient();

        return $client->search(new SearchParameters($this->getCloudSearchConditions()));
    }

    /**
     * Get product ids returned from CloudSearch
     *
     * @return array|null
     */
    protected function getCloudSearchProductIds()
    {
        $results = $this->getCloudSearchResults();

        return array_map(function ($p) {
            return intval($p['id']);
        }, $results['products']);
    }

    /**
     * Search count only routine.
     *
     * @return integer
     */
    protected function searchCount()
    {
        if ($this->isLoadProductsWithCloudSearch()) {
            $results = $this->getCloudSearchResults();

            return $results['numFoundProducts'];
        }

        return parent::searchCount();
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param string       $value        Condition data
     *
     * @return void
     */
    protected function prepareCndSubstring(QueryBuilder $queryBuilder, $value)
    {
        if (!$this->isLoadProductsWithCloudSearch()) {
            parent::prepareCndSubstring($queryBuilder, $value);
        }
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param mixed        $value        Condition data
     *
     * @return void
     */
    protected function prepareCndCategoryId(QueryBuilder $queryBuilder, $value)
    {
        if (!$this->isLoadProductsWithCloudSearch()) {
            parent::prepareCndCategoryId($queryBuilder, $value);
        }
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param array        $value        Condition data
     *
     * @return void
     */
    protected function prepareCndLimit(QueryBuilder $queryBuilder, array $value)
    {
        if (!$this->isLoadProductsWithCloudSearch()) {
            parent::prepareCndLimit($queryBuilder, $value);
        }
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param array        $value        Condition data
     */
    protected function prepareCndOrderBy(QueryBuilder $queryBuilder, array $value)
    {
        if ($this->isLoadProductsWithCloudSearch() && !$this->isCountSearchMode()) {
            $ids = $this->getCloudSearchProductIds();

            if (!empty($ids)) {
                $queryBuilder->resetDQLPart('orderBy');
                $queryBuilder
                    ->addSelect('FIELD(p.product_id, ' . implode(', ', $ids) . ') AS cloud_seach_field_product_id')
                    ->addOrderBy('cloud_seach_field_product_id', 'asc');
            }
        } else {
            parent::prepareCndOrderBy($queryBuilder, $value);
        }
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param string       $value        Condition data
     *
     * @return void
     */
    protected function prepareCndCloudFilters(QueryBuilder $queryBuilder, $value)
    {
        // No-op handler for the 'cloudFilters' search condition
    }

    /**
     * Prepare certain search condition
     *
     * @param QueryBuilder $queryBuilder Query builder to prepare
     * @param string       $value        Condition data
     *
     * @return void
     */
    protected function prepareCndLoadProductsWithCloudSearch(QueryBuilder $queryBuilder, $value)
    {
        if ($this->isLoadProductsWithCloudSearch()) {
            $ids = $this->getCloudSearchProductIds();

            if (!empty($ids)) {
                $queryBuilder->andWhere('p.product_id IN (' . implode(', ', $ids) . ')');
            } else {
                // Force empty result set:
                $queryBuilder->andWhere('p.product_id IN (0)');
            }
        }
    }

    /**
     * Adds additional condition to the query for checking if product has available membership
     *
     * @param QueryBuilder $queryBuilder Query builder object
     * @param string       $alias        Entity alias OPTIONAL
     *
     * @return void
     */
    protected function addMembershipCondition(QueryBuilder $queryBuilder, $alias = null)
    {
        $cnd = $this->searchState['currentSearchCnd'];

        if (empty($cnd->{self::P_SKIP_MEMBERSHIP_CONDITION})) {
            parent::addMembershipCondition($queryBuilder, $alias);
        }
    }

    /**
     * Get current search conditions
     *
     * @return CommonCell
     */
    public function getCloudSearchConditions()
    {
        return $this->searchState['currentSearchCnd'];
    }

    /**
     * Check if products should be fetched from CloudSearch
     *
     * @return mixed
     */
    protected function isLoadProductsWithCloudSearch()
    {
        $cnd = $this->getCloudSearchConditions();

        return $cnd->{self::P_LOAD_PRODUCTS_WITH_CLOUD_SEARCH} && $this->getCloudSearchResults() !== null;
    }
}