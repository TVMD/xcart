<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Controller\Customer;

use \XLite\Module\XC\ThemeTweaker\Core;

/**
 * Abstract controller for Customer interface
 */
abstract class ACustomer extends \XLite\Controller\Customer\ACustomer implements \XLite\Base\IDecorator
{
    /**
     * @return bool
     */
    public function isInInlineEditorMode()
    {
        return Core\ThemeTweaker::getInstance()->isInInlineEditorMode();
    }

    /**
     * @return bool
     */
    public function isInLayoutMode()
    {
        return Core\ThemeTweaker::getInstance()->isInLayoutMode();
    }

    /**
     * @return bool
     */
    public function isInWebmasterMode()
    {
        return Core\ThemeTweaker::getInstance()->isInWebmasterMode();
    }

    /**
     * @return bool
     */
    public function isInLabelsMode()
    {
        return Core\ThemeTweaker::getInstance()->isInLabelsMode();
    }

    /**
     * @return bool
     */
    public function isInCustomCssMode()
    {
        return Core\ThemeTweaker::getInstance()->isInCustomCssMode();
    }
}
