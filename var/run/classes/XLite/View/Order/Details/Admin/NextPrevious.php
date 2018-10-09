<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Order\Details\Admin;

/**
 * Order info
 *
 * @ListChild (list="page.tabs.after", zone="admin", weight="200")
 */
class NextPrevious extends \XLite\View\AView
{
    protected $nextOrder;

    protected $previousOrder;

    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();
        $list[] = 'order';

        return $list;
    }

    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'order/page/next-previous.css';

        return $list;
    }

    /**
     * @return \XLite\Model\Order
     */
    protected function getOrder()
    {
        return \XLite::getController()->getOrder();
    }

    /**
     * @return \XLite\Model\Order
     */
    protected function getNextOrder()
    {
        if ($this->nextOrder === null) {
            $this->nextOrder = \XLite\Core\Database::getRepo('XLite\Model\Order')->findNextOrder($this->getOrder());
        }

        return $this->nextOrder;
    }

    /**
     * @return \XLite\Model\Order
     */
    protected function getPreviousOrder()
    {
        if ($this->previousOrder === null) {
            $this->previousOrder = \XLite\Core\Database::getRepo('XLite\Model\Order')->findPreviousOrder($this->getOrder());
        }

        return $this->previousOrder;
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && $this->getOrder()
            && ($this->getNextOrder() || $this->getPreviousOrder());
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'order/page/next-previous.twig';
    }
}
