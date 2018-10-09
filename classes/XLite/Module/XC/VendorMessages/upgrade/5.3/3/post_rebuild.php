<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function vendorMessages533migrateCount()
{
    $count = 0;
    $path = LC_DIR_DATA . 'order_messages_migration_orders_data.csv';

    if (file_exists($path)) {
        $handle = fopen($path, 'rb');

        while (fgetcsv($handle)) {
            $count++;
        }
    }

    if (\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\MultiVendor')) {
        $path = LC_DIR_DATA . 'order_messages_migration_messages_data.csv';

        if (file_exists($path)) {
            $handle = fopen($path, 'rb');

            while (fgetcsv($handle)) {
                $count++;
            }
        }
    }

    return $count;
}

function vendorMessages533migrate($state)
{
    list($position, $count) = $state;
    $stepRows = 50;

    $path = LC_DIR_DATA . 'order_messages_migration_orders_data.csv';

    if (file_exists($path)) {
        $handle = fopen($path, 'rb');

        while (($row = fgetcsv($handle)) && $stepRows) {
            /** @var \XLite\Model\Order $order */
            $order = \XLite\Core\Database::getRepo('XLite\Model\Order')->find((integer)$row[0]);
            if ($order) {
                /** @var \XLite\Module\XC\VendorMessages\Model\Conversation $conversation $*/
                $conversation = $order->getConversation()
                    ?:\XLite\Core\Database::getRepo('XLite\Module\XC\VendorMessages\Model\Conversation')->insert(null, false);
                $conversation->setOrder($order);

                if ($profile = $order->getProfile()) {
                    if (!$conversation->isMember($profile)) {
                        $conversation->addMember($profile);
                    }
                }

                if ($profile = $order->getVendor()) {
                    if (!$conversation->isMember($profile)) {
                        $conversation->addMember($profile);
                    }
                }

                \XLite\Core\Database::getEM()->flush($conversation);

                $qb = \XLite\Core\Database::getRepo('XLite\Module\XC\VendorMessages\Model\Message')->createQueryBuilder();

                $alias = $qb->getMainAlias();
                $qb->update()
                    ->set("{$alias}.conversation", ':conversation')
                    ->where("{$alias}.id IN (:ids)")
                    ->setParameter('ids', explode(',', $row[1]))
                    ->setParameter('conversation', $conversation)
                    ->execute();
            }

            $stepRows--;
            $position++;
        }
    }

    if (\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\MultiVendor')) {
        $path = LC_DIR_DATA . 'order_messages_migration_messages_data.csv';

        if (file_exists($path)) {
            $handle = fopen($path, 'rb');

            while (($row = fgetcsv($handle)) && $stepRows) {
                $qb = \XLite\Core\Database::getRepo('XLite\Module\XC\VendorMessages\Model\Message')->createQueryBuilder();

                $type = $row[1] == '1'
                    ? \XLite\Module\XC\VendorMessages\Model\Message::MESSAGE_TYPE_DISPUTE_OPEN
                    : \XLite\Module\XC\VendorMessages\Model\Message::MESSAGE_TYPE_DISPUTE_CLOSE;

                $alias = $qb->getMainAlias();
                $qb->update()
                    ->set("{$alias}.type", ':type')
                    ->where("{$alias}.id = :id")
                    ->setParameter('id', $row[0])
                    ->setParameter('type', $type)
                    ->execute();

                $stepRows--;
                $position++;
            }

            if ($stepRows) {
                return null;
            }
        }
    } elseif ($stepRows) {
        return null;
    }

    \XLite\Core\Database::getEM()->flush();
    return $position >= $count ? null : [$position, $count];
}

return function ($state)
{
    if (null === $state) {
        // Loading data to the database from yaml file
        $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

        if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
            \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
        }

        \XLite\Core\Database::getEM()->flush();

        return [0, vendorMessages533migrateCount()];
    }

    return vendorMessages533migrate($state);
};
