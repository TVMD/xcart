<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\VendorMessages\Core;

/**
 * Mailer
 */
abstract class Mailer extends \XLite\Core\Mailer implements \XLite\Base\IDecorator
{
    /**
     * New mail type
     */
    const TYPE_VENDOR_MESSAGES = 'VendorMessages';

    /**
     * New mail type
     */
    const TYPE_NEW_MESSAGE = 'new_message';

    const RECIPIENT_ADMIN    = 'A';
    const RECIPIENT_CUSTOMER = 'C';

    /**
     * Send new message notification
     *
     * @param \XLite\Module\XC\VendorMessages\Model\Message $message Message
     *
     * @return string | null
     */
    public static function sendMessageNotifications(\XLite\Module\XC\VendorMessages\Model\Message $message)
    {
        /** @var \XLite\Model\Profile $member */
        foreach ($message->getConversation()->getMembers() as $member) {
            if ($message->getAuthor()->getProfileId() !== $member->getProfileId()) {
                static::register([
                    'message'    => $message,
                    'recipient'  => $member,
                    'targetType' => $member->isAdmin() ? static::RECIPIENT_ADMIN : static::RECIPIENT_CUSTOMER,
                ]);

                static::compose(
                    static::TYPE_NEW_MESSAGE,
                    static::getSiteAdministratorMail(),
                    $member->getLogin(),
                    'modules/XC/VendorMessages/new_message_notification',
                    [],
                    true,
                    \XLite::CUSTOMER_INTERFACE,
                    $member->getLanguage()
                );
            }
        }

        if ($message->isShouldSendToAdmin()) {
            static::register([
                'message'       => $message,
                'recipientName' => \XLite\Core\Config::getInstance()->Company->company_name,
                'targetType'    => static::RECIPIENT_ADMIN,
            ]);

            static::compose(
                static::TYPE_VENDOR_MESSAGES,
                static::getSiteAdministratorMail(),
                static::getSiteAdministratorMail(),
                'modules/XC/VendorMessages/new_message_notification',
                [],
                true,
                \XLite::CUSTOMER_INTERFACE,
                \XLite\Core\Config::getInstance()->General->default_admin_language
            );
        }

        return static::getMailer()->getLastError();
    }

    /**
     * Send vendor message notification
     *
     * @param \XLite\Module\XC\VendorMessages\Model\Message $message Message
     *
     * @return string | null
     */
    public static function sendOrderMessageNotifications(\XLite\Module\XC\VendorMessages\Model\Message $message)
    {
        /** @var \XLite\Model\Profile $member */
        foreach ($message->getConversation()->getMembers() as $member) {
            if ($message->getAuthor()->getProfileId() !== $member->getProfileId()) {
                static::register([
                    'message'       => $message,
                    'recipientName' => $member->getNameForMessages(),
                    'targetType'    => $member->isAdmin() ? static::RECIPIENT_ADMIN : static::RECIPIENT_CUSTOMER,
                ]);

                static::compose(
                    static::TYPE_VENDOR_MESSAGES,
                    static::getSiteAdministratorMail(),
                    $member->getLogin(),
                    'modules/XC/VendorMessages/notification',
                    [],
                    true,
                    \XLite::CUSTOMER_INTERFACE,
                    $member->getLanguage()
                );
            }
        }

        if ($message->isShouldSendToAdmin()) {
            static::register([
                'message'       => $message,
                'recipientName' => \XLite\Core\Config::getInstance()->Company->company_name,
                'targetType'    => static::RECIPIENT_ADMIN,
            ]);

            static::compose(
                static::TYPE_VENDOR_MESSAGES,
                static::getSiteAdministratorMail(),
                static::getSiteAdministratorMail(),
                'modules/XC/VendorMessages/notification',
                [],
                true,
                \XLite::CUSTOMER_INTERFACE,
                \XLite\Core\Config::getInstance()->General->default_admin_language
            );
        }

        return static::getMailer()->getLastError();
    }

    /**
     * Returns variables names
     *
     * @return array
     */
    protected function getVariables()
    {
        return array_merge(
            parent::getVariables(),
            [
                'conversation_link',
                'order_number',
                'order_link',
                'order_messages_link',
                'message',
            ]
        );
    }

