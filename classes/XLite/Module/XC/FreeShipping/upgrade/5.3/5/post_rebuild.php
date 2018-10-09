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

    \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
        'name'     => 'display_update_info',
        'category' => 'XC\\FreeShipping',
        'value'    => true,
    ], true);

    \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
        'name'     => 'display_update_import_info',
        'category' => 'XC\\FreeShipping',
        'value'    => true,
    ], true);

    \XLite\Core\Database::getEM()->flush();
};
