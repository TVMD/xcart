<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    $ordersTable = \XLite\Core\Database::getRepo('XLite\Model\Order')->getTableName();
    $messagesTable = \XLite\Core\Database::getRepo('XLite\Module\XC\VendorMessages\Model\Message')->getTableName();

    $query = "SELECT " .
                 "o.order_id, " .
                 "GROUP_CONCAT(m.id SEPARATOR ',') " .
             "FROM `{$ordersTable}` as o " .
             "INNER JOIN `{$messagesTable}` as m ON m.order_id = o.order_id GROUP BY o.order_id";

    $stmt = \XLite\Core\Database::getEM()->getConnection()->executeQuery($query);

    if ($result = $stmt->fetchAll()) {
        $path = LC_DIR_DATA . 'order_messages_migration_orders_data.csv';
        \Includes\Utils\FileManager::mkdirRecursive(LC_DIR_DATA);
        $handle = fopen($path, 'wb');

        if (!$handle) {
            throw new \Exception("Cannot create migration file in {$path}");
        }

        foreach ($result as $item) {
            fputcsv($handle, $item);
        }

        fclose($handle);
    }

    if (\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\MultiVendor')) {
        $qb = \XLite\Core\Database::getRepo('XLite\Module\XC\VendorMessages\Model\Message')->createQueryBuilder();
        $alias = $qb->getMainAlias();
        $qb->select("{$alias}.id as id, {$alias}.dispute_state as ds")
            ->where("{$alias}.dispute_state != 0");

        $filePath = LC_DIR_DATA . 'order_messages_migration_messages_data.csv';
        try {
            if ($result = $qb->getResult()) {
                $path = $filePath;
                \Includes\Utils\FileManager::mkdirRecursive(LC_DIR_DATA);
                $handle = fopen($path, 'wb');

                if (!$handle) {
                    throw new \Exception("Cannot create migration file in {$path}");
                }

                foreach ($result as $item) {
                    fputcsv($handle, $item);
                }

                fclose($handle);
            }
        } catch (\Doctrine\ORM\Query\QueryException $e) {
            if (isset($handle)) {
                fclose($handle);
            }

            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    }
};