<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View;

use XLite\Core\Cache\ExecuteCached;

/**
 * Upgrade top box
 *
 * @ListChild (list="admin.main.page.header_wrapper", weight="1000", zone="admin")
 */
class UpgradeTopBox extends \XLite\View\AView
{
    /**
     * Key for storing tmpVars read mark
     */
    const READ_MARK_KEY = 'toplinksMenuReadHash';
    /**
     * Flags
     *
     * @var array
     */
    protected $updateFlags;

    /**
     * Get JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list   = parent::getJSFiles();
        $list[] = 'top_links/version_notes/parts/upgrade.js';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'top_links/version_notes/parts/upgrade.twig';
    }

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    protected function checkACL()
    {
        return parent::checkACL()
            && \XLite\Core\Auth::getInstance()->isPermissionAllowed(\XLite\Model\Role\Permission::ROOT_ACCESS);
    }

    /**
     * Return list of disallowed targets
     *
     * @return string[]
     */
    public static function getDisallowedTargets()
    {
        return ['upgrade'];
    }

    /**
     * Check widget visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && \XLite\Core\Auth::getInstance()->isAdmin();
    }

    /**
     * @return bool
     */
    protected function hasHotfixes()
    {
        return \XLite\Upgrade\Cell::getInstance()->hasHotfixEntries();
    }

    /**
     * @return bool
     */
    protected function hasUpdates()
    {
        return \XLite\Upgrade\Cell::getInstance()->hasUpdateEntries();
    }

    /**
     * @return bool
     */
    protected function hasUpgrades()
    {
        $infoHash = \XLite\Core\Database::getRepo('XLite\Model\Module')->getUpgradeModulesInfoHash();

        $hasCoreUpgrade = false;
        if (!$infoHash['hotfix'] && !$infoHash['update']) {
            $coreVersions = \XLite\Upgrade\Cell::getInstance()->getCoreVersions();
            $currentCoreMajorVersion = \XLite::getInstance()->getMajorVersion();
            foreach ($coreVersions as $coreVersion) {
                $version = implode('.', array_slice(explode('.', $coreVersion[0]), 0, 2));
                if (version_compare($currentCoreMajorVersion, $version, '<')) {
                    $hasCoreUpgrade = true;
                    break;
                }
            }
        }

        return $hasCoreUpgrade;
    }

    /**
     * Return true if box should be active
     *
     * @return boolean
     */
    protected function isUpgradeBoxVisible()
    {
        return $this->isCoreUpgradeAvailable() || $this->areUpdatesAvailable();
    }

    /**
     * Check if there is a new core version
     *
     * @return boolean
     */
    protected function isCoreUpgradeAvailable()
    {
        $hasCoreUpdate = \XLite\Upgrade\Cell::getInstance()->hasCoreUpdate();
        
        return $hasCoreUpdate || $this->hasUpgrades();
    }

    /**
     * Check if there are updates (new core revision and/or module revisions)
     *
     * @return boolean
     */
    protected function areUpdatesAvailable()
    {
        $infoHash = \XLite\Core\Database::getRepo('XLite\Model\Module')->getUpgradeModulesInfoHash();

        return $infoHash['total'] > 0;
    }

    /**
     * Get container tag attributes
     *
     * @return array
     */
    protected function getContainerTagAttributes()
    {
        $data   = [];
        $data[] = 'upgrade-box';

        $state      = 'opened';
        $tmpVarHash = \XLite\Core\TmpVars::getInstance()->{static::READ_MARK_KEY};
        $realHash   = \XLite\Core\Marketplace::getInstance()->unseenUpdatesHash();
        if ($realHash !== $tmpVarHash) {
            \XLite\Core\TmpVars::getInstance()->{static::READ_MARK_KEY} = null;

        } elseif (!empty($tmpVarHash)) {
            $state = 'post-closed';
        }

        $data[] = $state;

        if (!$this->isUpgradeBoxVisible()) {
            $data[] = 'invisible';
        }

        $isHotfixMode = \XLite\Upgrade\Cell::getInstance()->isUpgradeHotfixModeSelectorAvailable()
            ? \XLite\Core\Session::getInstance()->upgradeHotfixMode
            : null;

        $cacheUpgradeParams = [
            'hasHotfixEntries',
            get_class($this),
            \XLite\Core\Database::getRepo('XLite\Model\Module')->getVersion(),
            \XLite\Core\Marketplace::getInstance()->getCores(
                \XLite\Core\Marketplace::TTL_SHORT
            ),
            $isHotfixMode
        ];

        $hasNewFeaturesEntries = ExecuteCached::executeCached(function () {
            return $this->hasUpdates() || $this->hasUpgrades();
        }, array_merge($cacheUpgradeParams, ['hasNewFeaturesEntries']));

        $isHotfix = ExecuteCached::executeCached(function () {
            return \XLite\Upgrade\Cell::getInstance()->hasHotfixEntries();
        }, array_merge($cacheUpgradeParams, ['isHotfix']));

        if ($hasNewFeaturesEntries) {
            $data[] = 'update';
        } elseif ($isHotfix) {
            $data[] = 'hotfix';
        }

        return [
            'class' => $data,
        ];
    }

    /**
     * @return string
     */
    protected function getDescription()
    {
        $coreAvailable = $this->isCoreUpgradeAvailable();

        $infoHash = \XLite\Core\Database::getRepo('XLite\Model\Module')->getUpgradeModulesInfoHash();
        if ($this->hasHotfixes()) {
            $count = $infoHash['hotfix'];
        } elseif ($this->hasUpdates()) {
            $count = $infoHash['update'];
        } else {
            $count = $infoHash['upgrade'];
        }

        if ($coreAvailable && $count) {
            $result = static::t('new core and X addons', ['count' => $count]);

        } elseif ($count) {
            $result = static::t('X addons', ['count' => $count]);

        } else {
            $result = static::t('new core');
        }

        return $result;
    }
}
