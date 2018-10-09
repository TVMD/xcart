<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    /** @var \XLite\Model\Payment\Method $method */
    $method = \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')
        ->findOneBy(['service_name' => 'AuthorizeNet SIM']);

    if ($method) {
        $hash_key = $method->getSetting('hash_key');
        $hash_type = $method->getSetting('hash_type');
        $md5_key = $method->getSetting('md5_key');

        if (!$hash_key && $hash_type === 'md5' && $md5_key) {
            $method->setSetting('hash_key', $md5_key);
        }

        $md5_setting = \XLite\Core\Database::getRepo('XLite\Model\Payment\MethodSetting')
            ->findOneBy(['payment_method' => $method, 'name' => 'md5_key']);

        if ($md5_setting) {
            \XLite\Core\Database::getEM()->remove($md5_setting);
        }

        \XLite\Core\Database::getEM()->flush();
    }
};
