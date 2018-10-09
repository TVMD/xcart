<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Controller\Admin;

use XLite\Core\Cache\ExecuteCached;

/**
 * AddonsListMarketplace
 */
class AddonsListMarketplace extends \XLite\Controller\Admin\Base\AddonsList
{
    const PURCHASE_STATE_COMPLETE    = 'complete';
    const PURCHASE_STATE_IN_PROGRESS = 'in-progress';

    /**
     * Cache of landing page availability
     *
     * @var null | boolean
     */
    protected $landingPageAvail = null;

    /**
     * Define the actions with no secure token
     *
     * @return array
     */
    public static function defineFreeFormIdActions()
    {
        $list = parent::defineFreeFormIdActions();
        $list[] = 'clear_cache';
        $list[] = 'set_install';
        $list[] = 'unset_install';

        return $list;
    }

    /**
     * Clean the modules-to-install list. It is used right before the installation starts.
     *
     * @return void
     */
    public static function cleanModulesToInstall()
    {
        \XLite\Core\Session::getInstance()->modulesToInstall = array();
    }

    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        if ($this->getModuleId()) {
            return $this->getModuleName($this->getModuleId());
        }

        $vendor = $this->getVendor();
        if ($vendor) {
            return $vendor;
        }

        return static::t('Addons Marketplace');
    }

    /**
     * Add part to the location nodes list
     *
     * @return void
     */
    protected function addBaseLocation()
    {
        if ($this->getVendor()) {
            $this->addLocationNode(
                'All addons',
                $this->buildURL('addons_list_marketplace')
            );
        }
    }

    /**
     * The landing page flag
     *
     * @return boolean
     */
    public function isLandingPage()
    {
        if (is_null($this->landingPageAvail)) {
            $landingPageAvail = $this->isMarketplaceAccessible()
                ? \XLite\Core\Marketplace::getInstance()->isAvailableLanding()
                : null;

            // Landing page is unavailable if no modules are set on the landing page
            $isLandingModules = (bool)\XLite\Core\Database::getRepo('XLite\Model\Module')
                ->findOneBy(array('isLanding' => true));

            $this->landingPageAvail = isset($landingPageAvail[\XLite\Core\Marketplace::FIELD_LANDING])
                ? (bool)$landingPageAvail[\XLite\Core\Marketplace::FIELD_LANDING] && $isLandingModules
                : false;
        }

        return $this->landingPageAvail && isset(\XLite\Core\Request::getInstance()->landing);
    }

    /**
     * Get the module id list from the session
     *
     * @return array
     */
    public function getModulesToInstall()
    {
        $checked = (!\XLite\Core\Session::getInstance()->modulesToInstall) || $this->getModuleId()
            ? array()
            : array_filter(
                \XLite\Core\Session::getInstance()->modulesToInstall,
                array($this, 'checkModulesToInstall')
            );

        if ($checked != \XLite\Core\Session::getInstance()->modulesToInstall) {
            \XLite\Core\Session::getInstance()->modulesToInstall = $checked;
        }

        return \XLite\Core\Session::getInstance()->modulesToInstall ?: [];
    }

    /**
     * Simple check if module id is valid (if there is any module in DB with such moduleId)
     * It is used in self::getModulesToInstall() method
     *
     * @see self::getModulesToInstall()
     *
     * @param integer|string $moduleId Module identificator
     *
     * @return boolean
     */
    public function checkModulesToInstall($moduleId)
    {
        return (bool)\XLite\Core\Database::getRepo('XLite\Model\Module')->find($moduleId);
    }

    /**
     * Verifies if the module is selected to install
     *
     * @param integer $moduleId
     *
     * @return boolean
     */
    public function isModuleSelected($moduleId)
    {
        return isset(\XLite\Core\Session::getInstance()->modulesToInstall[$moduleId]);
    }

    /**
     * Returns the number of selected modules
     *
     * @return integer
     */
    public function countModulesSelected()
    {
        return is_array(\XLite\Core\Session::getInstance()->modulesToInstall)
            ? count(\XLite\Core\Session::getInstance()->modulesToInstall)
            : 0;
    }

    /**
     * Checks if the modules selected list is not empty
     *
     * @return boolean
     */
    public function hasModulesSelected()
    {
        return $this->countModulesSelected() > 0;
    }

    /**
     * Empty tag is provided for default landing page
     *
     * @return string
     */
    public function getTagValue()
    {
        return '';
    }

    /**
     * Get module id from request
     *
     * @return integer
     */
    public function getModuleId()
    {
        return ExecuteCached::executeCachedRuntime(function () {
            $moduleID = \XLite\Core\Request::getInstance()->moduleID;
            $moduleName = \XLite\Core\Request::getInstance()->moduleName;

            $repo = \XLite\Core\Database::getRepo('XLite\Model\Module');
            if (!$moduleID && $moduleName && strpos($moduleName, '\\')) {
                $module = $repo->findOneByModuleName($moduleName, true);
                $moduleID = $module ? $module->getModuleId() : null;
            }

            if(!$moduleID && $this->getSubstring()) {
                $searchResult = $repo->search(new \XLite\Core\CommonCell([
                    'substring'       => $this->getSubstring(),
                    'fromMarketplace' => true
                ]));

                if (count($searchResult) === 1) {
                    $module = reset($searchResult);

                    if ($module && $module instanceof \XLite\Model\Module) {
                        $moduleID = $module->getModuleId();
                    }
                }
            }

            return $moduleID && $repo->find($moduleID) && !\XLite\Core\Request::getInstance()->sessionCell
                ? $moduleID
                : null;
        }, []);
    }

    /**
     * Return module full name
     *
     * @param integer $id
     *
     * @return string
     */
    public function getModuleName($id)
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->find($id)->getModuleName();
    }

    /**
     * Return substring
     *
     * @return string
     */
    public function getSubstring()
    {
        return \XLite\Core\Request::getInstance()->substring;
    }

    /**
     * @return string
     */
    protected function getVendor()
    {
        $list = new \XLite\View\ItemsList\Module\Install();

        return $list->getVendorValue();
    }

    /**
     * Preprocessor for no-action run
     */
    protected function doNoAction()
    {
        $token = \XLite\Core\Request::getInstance()->token;
        if ($token) {
            $module = $this->checkToken($token);

            $moduleId = null;
            if ($module) {
                $module->setPurchaseStatus(\XLite\MOdel\Module::PURCHASE_STATUS_PURCHASED);
                $moduleId      = $module->getModuleID();
                $purchaseState = self::PURCHASE_STATE_COMPLETE;

            } else {
                $request = \XLite\Core\Request::getInstance()->getData();
                /** @var \XLite\MOdel\Module $module */
                $module  = \XLite\Core\Database::getRepo('XLite\Model\Module')->find($request['module_id']);

                if ($module) {
                    $module->setPurchaseStatus(\XLite\MOdel\Module::PURCHASE_STATUS_PENDING);
                    $moduleId = $request['module_id'];
                }
                $purchaseState = self::PURCHASE_STATE_IN_PROGRESS;
            }

            \XLite\Core\Database::getEM()->flush();

            if ($moduleId) {
                $this->setReturnURL(
                    $this->buildURL(
                        'addons_list_marketplace',
                        '',
                        [
                            'moduleID'           => $moduleId,
                            'recently_purchased' => $purchaseState,
                        ]
                    )
                );
            } else {
                $this->setReturnURL($this->buildURL('addons_list_marketplace'));
            }
        }
    }

    /**
     * @param $token
     *
     * @return null|\XLite\Model\Module
     */
    protected function checkToken($token)
    {
        $tokenData = \XLite\Core\Marketplace::getInstance()->getTokenData($token);
        $result    = null;

        if (!empty($tokenData['purchase'])) {
            $key      = $tokenData['purchase'][0];
            $keysInfo = \XLite\Core\Marketplace::getInstance()->checkAddonKey($key);

            if ($keysInfo && $keysInfo[$key]) {
                $keysInfo = $keysInfo[$key];
                $repo     = \XLite\Core\Database::getRepo('XLite\Model\ModuleKey');

                foreach ($keysInfo as $info) {
                    if (\XLite\Model\ModuleKey::KEY_TYPE_XCN !== (int) $info['keyType']) {

                        /** @var \XLite\Model\Module $module */
                        $module = \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneBy(
                            [
                                'author' => $info['author'],
                                'name'   => $info['name'],
                            ]
                        );

                        if ($module) {
                            $entity = $repo->findKey($info['author'], $info['name']);

                            if ($entity) {
                                $entity->setKeyValue($key);
                                $repo->update($entity);

                            } else {

                                $repo->insert($info + ['keyValue' => $key]);
                            }

                            $result = $module;
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Clear marketplace cache
     *
     * @return void
     */
    protected function doActionClearCache()
    {
        \XLite\Core\Marketplace::getInstance()->clearActionCache();

        $params = \XLite\Core\Request::getInstance()->landing
            ? array('landing' => 1)
            : array();

        $this->setReturnURL($this->buildURL('addons_list_marketplace', '', $params));
    }

    /**
     * Request for upgrade
     *
     * @return void
     */
    protected function doActionRequestForUpgrade()
    {
        $module = \XLite\Core\Database::getRepo('XLite\Model\Module')
            ->find(\XLite\Core\Request::getInstance()->module);

        if (!$module || !\XLite\Core\Marketplace::getInstance()->isUpgradeRequestAvailable($module)) {
            \XLite\Core\TopMessage::addWarning('An error occurred while sending the request');
            $this->valid = false;
            return;
        }

        $result = \XLite\Core\Marketplace::getInstance()->requestForUpgrade([
            $module->getMarketplaceID() => $module,
        ]);

        if (!empty($result)) {
            \XLite\Core\Marketplace::getInstance()->markAsUpgradeRequested($module);
            \XLite\Core\TopMessage::addInfo('Your request has been sent successfully');

        } else {
            \XLite\Core\TopMessage::addWarning('An error occurred while sending the request');
            $this->valid = false;
        }
    }

    /**
     * Store the module id for installation
     *
     * @return void
     */
    protected function doActionSetInstall()
    {
        $this->storeModuleToInstall(\XLite\Core\Request::getInstance()->id);
        exit(0);
    }

    /**
     * Remove the module id for the installation
     *
     * @return void
     */
    protected function doActionUnsetInstall()
    {
        $this->removeModuleToInstall(\XLite\Core\Request::getInstance()->id);
        exit(0);
    }

    /**
     * Store the module id into the session for the further installation
     *
     * @param integer $id
     *
     * @return void
     */
    protected function storeModuleToInstall($id)
    {
        if (!\XLite\Core\Session::getInstance()->modulesToInstall) {
            \XLite\Core\Session::getInstance()->modulesToInstall = array();
        }

        \XLite\Core\Session::getInstance()->modulesToInstall =
            \XLite\Core\Session::getInstance()->modulesToInstall + array($id => $id);
    }

    /**
     * Remove the module id from the installation list
     *
     * @param integer $id
     *
     * @return void
     */
    protected function removeModuleToInstall($id)
    {
        if (!\XLite\Core\Session::getInstance()->modulesToInstall) {
            \XLite\Core\Session::getInstance()->modulesToInstall = array();
        }

        if (isset(\XLite\Core\Session::getInstance()->modulesToInstall[$id])) {
            $modulesToInstall = \XLite\Core\Session::getInstance()->modulesToInstall;
            unset($modulesToInstall[$id]);
            \XLite\Core\Session::getInstance()->modulesToInstall = $modulesToInstall;
        }
    }
}
