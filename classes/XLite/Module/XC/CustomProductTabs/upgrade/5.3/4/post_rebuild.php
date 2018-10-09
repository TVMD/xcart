<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function customProductTabs534count()
{
    return max(
        \XLite\Core\Database::getRepo('\XLite\Module\XC\CustomProductTabs\Model\Product\Tab')->count(),
        \XLite\Core\Database::getRepo('\XLite\Module\XC\CustomProductTabs\Model\Product\CustomGlobalTab')->count()
    );
}

function customProductTabs534process($state)
{
    list($position, $count) = $state;

    $chunk = 50;

    $repo = \XLite\Core\Database::getRepo('\XLite\Module\XC\CustomProductTabs\Model\Product\Tab');
    $qb = $repo->createPureQueryBuilder();
    $qb->orderBy("{$qb->getMainAlias()}.id")
        ->setFirstResult($position)
        ->setMaxResults($chunk);

    /** @var \XLite\Module\XC\CustomProductTabs\Model\Product\Tab $tab */
    foreach ($qb->getResult() as $tab) {
        $tab->assignLink();
    }

    $repo = \XLite\Core\Database::getRepo('\XLite\Module\XC\CustomProductTabs\Model\Product\CustomGlobalTab');
    $qb = $repo->createPureQueryBuilder();
    $qb->orderBy("{$qb->getMainAlias()}.id")
        ->setFirstResult($position)
        ->setMaxResults($chunk);

    /** @var \XLite\Module\XC\CustomProductTabs\Model\Product\CustomGlobalTab $tab */
    foreach ($qb->getResult() as $tab) {
        $tab->assignLink();
    }

    \XLite\Core\Database::getEM()->flush();

    $position += $chunk;
    return $position >= $count ? null : [$position, $count];
}

return function ($state) {
    if (null === $state) {

        return [0, customProductTabs534count()];
    }

    return customProductTabs534process($state);
};