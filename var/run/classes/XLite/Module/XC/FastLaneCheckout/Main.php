<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FastLaneCheckout;

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
        return 'Fast Lane Checkout';
    }

    /**
     * Module description
     *
     * @return string
     */
    public static function getDescription()
    {
        return 'Modern multi-step checkout asks for a separate piece of information at a separate step. As a result, it looks looks clean for customers and seems secure and easy to fill in.';
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
        return '5';
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
        return 'modules/XC/FastLaneCheckout/';
    }

    /**
     * Checks if fastlane checkout mode is enabled
     *
     * @return boolean
     */
    public static function isFastlaneEnabled()
    {
        return 'fast-lane' === \XLite\Core\Config::getInstance()->General->checkout_type;
    }

    /**
     * @return array
     */
    protected static function moveClassesInLists()
    {
        $classes = [];

        $classes['XLite\View\AllInOneSolutions'] = [
            static::TO_ADD => [
                ['checkout_fastlane.header.top', 100, \XLite\Model\ViewList::INTERFACE_CUSTOMER],
            ]
        ];

        return $classes;
    }

    /**
     * @return array
     */
    protected static function moveTemplatesInLists()
    {
        $templates = [
            'layout/header/header.bar.checkout.logos.twig' => [
                static::TO_DELETE => [],
                static::TO_ADD => [
                    ['checkout_fastlane.header.top', 100, \XLite\Model\ViewList::INTERFACE_CUSTOMER],
                ],
            ]
        ];

        return $templates;
    }
}
