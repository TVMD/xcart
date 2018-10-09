<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Controller\Admin;

/**
 * ThemeTweaker controller
 */
class ThemeTweaker extends \XLite\Controller\Admin\AAdmin
{
    protected function doActionSwitchMode()
    {
        $mode = \XLite\Core\Request::getInstance()->mode ?: null;

        \XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker::getInstance()->setCurrentMode($mode);

        $this->setReturnURL($this->getReferrerURL());
        $this->setHardRedirect(true);
    }

    /**
     * Disable editor
     *
     * @return void
     */
    protected function doActionDisable()
    {
        \XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker::getInstance()->setCurrentMode(null);

        $this->set('silent', true);
        $this->suppressOutput = true;
    }
}
