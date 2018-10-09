<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ColorSchemes\View;


class Controller extends \XLite\View\Controller implements \XLite\Base\IDecorator
{
    protected function defineBodyClasses()
    {
        return array_merge(parent::defineBodyClasses(), [
            'color-scheme-skin-' . (\XLite\Module\XC\ColorSchemes\Main::getSkinName() ?: 'default'),
        ]);
    }
}