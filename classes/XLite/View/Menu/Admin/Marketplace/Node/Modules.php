<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\Marketplace\Node;

/**
 * Modules node
 */
class Modules extends \XLite\View\Menu\Admin\ANodeNotification
{
    /**
     * Messages
     *
     * @var array
     */
    protected $messages;

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && $this->getMessages();
    }

    /**
     * Check if content is updated
     *
     * @return boolean
     */
    public function isUpdated()
    {
        return $this->getLastReadTimestamp() < $this->getLastUpdateTimestamp();
    }

    /**
     * Returns count of unread messages
     *
     * @return integer
     */
    public function getUnreadCount()
    {
        return array_reduce($this->getMessages(), [$this, 'countMessages'], 0);
    }

    /**
     * Get cache parameters
     *
     * @return array
     */
    public function getCacheParameters()
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
        return 'menu/marketplace/modules.twig';
    }

    /**
     * Get urgent messages
     *
     * @return array
     */
    protected function getMessages()
    {
        if (null === $this->messages) {
            $this->messages = array_map([$this, 'parseMessage'], $this->fetchMessages());
            usort($this->messages, [$this, 'sortMessages']);

            $this->setLastUpdateTimestamp(array_reduce($this->messages, [$this, 'maxDate'], 0));
        }

        return $this->messages;
    }

    /**
     * Fetch messages
     *
     * @return array
     */
    protected function fetchMessages()
    {
        $result = [];

        $messages = \XLite\Core\Marketplace::getInstance()->getXC5Notifications();
        foreach ($messages as $message) {
            if ($message['type'] === 'module') {
                $result[] = $message;
            }
        }

        return $result;
    }

    /**
     * Return update timestamp
     *
     * @return integer
     */
    protected function getLastUpdateTimestamp()
    {
        $result = \XLite\Core\TmpVars::getInstance()->modulesMessageLastTimestamp;

        if (null === $result) {
            $result = LC_START_TIME;
            $this->setLastUpdateTimestamp($result);
        }

        return $result;
    }

    /**
     * Set update timestamp
     *
     * @param integer $timestamp Timestamp
     *
     * @return void
     */
    protected function setLastUpdateTimestamp($timestamp)
    {
        \XLite\Core\TmpVars::getInstance()->modulesMessageLastTimestamp = $timestamp;
    }

    /**
     * Parse message
     *
     * @param array $message Message
     *
     * @return array
     */
    protected function parseMessage($message)
    {
        $message['external'] = true;

        if (!isset($message['link']) || empty($message['link'])) {
            $message['link']     = $this->getModuleURL($message['module']);
            $message['external'] = false;
        }

        return $message;
    }

    /**
     * @param string $moduleName
     *
     * @return string
     */
    protected function getModuleURL($moduleName)
    {
        list($author, $module) = explode('-', $moduleName);

        return \XLite\Core\Database::getRepo('XLite\Model\Module')
            ->getMarketplaceUrlByName($author, $module);
    }

    /**
     * Sort helper
     *
     * @param array $a First message
     * @param array $b Second message
     *
     * @return boolean
     */
    protected function sortMessages($a, $b)
    {
        return isset($a['date'])
            && isset($b['date'])
            && $a['date'] < $b['date'];
    }

    /**
     * Count helper
     *
     * @param integer $carry Carry
     * @param array   $item  Message
     *
     * @return integer
     */
    protected function countMessages($carry, $item)
    {
        if ($item['date'] >= $this->getLastReadTimestamp()) {
            $carry++;
        }

        return $carry;
    }

    /**
     * Max date helper
     *
     * @param integer $carry Carry
     * @param array   $item  Message
     *
     * @return integer
     */
    protected function maxDate($carry, $item)
    {
        return max($carry, $item['date']);
    }

    // {{{ View helpers

    /**
     * Returns node style class
     *
     * @return array
     */
    protected function getNodeStyleClasses()
    {
        $list   = parent::getNodeStyleClasses();
        $list[] = 'modules';

        return $list;
    }

    /**
     * Returns icon
     *
     * @return string
     */
    protected function getIcon()
    {
        return '';
    }

    /**
     * Returns header
     *
     * @return string
     */
    protected function getHeader()
    {
        return static::t('New modules');
    }

    // }}}
}
