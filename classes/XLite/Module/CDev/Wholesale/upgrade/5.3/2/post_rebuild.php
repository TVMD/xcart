<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    $repo = \XLite\Core\Database::getRepo('XLite\Module\CDev\Wholesale\Model\WholesalePrice');

    if ($repo) {
        $qb = $repo->createPureQueryBuilder('wp')
            ->update()
            ->set('wp.type', ':newType')
            ->setParameter('newType', \XLite\Module\CDev\Wholesale\Model\Base\AWholesalePrice::WHOLESALE_TYPE_PRICE);

        $qb->getQuery()->execute();
    }

    $repo = \XLite\Core\Database::getRepo('XLite\Module\CDev\Wholesale\Model\ProductVariantWholesalePrice');

    if ($repo) {
        $qb = $repo->createPureQueryBuilder('vwp')
            ->update()
            ->set('vwp.type', ':newType')
            ->setParameter('newType', \XLite\Module\CDev\Wholesale\Model\Base\AWholesalePrice::WHOLESALE_TYPE_PRICE);

        $qb->getQuery()->execute();
    }

    \XLite\Core\Database::getEM()->flush();
};
