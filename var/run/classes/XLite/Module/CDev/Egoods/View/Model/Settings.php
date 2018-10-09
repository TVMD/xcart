<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Egoods\View\Model;

/**
 * Settings dialog model widget
 */
 class Settings extends \XLite\Module\CDev\Paypal\View\Model\Settings implements \XLite\Base\IDecorator
{
    /**
     * Get form field by option
     *
     * @param \XLite\Model\Config $option Option
     *
     * @return array
     */
    protected function getFormFieldByOption(\XLite\Model\Config $option)
    {
        $cell = parent::getFormFieldByOption($option);

        switch ($option->getName()) {
            case 'amazon_access':
                $cell[static::SCHEMA_REQUIRED] = true;
                $cell[static::SCHEMA_DEPENDENCY] = array(
                    static::DEPENDENCY_SHOW => array(
                        'enable_signed_urls' => array(true),
                    ),
                );
                break;

            case 'amazon_secret':
                $cell[static::SCHEMA_REQUIRED] = true;
                $cell[static::SCHEMA_DEPENDENCY] = array(
                    static::DEPENDENCY_SHOW => array(
                        'enable_signed_urls' => array(true),
                    ),
                );
                break;

            case 'bucket':
                $cell[static::SCHEMA_REQUIRED] = true;
                $cell[static::SCHEMA_DEPENDENCY] = array(
                    static::DEPENDENCY_SHOW => array(
                        'enable_signed_urls' => array(true),
                    ),
                );
                break;
        }

        return $cell;
    }
}
