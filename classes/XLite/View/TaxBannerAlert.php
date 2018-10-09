<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View;

use XLite\Core\Promo;

/**
 * Tax banner alert widget
 *
 * @ListChild (list="taxes.top.section", zone="admin", weight="10")
 */
class TaxBannerAlert extends \XLite\View\ModuleBanner
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'tax_classes';
        $result[] = 'sales_tax';
        $result[] = 'vat_tax';
        $result[] = 'canadian_taxes';

        return $result;
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'tax_banner_alert/style.less';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'tax_banner_alert/body.twig';
    }

    /**
     * Get module name
     *
     * @return string
     */
    protected function getModuleName()
    {
        return 'XC\\AvaTax';
    }

    /**
     * Get logo url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return \XLite\Core\Layout::getInstance()->getResourceWebPath(
            'tax_banner_alert/avalara_logo.svg'
        );
    }

    /**
     * Get module id
     *
     * @return string
     */
    protected function getModuleId()
    {
        return $this->isModuleInstalled() && $this->getModule() ? $this->getModule()->getModuleId() : '';
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

    public function getModuleLink()
    {
        return $this->getModule() && $this->getModule()->getEnabled()
            ? $this->getModule()->getSettingsForm()
            : $this->getInstallLink();
    }

    public function getInstallLink()
    {
        return Promo::getInstance()->getRecommendedModuleURL($this->getModuleName());
    }

    /**
     * Return Module link
     *
     * @return string
     */
    protected function getModuleMarketplaceLink()
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

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return \XLite\View\AView::isVisible()
            && \XLite\Controller\Admin\TaxClasses::isEnabled();
    }
}
