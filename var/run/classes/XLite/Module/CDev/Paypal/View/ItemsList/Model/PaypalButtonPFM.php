<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\ItemsList\Model;

class PaypalButtonPFM extends \XLite\Module\CDev\Paypal\View\ItemsList\Model\PaypalButton
{
    /**
     * Should itemsList be wrapped with form
     *
     * @return boolean
     */
    protected function wrapWithFormByDefault()
    {
        return true;
    }

    /**
     * @return string
     */
    protected function getFormTarget()
    {
        return 'paypal_button';
    }

    /**
     * @return string
     */
    protected function getFormAction()
    {
        return 'update';
    }

    /**
     * Get plain data
     *
     * @return array
     */
    protected function getPlainData()
    {
        $data = parent::getPlainData();

        return [
            static::TYPE_CHECKOUT => $data[static::TYPE_CHECKOUT],
        ];
    }

    /**
     * Return class of button panel widget
     *
     * @return string
     */
    protected function getPanelClass()
    {
        return 'XLite\View\StickyPanel\Payment\Settings';
    }
}
