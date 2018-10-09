<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Page\Admin;

/**
 * Old php version notice
 *
 * @ListChild (list="environment.before", zone="admin")
 */
class OldPhpVersionWarning extends \XLite\View\AView
{
    protected function isVisible()
    {
        return parent::isVisible() && $this->isPhpOutdated();
    }

    protected function getDefaultTemplate()
    {
        return 'settings/summary/php_old_version.twig';
    }

    protected function getPhpVersion()
    {
        return \XLite\Core\Converter::getCanonicalPhpVersion();
    }

    /**
     * Check if php is outdated
     *
     * @return bool
     */
    protected function isPhpOutdated()
    {
        return version_compare(PHP_VERSION, '5.6', '<');
    }
}