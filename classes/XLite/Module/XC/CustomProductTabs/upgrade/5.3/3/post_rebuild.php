<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function customProductTabs533count()
{
    return \XLite\Core\Database::getRepo('XLite\Model\Product')->count();
}

function customProductTabs533process($state)
{
    list($position, $count) = $state;

    $chunk = 50;

    $repo = \XLite\Core\Database::getRepo('XLite\Model\Product');
    $qb = $repo->createPureQueryBuilder();
    $qb->orderBy("{$qb->getMainAlias()}.product_id")
        ->setFirstResult($position)
        ->setMaxResults($chunk);

    foreach ($qb->getResult() as $product) {
        \XLite\Core\Database::getRepo('XLite\Model\Product\GlobalTab')->createGlobalTabsAliases($product);
    }

    $position += $chunk;
    return $position >= $count ? null : [$position, $count];
}

return function ($state) {
    if (null === $state) {
        // Load new data
        $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);

        $qb = \XLite\Core\Database::getRepo('XLite\Module\XC\CustomProductTabs\Model\Product\Tab')
            ->createQueryBuilder();

        $qb->getParameters()->clear();
        $qb->delete()
            ->where($qb->getMainAlias() . '.global_tab IS NOT NULL');

        $qb->execute();

        \XLite\Core\Database::getEM()->flush();

        return [0, customProductTabs533count()];
    }

    return customProductTabs533process($state);
};