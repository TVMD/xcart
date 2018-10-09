<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\Info\Node;

/**
 * Low stock node
 */
class LicenseWarning extends \XLite\View\Menu\Admin\ANodeNotification
{
    /**
     * Check if data is updated (must be fast)
     *
     * @return boolean
     */
    public function isUpdated()
    {
        return $this->getLastReadTimestamp() < $this->getLastUpdateTimestamp();
    }

    /**
     * Get cache parameters
     *
     * @return array
     */
    public function getCacheParameters()
    {
        return [
            'licenseWarningUpdateTimestamp' => $this->getLastUpdateTimestamp(),
        ];
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && $this->getLicenseWarnings();
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = \XLite\Core\TmpVars::getInstance()->licenseWarningUpdateTimestamp;

        if (null === $result) {
            $result = LC_START_TIME;
            $this->setLastUpdateTimestamp($result);
        }

        return $result;
    }

    /**
     * Set update timestamp
     *
     * @param integer $timestamp Timestamp
     *
     * @return void
     */
    protected function setLastUpdateTimestamp($timestamp)
    {
        \XLite\Core\TmpVars::getInstance()->licenseWarningUpdateTimestamp = $timestamp;
    }

    // {{{ View helpers

    /**
     * Returns node style class
     *
     * @return array
     */
    protected function getNodeStyleClasses()
    {
        $list   = parent::getNodeStyleClasses();
        $list[] = 'license-warning';

        return $list;
    }

    /**
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();
        $list[] = 'button/js/popup_button.js';

        return $list;
    }

    /**
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'menu/info/license_warning.twig';
    }

    /**
     * Returns icon
     *
     * @return string
     */
    protected function getIcon()
    {
        return $this->getSVGImage('images/key.svg');
    }

    /**
     * Return URL parameters to use in AJAX popup
     *
     * @return array
     */
    protected function getURLParams()
    {
        return [
            'url_params' => [
                'target'    => 'keys_notice',
                'widget'    => '\XLite\View\ModulesManager\KeysNotice',
                'returnUrl' => \XLite\Core\URLManager::getCurrentURL(),
            ]
        ];
    }

    /**
     * Returns header
     *
     * @return string
     */
    protected function getHeader()
    {
        return static::t('License warnings');
    }

    /**
     * Get entries count
     *
     * @return integer
     */
    protected function getLicenseWarnings()
    {
        $unallowedModules = \XLite\Core\Marketplace::getInstance()->getInactiveContentData(false);
        $condition = $unallowedModules
            && \XLite::getController()->isRootAdmin()
            && !\XLite::getController()->isDisplayBlockContent()
            && (\XLite::getXCNLicense(false) || \XLite::isTrialPeriodExpired());

        return $condition ? count($unallowedModules) : 0;
    }

    /**
     * @return integer
     */
    protected function getCounter()
    {
        return $this->getLicenseWarnings();
    }

    // }}}
}
