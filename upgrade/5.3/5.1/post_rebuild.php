<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */


return function () {
    waitingForApprove5351();
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    removeConfigOptions5351();

    \XLite\Core\Database::getEM()->flush();
};

function removeConfigOptions5351()
{
    $options = \XLite\Core\Database::getRepo('XLite\Model\Config')->findBy([
        'name' => 'force_customers_to_https',
        'category' => 'Security'
    ]);

    foreach ($options as $option) {
        \XLite\Core\Database::getEM()->remove($option);
    }
}

function waitingForApprove5351()
{
    if (!\XLite\Core\Database::getRepo('XLite\Model\Order\Status\Shipping')->findOneBy(['code' => 'WFA'])) {
        $file = __DIR__ . '/waiting_for_approve.yaml';
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($file);
        \XLite\Core\Database::getEM()->flush();
    }
}