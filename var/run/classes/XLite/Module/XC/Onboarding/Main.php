<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding;

/**
 * Main module
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
        return 'Onboarding Wizard';
    }

    /**
     * Module description
     *
     * @return string
     */
    public static function getDescription()
    {
        return 'The module helps to complete the very first steps of store setup: edit company information and upload logo, add products, set shipping and payments; as well as provides all the necessary links and tips related to the store setup.';
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
        return '0';
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
     * Display settings form
     *
     * @return boolean
     */
    public static function showSettingsForm()
    {
        return false;
    }

    /**
     * Returns module skin dir
     *
     * @return boolean
     */
    public static function getSkinDir()
    {
        return 'modules/XC/Onboarding/';
    }

    /**
     * @return array
     */
    protected static function moveClassesInLists()
    {
        $classes = [];

        return $classes;
    }

    /**
     * @return array
     */
    protected static function moveTemplatesInLists()
    {
        $templates = [];

        return $templates;
    }

    /**
     * Determines if some module is enabled
     *
     * @return boolean
     */
    public static function isModuleEnabled($name)
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled($name);
    }
}
