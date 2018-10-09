<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Moneybookers\View;

/**
 * Skrill settings dialog
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class MoneybookersSettings extends \XLite\View\Dialog
{
    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();

        $list[] = 'moneybookers_settings';

        return $list;
    }

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = $this->getDir() . '/controller.js';

        return $list;
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/CDev/Moneybookers/settings/style.css';

        return $list;
    }

    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/CDev/Moneybookers/settings';
    }

    // {{{ Content

    /**
     * Get register URL
     *
     * @return string
     */
    protected function getRegisterURL()
    {
        return 'https://signup.skrill.com/business/#/?lang=EN&rid=21477277';
    }

    public function getSecretWordTooltipText()
    {
        return 'This feature is mandatory and ensures the integrity of the data posted back to your servers. To set it up, you need to login to your Skrill account and go to Settings -> then, Developer Settings.';
    }

    // }}}
}
