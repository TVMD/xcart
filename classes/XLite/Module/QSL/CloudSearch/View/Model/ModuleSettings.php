<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\View\Model;


/**
 * Settings dialog model widget
 */
class ModuleSettings extends \XLite\View\Model\ModuleSettings implements \XLite\Base\IDecorator
{
    /**
     * Return list of the "Button" widgets
     *
     * @return array
     */
    protected function getFormButtons()
    {
        $buttons = parent::getFormButtons();

        if ($this->getModule()->getActualName() === 'QSL\CloudSearch') {
            unset($buttons['submit']);
        }

        return $buttons;
    }
}