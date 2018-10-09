<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function convertContactAddresses()
{
    $repo = \XLite\Core\Database::getRepo('XLite\Model\Config');
    $config = \XLite\Core\Config::getInstance()->Company;

    if ($config->site_administrator) {
        $repo->createOption([
            'category' => 'Company',
            'name'     => 'site_administrator',
            'value'    => serialize([$config->site_administrator]),
        ]);
    }

    if ($config->users_department) {
        $repo->createOption([
            'category' => 'Company',
            'name'     => 'users_department',
            'value'    => serialize([$config->users_department]),
        ]);
    }

    if ($config->orders_department) {
        $repo->createOption([
            'category' => 'Company',
            'name'     => 'orders_department',
            'value'    => serialize([$config->orders_department]),
        ]);
    }

    if ($config->support_department) {
        $repo->createOption([
            'category' => 'Company',
            'name'     => 'support_department',
            'value'    => serialize([$config->support_department]),
        ]);
    }
}

function convertEmailCheckboxes()
{
    if (\Xlite\Core\Config::getInstance()->Email->use_smtp === 'N') {
        \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
            'category' => 'Email',
            'name'     => 'use_smtp',
            'value'    => '',
        ]);
    }

    if (\Xlite\Core\Config::getInstance()->Email->use_smtp_auth === 'N') {
        \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
            'category' => 'Email',
            'name'     => 'use_smtp_auth',
            'value'    => '',
        ]);
    }
}

return function () {
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    convertContactAddresses();

    \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
        'category' => 'Performance',
        'name'     => 'unsharp_mask_filter_on_resize',
        'value'    => (boolean)\XLite::getInstance()->getOptions(['images', 'unsharp_mask_filter_on_resize']),
    ]);

    $qb = \XLite\Core\Database::getRepo('XLite\Model\Config')->createPureQueryBuilder();
    $alias = $qb->getMainAlias();
    $qb->getParameters()->clear();
    $qb->delete()
        ->where("{$alias}.name = :name AND {$alias}.category = :category")
        ->setParameters([
            'name'     => 'smtp_server',
            'category' => 'Email',
        ]);
    $qb->execute();

    convertEmailCheckboxes();

    \XLite\Core\Database::getEM()->flush();
};

