<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module;

/**
 * Module
 */
abstract class AModuleSkin extends AModule
{
    /**
     * The module is defined as skin module
     *
     * @return integer|null
     */
    public static function getModuleType()
    {
        return static::MODULE_TYPE_SKIN;
    }

    /**
     * Returns supported layout types
     *
     * @return array
     */
    public static function getLayoutTypes()
    {
        return \XLite\Core\Layout::getInstance()->getLayoutTypes();
    }

    /**
     * Returns available layout colors (KEY => NAME pairs)
     *
     * @return array
     */
    public static function getLayoutColors()
    {
        return array();
    }

    /**
     * Return module dependencies
     *
     * @return array
     */
    final public static function getDependencies()
    {
        return array();
    }

    /**
     * Check if skin supports cloud zoom
     *
     * @return boolean
     */
    public static function isUseCloudZoom()
    {
        return true;
    }

    /**
     * Check if skin supports cloud zoom
     *
     * @return boolean
     */
    public static function isUseLazyLoad()
    {
        return false;
    }

    /**
     * Check if skin supports preloaded images
     *
     * @return boolean
     */
    public static function isUsePreloadedImages()
    {
        return false;
    }
}
