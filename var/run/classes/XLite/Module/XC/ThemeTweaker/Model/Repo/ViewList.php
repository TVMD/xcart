<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Model\Repo;

use XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker;

/**
 * View list repository
 *
 * @Api\Operation\Update(modelClass="XLite\Model\ViewList", summary="Update view list item by id")
 */
 class ViewList extends \XLite\Model\Repo\ViewListAbstract implements \XLite\Base\IDecorator
{
    /**
     * Define query builder for findClassList()
     *
     * @param array $changeset Array of change records
     *
     * @return void
     */
    public function updateOverrides($changeset)
    {
        if ($changeset) {
            foreach ($changeset as $change) {
                $entity = $this->find($change['id']);
                if ($entity) {
                    $entity->setOverrideMode($change['mode']);

                    if (isset($change['list'])) {
                        list($list) = explode(',', $change['list']);
                        $entity->setListOverride($list);
                    }

                    if (isset($change['weight'])) {
                        $entity->setWeightOverride($change['weight']);
                    }
                }
            }

            $this->cleanCache();

            \XLite\Core\Database::getEM()->flush();
        }
    }

    /**
     * Define query builder for findClassList()
     *
     * @param string $list Class list name
     * @param string $zone Current interface name
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function defineClassListQuery($list, $zone)
    {
        $qb = $this->createQueryBuilder()
            ->where('IF (v.list_override != :empty, v.list_override, v.list) IN (:list) AND v.zone IN (:zone, :empty) AND v.version IS NULL')
            ->addSelect('CASE WHEN v.override_mode > 0 THEN v.weight_override ELSE v.weight END AS HIDDEN ORD')
            ->orderBy('ORD', 'asc')
            ->setParameter('empty', '')
            ->setParameter('list', explode(',', $list))
            ->setParameter('zone', $zone);

        if (!\XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker::getInstance()->isInLayoutMode()) {
            $qb->andWhere("v.override_mode != :hidden")
                ->setParameter('hidden', \XLite\Module\XC\ThemeTweaker\Model\ViewList::OVERRIDE_HIDE);
        }

        return $qb;
    }

    /**
     * Define query builder for findClassList()
     *
     * @param string $list Class list name
     * @param string $zone Current interface name
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    protected function defineClassListWithFallbackQuery($list, $zone)
    {
        $qb = $this->createQueryBuilder()
            ->where('IF (v.list_override != :empty, v.list_override, v.list) IN (:list) AND v.zone IN (:zone, :fallback, :empty) AND v.version IS NULL')
            ->addSelect('CASE WHEN v.override_mode > 0 THEN v.weight_override ELSE v.weight END AS HIDDEN ORD')
            ->orderBy('ORD', 'asc')
            ->setParameter('empty', '')
            ->setParameter('list', explode(',', $list))
            ->setParameter('fallback', \XLite::COMMON_INTERFACE)
            ->setParameter('zone', $zone);

        if (!\XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker::getInstance()->isInLayoutMode()) {
            $qb->andWhere("v.override_mode != :hidden")
                ->setParameter('hidden', \XLite\Module\XC\ThemeTweaker\Model\ViewList::OVERRIDE_HIDE);
        }

        return $qb;
    }

    /**
     * Find overridden view list items
     *
     * @return array
     */
    public function findOverridden()
    {
        return $this->defineOverriddenQueryBuilder()->getResult();
    }

    /**
     * Find overridden view list items
     *
     * @return array
     */
    public function findOverriddenData()
    {
        $qb = $this->defineOverriddenQueryBuilder();
        $alias = $qb->getMainAlias();

        $properties = [
            'list_override',
            'weight_override',
            'override_mode',
            'list',
            'child',
            'tpl',
            'zone',
            'weight',
        ];

        $qb->select("v.list_id");

        foreach ($properties as $property) {
            $qb->addSelect("{$alias}.{$property}");
        }

        return $qb->getArrayResult();
    }

    /**
     * Define overridden query builder
     *
     * @return \XLite\Model\QueryBuilder\AQueryBuilder
     */
    public function defineOverriddenQueryBuilder()
    {
        return $this->createQueryBuilder()
            ->where('v.override_mode > :off_mode')
            ->andWhere('v.version IS NULL')
            ->setParameter('off_mode', \XLite\Model\ViewList::OVERRIDE_OFF);
    }

    /**
     * Find first entity equal to $other
     *
     * @param \XLite\Model\ViewList $other     Other entity
     * @param boolean               $versioned Add `version is not null` condition
     *
     * @return \XLite\Model\ViewList|null
     */
    public function findEqual(\XLite\Model\ViewList $other, $versioned = false)
    {
        if (!$other) {
            return null;
        }

        $conditions = [
            'list'   => $other->getList(),
            'child'  => $other->getChild(),
            'tpl'    => $other->getTpl(),
            'zone'   => $other->getZone(),
            'weight' => $other->getWeight(),
        ];

        return $this->findEqualByData($conditions, $versioned);
    }

    /**
     * Find first entity equal to data
     *
     * @param array   $conditions
     * @param boolean $versioned Add `version is not null` condition
     *
     * @return \XLite\Model\ViewList|null
     */
    public function findEqualByData($conditions, $versioned = false)
    {
        $qb = $this->createQueryBuilder()->setParameters($conditions);

        foreach ($conditions as $key => $condition) {
            $qb->andWhere("v.{$key} = :{$key}");
        }

        if ($versioned) {
            $qb->andWhere('v.version IS NOT NULL');
        }

        return $qb->getSingleResult();
    }

    /**
     * Find class list
     *
     * @param string $list List name
     * @param string $zone Current interface name OPTIONAL
     *
     * @return array
     */
    public function findClassList($list, $zone = \XLite\Model\ViewList::INTERFACE_CUSTOMER)
    {
        return ThemeTweaker::getInstance()->isInLayoutMode()
            ? $this->retrieveClassList($list, $zone)
            : parent::findClassList($list, $zone);
    }
}
