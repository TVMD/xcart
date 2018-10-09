<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\View\Button;

/**
 * Button to use with popup
 */
class LayoutEditor extends \XLite\View\Button\SimpleLink
{
    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        return [
            'modules/XC/Onboarding/button/layout_editor.css'
        ];
    }

    /**
     * Get a list of JavaScript files required to display the widget properly
     *
     * @return array
     */
    public function getJSFiles()
    {
        return [];
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/Onboarding/button/layout_editor.twig';
    }

    /**
     * getDefaultStyle
     *
     * @return string
     */
    protected function getClass()
    {
        return 'layout-editor-button';
    }
}
