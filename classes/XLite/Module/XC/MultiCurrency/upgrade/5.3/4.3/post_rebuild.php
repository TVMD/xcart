<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function()
{
    if (\XLite\Core\Config::getInstance()->XC->MultiCurrency->rateProvider == 'webx'
        || \XLite\Core\Config::getInstance()->XC->MultiCurrency->rateProvider == 'google'
    ) {
        \XLite\Core\Database::getRepo('XLite\Model\Config')->createOption([
            'name'     => 'rateProvider',
            'category' => 'XC\MultiCurrency',
            'value'    => \XLite\Module\XC\MultiCurrency\Core\CurrencyRate::PROVIDER_FREE_CURRENCY_CONVERTER_API,
        ]);
    }
};
