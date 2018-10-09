<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MailChimp\View\FormField\Select;


class SendCoupons extends \XLite\View\FormField\Select\Regular
{
    const SEND_ALL   = 'all';
    const SEND_MATCH = 'match';

    protected function isVisible()
    {
        return parent::isVisible()
            && \XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('CDev\Coupons');
    }

    /**
     * Return default options list
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return [
            static::SEND_ALL   => static::t('send all discount coupons'),
            static::SEND_MATCH => static::t('send only discount coupons with matched rules'),
        ];
    }
}