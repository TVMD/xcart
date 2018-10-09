<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\ItemsList\Module\Filter;

/**
 * Selector
 */
class Selector extends \XLite\View\AView
{
    const PARAM_NAME    = 'name';
    const PARAM_CAPTION = 'caption';
    const PARAM_ITEMS   = 'items';

    const ITEM_LABEL    = 'label';
    const ITEM_URL      = 'url';
    const ITEM_SELECTED = 'selected';

    /**
     * @return array
     */
    public function getCSSFiles()
    {
        $list   = parent::getCSSFiles();
        $list[] = 'items_list/module/filter/selector/style.less';

        return $list;
    }

    /**
     * @return array
     */
    public function getJSFiles()
    {
        $list   = parent::getJSFiles();
        $list[] = 'items_list/module/filter/selector/controller.js';

        return $list;
    }

    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += [
            self::PARAM_NAME    => new \XLite\Model\WidgetParam\TypeString('Name', $this->getDefaultName()),
            self::PARAM_CAPTION => new \XLite\Model\WidgetParam\TypeString('Caption', $this->getDefaultCaption()),
            self::PARAM_ITEMS   => new \XLite\Model\WidgetParam\TypeCollection('Items', $this->getDefaultItems()),
        ];
    }

    /**
     * @return string
     */
    protected function getDefaultName()
    {
        return 'selector';
    }

    /**
     * @return string
     */
    protected function getDefaultCaption()
    {
        return static::t('All');
    }

    /**
     * @return array
     */
    protected function getDefaultItems()
    {
        return [];
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'items_list/module/filter/selector/body.twig';
    }

    /**
     * @return string
     */
    protected function getName()
    {
        return $this->getParam(self::PARAM_NAME);
    }

    /**
     * @return string
     */
    protected function getStyle()
    {
        return 'menu selector ' . $this->getName() . '-menu';
    }

    /**
     * @return array
     */
    protected function getItems()
    {
        return $this->getParam(self::PARAM_ITEMS);
    }

    /**
     * @return string
     */
    protected function getCaption()
    {
        $caption = $this->getParam(self::PARAM_CAPTION);

        foreach ($this->getItems() as $item) {
            if ($this->isItemSelected($item)) {
                $caption = $this->getItemLabel($item);
                break;
            }
        }

        return $caption;
    }

    /**
     * @param array $item
     *
     * @return string
     */
    protected function getItemLabel(array $item)
    {
        return isset($item[self::ITEM_LABEL]) ? $item[self::ITEM_LABEL] : '';
    }

    /**
     * @param array $item
     *
     * @return string
     */
    protected function getItemURL(array $item)
    {
        return isset($item[self::ITEM_URL]) ? $item[self::ITEM_URL] : '';
    }

    /**
     * @param array $item
     *
     * @return string
     */
    protected function isItemSelected(array $item)
    {
        return !empty($item[self::ITEM_SELECTED]);
    }

    /**
     * @param array $item
     *
     * @return string
     */
    protected function getItemStyle(array $item)
    {
        $result = 'menu-item';

        if ($this->isItemSelected($item)) {
            $result .= ' selected';
        }

        return $result;
    }
}
