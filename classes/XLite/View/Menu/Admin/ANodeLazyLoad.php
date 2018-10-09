<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin;

/**
 * Node lazy load abstract class
 */
abstract class ANodeLazyLoad extends \XLite\View\Base\ALazyLoad
{
    /**
     * Check read
     *
     * @return boolean
     */
    abstract protected function isRead();

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();
        $list[] = 'menu/notifications.js';

        return $list;
    }

    /**
     * Returns style classes
     *
     * @return array
     */
    protected function getStyleClasses()
    {
        $list = parent::getStyleClasses();
        if ($this->isRead()) {
            $list[] = 'read';
        }

        return $list;
    }
}
