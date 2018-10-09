<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\View\Page;

/**
 * Google Tag manager promo
 */
class GoogleTagManagerPromo extends \XLite\View\AView
{
    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list   = parent::getCSSFiles();
        $list[] = 'modules/XC/ThemeTweaker/google_tag_manager/style.css';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/ThemeTweaker/google_tag_manager/body.twig';
    }

    /**
     * Get module name
     *
     * @return string
     */
    protected function getModuleName()
    {
        return 'XC\\GoogleTagManager';
    }

    /**
     * Get module id
     *
     * @return string
     */
    protected function getModuleId()
    {
        return $this->isModuleInstalled() && $this->getModule() ? $this->getModule()->getModuleID() : '';
    }

    /**
     * Get module id
     *
     * @return \XLite\Model\Module
     */
    protected function getModule()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneByModuleName($this->getModuleName());
    }

    /**
     * Check module installed
     *
     * @return boolean
     */
    protected function isModuleEnabled()
    {
        return \Includes\Utils\ModulesManager::isModuleInstalled($this->getModuleName());
    }

    /**
     * Check module installed
     *
     * @return boolean
     */
    protected function isModuleInstalled()
    {
        return $this->getModule() && $this->getModule()->isInstalled();
    }

    /**
     * @return boolean
     */
    protected function isModuleConfigured()
    {
        return $this->isModuleEnabled() && \XLite\Core\Config::getInstance()->XC->GoogleTagManager->container_id;
    }

    /**
     * @return string
     */
    protected function getModuleConfigURL()
    {
        return $this->buildURL(
            'module',
            '',
            [
                'moduleId'     => $this->getModuleId(),
                'returnTarget' => $this->getCurrentTarget(),
            ]
        );
    }

    /**
     * @return string
     */
    protected function getModuleEnableURL()
    {
        return $this->buildURL(
                'addons_list_installed',
                '',
                [
                    'clearCnd' => 1,
                    'pageId'   => 1,
                ]
            ) . '#' . $this->getModule()->getName();
    }

    /**
     * @return string
     */
    protected function getModuleInstallURL()
    {
        list($author, $module) = explode('\\', $this->getModuleName());

        return \XLite\Core\Database::getRepo('XLite\Model\Module')
            ->getMarketplaceUrlByName($author, $module);
    }

    /**
     * Returns current target
     *
     * @return string
     */
    protected function getCurrentTarget()
    {
        return \XLite\Core\Request::getInstance()->target;
    }
}
