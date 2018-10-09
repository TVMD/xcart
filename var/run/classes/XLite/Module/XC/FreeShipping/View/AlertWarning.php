<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FreeShipping\View;


/**
 * AlertWarning
 *
 * TODO: remove in 5.3.5
 * @deprecated use \XLite\View\Alert or \XLite\View\Alert\*
 */
abstract class AlertWarning extends \XLite\View\AView
{
    abstract protected function getAlertContent();

    protected function getClass()
    {
        return 'alert alert-warning';
    }

    protected function getDefaultTemplate()
    {
        return 'modules/XC/FreeShipping/alert-warning.twig';
    }
}