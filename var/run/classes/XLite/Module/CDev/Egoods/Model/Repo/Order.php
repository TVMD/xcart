<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Egoods\Model\Repo;

/**
 * Order  repository
 */
abstract class Order extends \XLite\Module\CDev\PINCodes\Model\Repo\Order implements \XLite\Base\IDecorator
{
    /**
     * Prepare certain search condition
     *
     * @param \Doctrine\ORM\QueryBuilder $queryBuilder Query builder to prepare
     * @param integer                    $value        Condition data
     *
     * @return void
     */
    protected function prepareCndRecent(\Doctrine\ORM\QueryBuilder $queryBuilder, $value)
    {
        parent::prepareCndRecent($queryBuilder, $value);

        if ($value) {
            $alias = 'EgoodsShippingStatusAlias';

            $queryBuilder->innerJoin('o.shippingStatus', $alias)
                ->orWhere($alias . '.code = :shippingStatus')
                ->setParameter('shippingStatus', \XLite\Model\Order\Status\Shipping::STATUS_WAITING_FOR_APPROVE);
        }
    }

    /**
     * Find all orders bu profile WithEgoods
     *
     * @param \XLite\Model\Profile $profile NOT OPTIONAL (default value is deprecated)
     *
     * @param bool                 $availableOnly
     *
     * @return array
     */
    public function findAllOrdersWithEgoods(\XLite\Model\Profile $profile = null, $availableOnly = true)
    {
        $list = [];

        if ($profile) {
            foreach ($this->defineFindAllOrdersWithEgoodsQuery($profile)->getResult() as $order) {
                if ($order->getDownloadAttachments($availableOnly)) {
                    $list[] = $order;
                }
            }
        }

        return $list;
    }

    /**
     * Define query for findAllOrdersWithEgoods() method
     *
     * @param \XLite\Model\Profile $profile Profile OPTIONAL
     *
     * @return \XLite\Model\QueryBuilder\AQueryBuilder
     */
    protected function defineFindAllOrdersWithEgoodsQuery(\XLite\Model\Profile $profile = null)
    {
        $qb = $this->createQueryBuilder('o')
            ->innerJoin('o.items', 'item')
            ->innerJoin('item.privateAttachments', 'pa')
            ->leftJoin('o.orig_profile', 'op')
            ->orderBy('o.date', 'desc');

        if ($profile) {
            $qb->andWhere('op.profile_id = :opid')
                ->setParameter('opid', $profile->getProfileId());
        }

        return $qb;

    }
}

