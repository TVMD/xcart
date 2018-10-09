<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function cdev_gosocial_5_3_3_8_useCustomOg()
{
    if (!\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('CDev\SimpleCMS')) {
        return;
    }

    $repo = \XLite\Core\Database::getRepo('XLite\Module\CDev\SimpleCMS\Model\Page');
    $qb = $repo->createPureQueryBuilder();

    $qb->update('XLite\Module\CDev\SimpleCMS\Model\Page', 'p')
        ->set('p.useCustomOG', true)
        ->where('p.ogMeta != :empty')
        ->setParameter('empty', '')
        ->getQuery()
        ->execute();
}

return function()
{
    cdev_gosocial_5_3_3_8_useCustomOg();
};
