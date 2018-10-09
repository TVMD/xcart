<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    \XLite\Core\Database::getEM()->flush();
    \XLite\Core\Config::updateInstance();

    updateMailChimpConfigOption5_3_7();
    removeMailChimpConfigOption5_3_7();
};

function updateMailChimpConfigOption5_3_7()
{
    $defaultAutomaticList = \XLite\Core\Config::getInstance()->XC->MailChimp->selectedAbandonedCartsListid;

    \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
        'name'     => 'defaultAutomationListId',
        'category' => 'XC\MailChimp',
        'value'    => $defaultAutomaticList,
    ]);
}

function removeMailChimpConfigOption5_3_7()
{
    $qb = \XLite\Core\Database::getRepo('XLite\Model\Config')
        ->createPureQueryBuilder();
    $alias = $qb->getMainAlias();

    $qb->delete()
        ->where($qb->expr()->andX(
            $qb->expr()->eq("$alias.name", $qb->expr()->literal('selectedAbandonedCartsListid')),
            $qb->expr()->eq("$alias.category", $qb->expr()->literal('XC\MailChimp'))
        ))
        ->getQuery()
        ->execute();
}
