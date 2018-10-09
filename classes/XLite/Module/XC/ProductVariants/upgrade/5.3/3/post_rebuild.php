<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function productVariants533migrateCount()
{
    $qb = \XLite\Core\Database::getRepo('XLite\Module\XC\ProductVariants\Model\ProductVariant')
        ->createQueryBuilder('v');

    $qb->select('COUNT(v.id)');

    $count = (int)$qb->getSingleScalarResult();

    return $count;
}

function productVariants533migrate($state)
{
    list($position, $count) = $state;

    $repo = \XLite\Core\Database::getRepo('XLite\Module\XC\ProductVariants\Model\ProductVariant');
    $qb = $repo->createQueryBuilder('v');

    $qb->setMaxResults(50);

    $result = $qb->getResult();
    if ($result) {
        /** @var \XLite\Module\XC\ProductVariants\Model\ProductVariant $variant */
        foreach ($result as $variant) {
            $variant->setVariantId($repo->assembleUniqueVariantId($variant));
            $position++;
        }
    } else {
        return null;
    }

    \XLite\Core\Database::getEM()->flush();

    return $position >= $count ? null : [$position, $count];
}

return function ($state)
{
    if (null === $state) {
        return [0, productVariants533migrateCount()];
    }

    return productVariants533migrate($state);
};