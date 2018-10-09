<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\View;


/**
 * PanelHelp
 *
 * @ListChild (list="layout_settings.settings", zone="admin", weight="100")
 */
class PanelHelp extends \XLite\View\AView
{
    /**
     * @inheritdoc
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/ThemeTweaker/panel/help.twig';
    }

    /**
     * @return string
     */
    protected function getHelpText()
    {
        return static::t(
            'Open the storefront while logged in as administrator to change the look & feel of the store.',
            [
                'url' => \XLite\Core\Converter::buildFullURL(
                    '',
                    '',
                    [],
                    \XLite::getCustomerScript()
                ),
                'cog' => $this->getSVGImage('modules/XC/ThemeTweaker/panel/settings.svg')
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getCSSFiles()
    {
        return array_merge(parent::getCSSFiles(), [
            'modules/XC/ThemeTweaker/panel/style.css'
        ]);
    }
}