<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Controller\Customer;

/**
 * Version
 */
class Version extends \XLite\Controller\Customer\ACustomer
{
    /**
     * Special code
     */
    const VER_CODE = '06c2792b0b1db32aac9cb5eb69eabc04';

    /**
     * Handles the request.
     *
     * @return void
     */
    public function handleRequest()
    {
        if (!$this->isValidRequest()) {
            $this->display404();
            $this->doRedirect();
        }

        parent::handleRequest();
    }

    /**
     * Process request
     *
     * @return void
     */
    public function processRequest()
    {
        header('Content-Type: text/html; charset=utf-8');

        $versionWidget = new \XLite\View\Page\Version([
            \XLite\View\Page\Version::PARAM_VERSION_MESSAGE      => $this->getVersionMessage(),
            \XLite\View\Page\Version::PARAM_LICENSE_MESSAGE      => $this->getLicenseMessage(),
            \XLite\View\Page\Version::PARAM_INSTALLATION_MESSAGE => $this->getInstallationMessage(),
            \XLite\View\Page\Version::PARAM_PRIVATE_MODULES      => $this->getPrivateModules(),
            \XLite\View\Page\Version::PARAM_PUBLIC_MODULES       => $this->getPublicModules(),
        ]);

        $versionWidget->display();
    }

    /**
     * Return info about current LC version
     *
     * @return string
     */
    protected function getVersionMessage()
    {
        return static::t('Version') . ': ' . \XLite::getInstance()->getVersion();
    }

    /**
     * License info
     *
     * @return string
     */
    protected function getLicenseMessage()
    {
        $key = \XLite::getXCNLicense();

        if ($key) {
            $keyData = $key->getKeyData();
        }

        return $key ? ('License: ' . $keyData['editionName']) : static::t('License: trial version');
    }

    /**
     * Installation info
     *
     * @return string
     */
    protected function getInstallationMessage()
    {
        return static::t('Installation date') . ': ' . date('r', \XLite\Core\Config::getInstance()->Version->timestamp);
    }

    /**
     * Return public installed modules
     *
     * @return array
     */
    protected function getPublicModules()
    {
        $result = [];

        foreach ($this->getActiveModules() as $module) {
            if (!$module->isCustom() && !$module->isPrivate()) {
                $result[] = $module;
            }
        }

        return $result;
    }

    /**
     * Return private & custom installed modules
     *
     * @return array
     */
    protected function getPrivateModules()
    {
        $result = [];

        foreach ($this->getActiveModules() as $module) {
            if ($module->isCustom() || $module->isPrivate()) {
                $result[] = $module;
            }
        }
        return $result;
    }

    /**
     * Returns enabled modules
     *
     * @return \XLite\Model\Module[]
     */
    protected function getActiveModules()
    {
        $cnd = new \XLite\Core\CommonCell();
        $cnd->active = true;

        return \XLite\Core\Database::getRepo('XLite\Model\Module')->search($cnd);
    }

    /**
     * Check if request is valid
     *
     * @return boolean
     */
    protected function isValidRequest()
    {
        $code = \XLite\Core\Request::getInstance()->scode;

        return (self::VER_CODE == md5($code));
    }

    /**
     * Stub for the CMS connectors
     *
     * @return boolean
     */
    protected function checkStorefrontAccessibility()
    {
        return true;
    }

}
