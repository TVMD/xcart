<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function () {
    $isHttpsEnabled =
        \XLite\Core\Config::getInstance()->Security->admin_security
        && \XLite\Core\Config::getInstance()->Security->customer_security;

    $httpsSettingUrl = \XLite\Core\Converter::buildURL('https_settings', '', [], \XLite::getAdminScript());

    if (!$isHttpsEnabled) {
        \XLite\Core\TopMessage::addWarning(
            '<strong>' . \XLite\Core\Translation::lbl('Secure protocol is disabled! ') . '</strong>'
            . \XLite\Core\Translation::lbl('This may cause issues during checkout in some browsers. ')
            . \XLite\Core\Translation::lbl('In order to enable it, go to the ')
            . '<a href="' . $httpsSettingUrl . '" title="' . \XLite\Core\Translation::lbl('HTTPS settings ') . '">'
            . \XLite\Core\Translation::lbl('HTTPS settings') . '</a> ' . \XLite\Core\Translation::lbl('page and click the ')
            . '<strong>' . \XLite\Core\Translation::lbl('Enable HTTPS') . '</strong> '
            . \XLite\Core\Translation::lbl('button') . '.'
        );
    }
};
