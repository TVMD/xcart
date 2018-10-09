<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Moneybookers;

/**
 * Moneybookers payment gateway integration (iframe)
 */
abstract class Main extends \XLite\Module\AModule
{
    /**
     * Author name
     *
     * @return string
     */
    public static function getAuthorName()
    {
        return 'X-Cart team';
    }

    /**
     * Module name
     *
     * @return string
     */
    public static function getModuleName()
    {
        return 'Skrill';
    }

    /**
     * Get module major version
     *
     * @return string
     */
    public static function getMajorVersion()
    {
        return '5.3';
    }

    /**
     * Module version
     *
     * @return string
     */
    public static function getMinorVersion()
    {
        return '4';
    }

    /**
     * Get module build number (4th number in the version)
     *
     * @return string
     */
    public static function getBuildVersion()
    {
        return '0';
    }

    /**
     * Get minor core version which is required for the module activation
     *
     * @return string
     */
    public static function getMinorRequiredCoreVersion()
    {
        return '4';
    }

    /**
     * Fet description
     *
     * @return string
     */
    public static function getDescription()
    {
        return 'The module allows you to accept payments using cards, over 20 local payment methods and more than 80 banks (iframe integration method)';
    }

    /**
     * Return link to settings form
     *
     * @return string
     */
    public static function getSettingsForm()
    {
        return null;
    }

    /**
     * The module is defined as the payment module
     *
     * @return integer|null
     */
    public static function getModuleType()
    {
        return static::MODULE_TYPE_PAYMENT;
    }

    public static function logDebug($message)
    {
        $logLevel = (bool) \XLite::getInstance()->getOptions(
            array('log_details', 'level')
        );

        if (intval($logLevel) === LOG_DEBUG) {
            return;
        }

        \XLite\Logger::logCustom('skrill_debug', $message);
    }
}
