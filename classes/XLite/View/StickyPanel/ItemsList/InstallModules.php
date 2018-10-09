<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\StickyPanel\ItemsList;

/**
 * Install modules list's sticky panel
 */
class InstallModules extends \XLite\View\StickyPanel\ItemsListForm
{
    /**
     * Check panel has more actions buttons
     *
     * @return boolean
     */
    protected function hasMoreActionsButtons()
    {
        return false;
    }

    /**
     * Return CSS files for the widget
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list   = parent::getCSSFiles();
        $list[] = 'modules_manager/css/install_modules.css';

        return $list;
    }

    /**
     * The sticky panel is visible if the items list has any result or some modules are to install
     *
     * @return boolean
     */
    protected function isVisible()
    {
        $list = new \XLite\View\ItemsList\Module\Install;

        return parent::isVisible() && ($list->hasResultsPublic() || ($this->countModulesSelected() > 0));
    }

    /**
     * Define buttons widgets
     *
     * @return array
     */
    protected function defineButtons()
    {
        $list = parent::defineButtons();

        if ($this->getModuleId()) {
            $list['back'] = $this->getWidget(
                [
                    'disabled' => false,
                    'label'    => 'Back to marketplace',
                    'style'    => 'action link',
                    'location' => $this->buildURL('addons_list_marketplace'),
                ],
                'XLite\View\Button\SimpleLink'
            );
        }

        return $list;
    }

    /**
     * @return boolean
     */
    public function isShowPharPopup()
    {
        $requirements = new \Includes\Requirements();
        $result = $requirements->getSingleResult('php_phar');

        return !isset($result['data']['version'])
            || empty($result['data']['version']);
    }

    /**
     * @inheritdoc
     */
    protected function getSaveWidget()
    {
        $modules = $this->getModulesToInstall();

        if ($this->isKeysNoticeAutoDisplay()) {
            return $this->getWidget(
                [
                    'style'       => 'action submit',
                    'button-type' => 'regular-main-button',
                    'label'       => static::t('Install addons'),
                    'forcePopup'  => false,
                ],
                'XLite\View\Button\KeysNotice'
            );
        } elseif ($this->isShowPharPopup()) {
            return $this->getWidget(
                [
                    'style'       => 'action submit',
                    'button-type' => 'regular-main-button',
                    'label'       => static::t('Install addons'),
                    'disabled'    => empty($modules),
                ],
                'XLite\View\Button\Popup\UpgradePhar'
            );
        } else {
            return $this->getWidget(
                [
                    'style'       => 'action submit',
                    'button-type' => 'regular-main-button',
                    'label'       => static::t('Install addons'),
                    'disabled'    => empty($modules),
                ],
                'XLite\View\Button\Addon\InstallModules'
            );
        }
    }

    /**
     * Define additional buttons
     *
     * @return array
     */
    protected function defineAdditionalButtons()
    {
        $list = parent::defineAdditionalButtons();

        if (!$this->getModuleId()) {
            $list['modules'] = [
                'class'    => 'XLite\View\Button\Addon\InstallModulesSelected',
                'params'   => [
                    'style'          => 'more-action always-enabled toggle-list-action',
                    'useCaretButton' => false,
                    'dropDirection'  => 'dropup modules-selected-box',
                ],
                'position' => 100,
            ];

            $modules = \XLite::getController()->getModulesToInstall();
            if (count($modules) === 0) {
                $list['modules']['params']['style'] .= ' disabled';
            }
        }

        return $list;
    }

    /**
     * Should more actions buttons be disabled?
     *
     * @return boolean
     */
    protected function isMoreActionsDisabled()
    {
        $modules = $this->getModulesToInstall();

        return empty($modules);
    }

    /**
     * Flag to display OR label
     *
     * @return boolean
     */
    protected function isDisplayORLabel()
    {
        return false;
    }

    /**
     * Check - sticky panel is active only if form is changed
     *
     * @return boolean
     */
    protected function isFormChangeActivation()
    {
        return false;
    }
}
