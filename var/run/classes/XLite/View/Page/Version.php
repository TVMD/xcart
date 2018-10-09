<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Page;


class Version extends \XLite\View\AView
{
    const PARAM_VERSION_MESSAGE      = 'version_message';
    const PARAM_LICENSE_MESSAGE      = 'license_message';
    const PARAM_INSTALLATION_MESSAGE = 'installation_message';
    const PARAM_PRIVATE_MODULES      = 'private_modules';
    const PARAM_PUBLIC_MODULES       = 'public_modules';

    protected function getDefaultTemplate()
    {
        return 'page/version/body.twig';
    }

    public function getStyleFileUrl()
    {
        return \XLite::getInstance()->getShopURL('skins/customer/page/version/style.css');
    }

    public function getControllerFileUrl()
    {
        return \XLite::getInstance()->getShopURL('skins/customer/page/version/script.js');
    }

    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += [
            self::PARAM_VERSION_MESSAGE      => new \XLite\Model\WidgetParam\TypeString('Version message'),
            self::PARAM_LICENSE_MESSAGE      => new \XLite\Model\WidgetParam\TypeString('License message'),
            self::PARAM_INSTALLATION_MESSAGE => new \XLite\Model\WidgetParam\TypeString('Installation message'),
            self::PARAM_PRIVATE_MODULES      => new \XLite\Model\WidgetParam\TypeSet('Private modules'),
            self::PARAM_PUBLIC_MODULES       => new \XLite\Model\WidgetParam\TypeSet('Publice modules'),
        ];
    }

    protected function isCacheAvailable()
    {
        return true;
    }

    /**
     * @return string
     */
    protected function getVersionMessage()
    {
        return $this->getParam(self::PARAM_VERSION_MESSAGE);
    }

    /**
     * @return string
     */
    protected function getLicenseMessage()
    {
        return $this->getParam(self::PARAM_LICENSE_MESSAGE);
    }

    /**
     * @return string
     */
    protected function getInstallationMessage()
    {
        return $this->getParam(self::PARAM_INSTALLATION_MESSAGE);
    }

    /**
     * @return array
     */
    protected function getPrivateModules()
    {
        $modules = $this->getParam(self::PARAM_PRIVATE_MODULES);

        usort($modules, function ($a, $b) {
            $a = strtolower($a->getAuthorName());
            $b = strtolower($b->getAuthorName());

            if ($a === $b) {
                return 0;
            }

            return $a > $b ? 1 : -1;
        });

        return $modules;
    }

    /**
     * @return array
     */
    protected function getPublicModules()
    {
        $modules = $this->getParam(self::PARAM_PUBLIC_MODULES);

        usort($modules, function ($a, $b) {
            $a = strtolower($a->getAuthorName());
            $b = strtolower($b->getAuthorName());

            if ($a === $b) {
                return 0;
            }

            return $a > $b ? 1 : -1;
        });

        return $modules;
    }
}
