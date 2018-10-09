<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\ModulesManager;

use XLite\Core\PreloadedLabels\ProviderInterface;

/**
 * Modules modify widget
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class Manage extends \XLite\View\ModulesManager\AModulesManager implements ProviderInterface
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'addons_list_installed';

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
        $list[] = 'modules_manager/css/common.css';
        $list[] = $this->getDir() . '/css/style.css';

        return $list;
    }

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();
        $list[] = $this->getDir() . '/js/script.js';

        return $list;
    }

    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return parent::getDir() . LC_DS . 'manage';
    }

    /**
     * Return list of price filter options
     *
     * @return array
     */
    protected function getStateOptions()
    {
        return [
            ''  => static::t('All addons'),
            'E' => static::t('Enabled only'),
            'D' => static::t('Disabled only'),
        ];
    }

    /**
     * Return list of price filter options for selector
     *
     * @return array
     */
    protected function getStateOptionsForSelector()
    {
        $result = [];
        foreach ($this->getStateOptions() as $value => $name) {
            $result[] = [
                'label'    => static::t($name),
                'url'      => 'javascript: submitForm($(".addons-search-box form").get(0), {state: "' . $value .'"});',
                'selected' => $value === \XLite\Core\Request::getInstance()->state,
            ];
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function getPreloadedLanguageLabels()
    {
        return [
            'All addons'   => static::t('All addons')
        ];
    }
}
