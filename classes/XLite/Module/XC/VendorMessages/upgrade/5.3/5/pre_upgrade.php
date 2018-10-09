<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    $readTable = \XLite\Core\Database::getRepo('\XLite\Module\XC\VendorMessages\Model\MessageRead')->getTableName();
    $query = "DELETE r FROM {$readTable} AS r INNER JOIN {$readTable} AS r2 ON r.message_id = r2.message_id AND r.profile_id = r2.profile_id AND r.id > r2.id";
    \XLite\Core\Database::getEM()->getConnection()->executeQuery($query);
};