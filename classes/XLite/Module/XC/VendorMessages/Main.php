<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\VendorMessages;

/**
 * Vendor messages module main class
 */
abstract class Main extends \XLite\Module\AModule
{
    /**
     * @inherited
     */
    public static function getAuthorName()
    {
        return 'X-Cart team';
    }

    /**
     * @inherited
     */
    public static function getMajorVersion()
    {
        return '5.3';
    }

    /**
     * @inherited
     */
    public static function getMinorVersion()
    {
        return '5';
    }

    /**
     * Get module build number (4th number in the version)
     *
     * @return string
     */
    public static function getBuildVersion()
    {
        return '4';
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
     * @inherited
     */
    public static function getModuleName()
    {
        return 'Messages';
    }

    /**
     * @inherited
     */
    public static function getDescription()
    {
        return 'The module adds an opportunity for customers, administrator and sellers to start messaging about an order right from the order details page. In multi-vendor edition, this addon also allows customers to reach a seller from the seller\'s page before purchasing.';
    }

    /**
     * @inherited
     */
    public static function showSettingsForm()
    {
        return true;
    }

    /**
     * Check - vendor messaging allowed or not
     *
     * @return boolean
     */
    public static function isVendorAllowedToCommunicate()
    {
        return static::isMultivendor() && (!static::isWarehouse() || static::isVendorAllowedToCommunicateInWarehouse());
    }

    /**
     * Returns warehouse mode status
     *
     * @return boolean
     */
    public static function isWarehouse()
    {
        return static::isMultivendor() && \XLite\Module\XC\MultiVendor\Main::isWarehouseMode();
    }

    /**
     * Returns warehouse mode status
     *
     * @return boolean
     */
    public static function isMultivendor()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\MultiVendor');
    }

    /**
     * Check is vendor messaging allowed in warehouse mode
     *
     * @return boolean
     */
    public static function isVendorAllowedToCommunicateInWarehouse()
    {
        return \XLite\Core\Config::getInstance()->XC->VendorMessages->allow_vendor_communication;
    }

    /**
     * Allow disputes or not
     *
     * @return boolean
     */
    public static function isAllowDisputes()
    {
        return static::isMultivendor() && (!static::isWarehouse() || static::isVendorAllowedToCommunicate());
    }

}
