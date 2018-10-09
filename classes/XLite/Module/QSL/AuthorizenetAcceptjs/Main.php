<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\AuthorizenetAcceptjs;

/**
 * Authorize.net accept.js module
 */
abstract class Main extends \XLite\Module\AModule
{
    /**
     * @inheritdoc
     */
    public static function getAuthorName()
    {
        return 'Qualiteam';
    }

    /**
     * @inheritdoc
     */
    public static function getModuleName()
    {
        return 'Authorize.Net Accept.js';
    }

    /**
     * @inheritdoc
     */
    public static function getMajorVersion()
    {
        return '5.3';
    }

    /**
     * @inheritdoc
     */
    public static function getMinorVersion()
    {
        return '15';
    }

    /**
     * @inheritdoc
     */
    public static function getBuildVersion()
    {
        return '8';
    }

    /**
     * @inheritdoc
     */
    public static function getMinorRequiredCoreVersion()
    {
        return '3';
    }

    /**
     * @inheritdoc
     */
    public static function getDescription()
    {
        return 'The module integrates your store with Authorize.Net Accept.js to accept payments in a PCI-DSS compliant way.';
    }

    /**
     * @inheritdoc
     */
    public static function getModuleType()
    {
        return static::MODULE_TYPE_PAYMENT;
    }

    /**
     * Logging
     *
     * @param string  $message Message or data
     * @param boolean $force   Force write OPTIONAL
     */
    public static function log($message, $force = false)
    {
        if ($force || \Includes\Utils\ConfigParser::getOptions(array('performance', 'developer_mode'))) {
            \XLite\Logger::getInstance()->logCustom('AuthorizenetAcceptjs', $message);
        }
    }

}
