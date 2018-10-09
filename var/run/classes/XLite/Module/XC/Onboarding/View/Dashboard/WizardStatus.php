<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\View\Dashboard;

use XLite\Core\Auth;
use XLite\Model\Role\Permission;
use XLite\Module\XC\Onboarding\Core\WizardState;

/**
 * Wizard mini informer on Dashboard
 *
 * @ListChild(list="dashboard-sidebar", weight="50", zone="admin")
 */
class WizardStatus extends \XLite\View\AView
{
    /**
     * Add widget specific CSS file
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = $this->getDir() . '/style.less';

        return $list;
    }

    /**
     * Add widget specific JS-file
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();
        $list[] = $this->getDir() . '/circle-progress.min.js';
        $list[] = $this->getDir() . '/controller.js';

        return $list;
    }


    /**
     * Return widget templates directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/XC/Onboarding/dashboard/wizard';
    }

    /**
     * Get block style
     *
     * @return string
     */
    protected function getBlockStyle()
    {
        return '';
    }

    /**
     * @return int
     */
    protected function getCurrentProgress()
    {
        return WizardState::getInstance()->getWizardProgress();
    }

    /**
     * @return string
     */
    protected function getCurrentStatus()
    {
        return $this->getCurrentProgress() > 0
            ? static::t('X% Wizard completion', ['X' => $this->getCurrentProgress()])
            : static::t('Let’s setup your store');
    }

    /**
     * @return string
     */
    protected function getButtonLabel()
    {
        return $this->getCurrentProgress() > 0
            ? 'Continue'
            : 'Proceed';
    }

    /**
     * @return string
     */
    protected function getWizardUrl()
    {
        return \XLite::getController()->buildURL('onboarding_wizard');
    }

    /**
     * @return bool
     */
    protected function checkACL()
    {
        return Auth::getInstance()->isPermissionAllowed(Permission::ROOT_ACCESS);
    }

    /**
     * @return bool
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && $this->getCurrentProgress() < 100
            && \XLite\Core\Config::getInstance()->XC->Onboarding->wizard_state !== 'disabled';
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return $this->getDir() . '/body.twig';
    }
}