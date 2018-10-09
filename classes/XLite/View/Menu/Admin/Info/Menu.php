<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\Info;

/**
 * Info menu widget
 */
class Menu extends \XLite\View\Menu\Admin\AAdmin
{
    /**
     * Return unread count
     *
     * @return integer
     */
    public function isUpdated()
    {
        /** @var \XLite\View\Menu\Admin\ANodeNotification $item */
        foreach ($this->getItems() as $item) {
            if ($item->isUpdated()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Cache availability
     *
     * @return boolean
     */
    protected function isCacheAvailable()
    {
        return true;
    }

    /**
     * Get cache parameters
     *
     * @return array
     */
    protected function getCacheParameters()
    {
        $params = parent::getCacheParameters();
        $params[] = (boolean)$this->getUnreadCount();
        $key = [];

        /** @var \XLite\View\Menu\Admin\ANodeNotification $item */
        foreach ($this->getItems() as $item) {
            $key[] = $item->getCacheParameters();
        }

        $params[] = md5(serialize($key));

        return $params;
    }

    /**
     * Return widget directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'menu/info';
    }

    /**
     * Get default widget
     *
     * @return string
     */
    protected function getDefaultWidget()
    {
        return null;
    }

    /**
     * Define menu items
     *
     * @return array
     */
    protected function defineItems()
    {
        return [
            'phpOldVersion' => [
                static::ITEM_WEIGHT     => 50,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\PhpOldVersion',
            ],
            'warning' => [
                static::ITEM_WEIGHT     => 100,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\Warning',
            ],
            'speedUp' => [
                static::ITEM_WEIGHT     => 200,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\SpeedUp',
            ],
            'lowStock' => [
                static::ITEM_WEIGHT     => 300,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\LowStock',
            ],
            'upgrade' => [
                static::ITEM_WEIGHT     => 400,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\Upgrade',
            ],
            'licenseWarning' => [
                static::ITEM_WEIGHT     => 500,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\LicenseWarning',
            ],
            'pendingMemberships' => [
                static::ITEM_WEIGHT     => 600,
                static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\Info\Node\Membership',
            ],
        ];
    }

    /**
     * Prepare items
     *
     * @param array $items Items
     *
     * @return array
     */
    protected function prepareItems($items)
    {
        uasort($items, [$this, 'sortItems']);
        foreach ($items as $index => $item) {
            $item[\XLite\View\Menu\Admin\ANodeNotification::PARAM_LAST_READ] = $this->getLastReadTimestamp();

            $widget = isset($item[static::ITEM_WIDGET])
                ? $this->getWidget($item, $item[static::ITEM_WIDGET])
                : null;

            if ($widget
                && $widget->checkACL()
                && $widget->isVisible()
            ) {
                $items[$index] = $widget;

            } else {
                unset($items[$index]);
            }
        }

        return $items;
    }

    /**
     * Returns last read timestamp
     *
     * @return integer
     */
    protected function getLastReadTimestamp()
    {
        $cookie = \XLite\Core\Request::getInstance()->notification_read_infoMenuReadTimestamp;

        return $cookie
            ? (integer)$cookie
            : \XLite\Core\TmpVars::getInstance()->infoMenuReadTimestamp;
    }

    /**
     * Get container tag attributes
     *
     * @return array
     */
    protected function getContainerTagAttributes()
    {
        $attributes = [
            'class' => 'notification-menu',
        ];

        $attributes['data-unread-count'] = $this->getUnreadCount();
        $attributes['data-menu-type'] = 'infoMenuReadTimestamp';

        return $attributes;
    }

    /**
     * Return unread count
     *
     * @return integer
     */
    protected function getUnreadCount()
    {
        $count = 0;
        /** @var \XLite\View\Menu\Admin\ANodeNotification $item */
        foreach ($this->getItems() as $item) {
            $count += $item->getUnreadCount();
        }

        return $count;
    }

    /**
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() || (\XLite\Core\Auth::getInstance()->isAdmin() && !$this->hasItems());
    }
}