    /**
     * Returns message
     *
     * @return null|\XLite\Module\XC\VendorMessages\Model\Message
     */
    protected function getMessage()
    {
        $message = static::getMailer()->get('message');

        return (is_object($message) && $message instanceof \XLite\Module\XC\VendorMessages\Model\Message)
            ? $message
            : null;
    }

    /**
     * Return conversation link
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueConversationLink($name)
    {
        $message = $this->getMessage();

        if ($message) {
            if (static::getMailer()->get('targetType') == static::RECIPIENT_CUSTOMER) {
                $url = \XLite\Core\Converter::buildURL(
                    'conversation',
                    null,
                    ['id' => $message->getConversation()->getId()],
                    \XLite::getCustomerScript()
                );
            } else {
                $url = \XLite\Core\Converter::buildURL(
                    'conversation',
                    null,
                    ['id' => $message->getConversation()->getId()],
                    \XLite::getAdminScript()
                );
            }

            $recipient = static::getMailer()->get('recipient');

            return '<a href="' . htmlentities(\XLite::getInstance()->getShopURL($url)) . '">'
                   . $message->getConversation()->getName($recipient)
                   . '</a>';
        }

        return null;
    }

    /**
     * Returns order
     *
     * @return null|\XLite\Model\Order
     */
    protected function getOrder()
    {
        return $this->getMessage()
            ? $this->getMessage()->getConversation()->getOrder()
            : null;
    }

    /**
     * Return Order number
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueOrderNumber($name)
    {
        return $this->getOrder()
            ? $this->getOrder()->getOrderNumber()
            : null;
    }

    /**
     * Return Order link
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueOrderLink($name)
    {
        $message = $this->getMessage();
        $order = $this->getOrder();

        if ($message && $order) {
            if (static::getMailer()->get('targetType') == static::RECIPIENT_CUSTOMER) {
                $url = \XLite\Core\Converter::buildURL(
                    'order',
                    null,
                    ['order_number' => $order->getOrderNumber()],
                    \XLite::getCustomerScript()
                );
            } else {
                $url = \XLite\Core\Converter::buildURL(
                    'order',
                    null,
                    ['order_number' => $order->getOrderNumber()],
                    \XLite::getAdminScript()
                );
            }

            return '<a href="' . htmlentities(\XLite::getInstance()->getShopURL($url)) . '">'
                   . $order->getOrderNumber()
                   . '</a>';
        }

        return null;
    }

    /**
     * Return Order messages link
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueOrderMessagesLink($name)
    {
        $message = $this->getMessage();
        $order = $this->getOrder();

        if ($message && $order) {
            if (static::getMailer()->get('targetType') == static::RECIPIENT_CUSTOMER) {
                if ($order->getProfile()->getAnonymous()) {
                    $acc = \XLite\Core\Database::getRepo('XLite\Model\AccessControlCell')->generateAccessControlCell(
                        [$order],
                        [\XLite\Model\AccessControlZoneType::ZONE_TYPE_ORDER],
                        'resendAccessLink'
                    );

                    $url = \XLite\Core\Converter::buildPersistentAccessURL(
                        $acc,
                        'order_messages',
                        '',
                        ['order_number' => $order->getOrderNumber()],
                        \XLite::getCustomerScript()
                    );
                } else {
                    $url = \XLite\Core\Converter::buildURL(
                        'order_messages',
                        null,
                        ['order_number' => $order->getOrderNumber()],
                        \XLite::getCustomerScript()
                    );
                }
            } else {
                $url = \XLite\Core\Converter::buildURL(
                    'order',
                    null,
                    [
                        'page'         => 'messages',
                        'order_number' => $order->getOrderNumber(),
                    ],
                    \XLite::getAdminScript()
                );
            }

            return '<a href="' . htmlentities(\XLite::getInstance()->getShopURL($url)) . '">'
                   . $order->getOrderNumber()
                   . '</a>';
        }

        return null;
    }

    /**
     * Return message body
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueMessage($name)
    {
        return $this->getMessage() ? $this->getMessage()->getPublicBody() : null;
    }
}