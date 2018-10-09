<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core;

use ReflectionClass;
use XLite\Core\Job\SchedulingJobs;
use XLite\Core\Job\SendMail;
use XLite\Core\Mailer\Entries;
use XLite\Model\Order;
use XLite\Model\Profile;

/**
 * Mailer core class
 */
abstract class MailerAbstract extends \XLite\Base\Singleton
{
    use SchedulingJobs;
    /**
     * FROM: Site administrator
     */
    const TYPE_PROFILE_CREATED_ADMIN              = 'siteAdmin';
    const TYPE_PROFILE_CREATED_CUSTOMER           = 'siteAdmin';
    const TYPE_REGISTER_ANONYMOUS_CUSTOMER        = 'siteAdmin';
    const TYPE_PROFILE_UPDATED_ADMIN              = 'siteAdmin';
    const TYPE_PROFILE_UPDATED_CUSTOMER           = 'siteAdmin';
    const TYPE_PROFILE_DELETED_ADMIN              = 'siteAdmin';
    const TYPE_FAILED_ADMIN_LOGIN_ADMIN           = 'siteAdmin';
    const TYPE_FAILED_TRANSACTION_ADMIN           = 'siteAdmin';
    const TYPE_ORDER_CREATED_ADMIN                = 'siteAdmin'; // todo: check
    const TYPE_ORDER_PROCESSED_ADMIN              = 'siteAdmin'; // todo: check
    const TYPE_ORDER_PROCESSED_CUSTOMER           = 'siteAdmin'; // todo: check
    const TYPE_ORDER_CHANGED_ADMIN                = 'siteAdmin'; // todo: check
    const TYPE_ORDER_CHANGED_CUSTOMER             = 'siteAdmin'; // todo: check
    const TYPE_ORDER_ADVANCED_CHANGED_CUSTOMER    = 'siteAdmin'; // todo: check
    const TYPE_ORDER_SHIPPED_CUSTOMER             = 'siteAdmin'; // todo: check
    const TYPE_ORDER_WAITING_FOR_APPROVE_CUSTOMER = 'siteAdmin'; // todo: check
    const TYPE_ORDER_FAILED_ADMIN                 = 'siteAdmin'; // todo: check
    const TYPE_ORDER_CANCELED_ADMIN               = 'siteAdmin'; // todo: check
    const TYPE_ACCESS_LINK_CUSTOMER               = 'siteAdmin'; // todo: check

    const TYPE_SAFE_MODE_ACCESS_KEY         = 'siteAdmin';
    const TYPE_UPGRADE_SAFE_MODE_ACCESS_KEY = 'siteAdmin';

    /**
     * FROM: Users department
     */
    const TYPE_RECOVER_PASSWORD_REQUEST = 'usersDep';

    /**
     * FROM: Orders department
     */
    const TYPE_ORDER_TRACKING_INFORMATION_CUSTOMER = 'ordersDep'; // todo: check
    const TYPE_ORDER_CREATED_CUSTOMER              = 'ordersDep'; // todo: check
    const TYPE_ORDER_FAILED_CUSTOMER               = 'ordersDep'; // todo: check
    const TYPE_ORDER_CANCELED_CUSTOMER             = 'ordersDep'; // todo: check
    const TYPE_LOW_LIMIT_WARNING                   = 'ordersDep'; // todo: check

    /**
     * Custom from
     */
    const TYPE_TEST_EMAIL = 'testEmail';

    /**
     * Mailer instance
     *
     * @var \XLite\View\Mailer
     */
    protected static $mailer;

    /**
     * Last error message
     *
     * @var string
     */
    protected static $errorMessage;

    /**
     * Static cache (registry) of sent e-mail notifications
     *
     * @var array
     */
    protected static $mailRegistry = [];
    protected static $schedule = true;
    protected static $scheduledJob = null;

    // {{{ Profile created

    /**
     * Send profile created email
     *
     * @param \XLite\Model\Profile $profile    Profile object
     * @param string               $password   Profile password OPTIONAL
     * @param boolean              $byCheckout By checkout flag OPTIONAL
     *
     * @return void
     */
    public static function sendProfileCreated(\XLite\Model\Profile $profile, $password = null, $byCheckout = false)
    {
        static::sendProfileCreatedAdmin($profile);

        static::sendProfileCreatedCustomer($profile, $password, $byCheckout);
    }

    /**
     * Send notification about created profile to the users department
     *
     * @param \XLite\Model\Profile $profile Profile object
     *
     * @return void
     */
    public static function sendProfileCreatedAdmin(\XLite\Model\Profile $profile)
    {
        static::register('profile', $profile);

        static::compose(
            static::TYPE_PROFILE_CREATED_ADMIN,
            static::composeProfileAdminReplyTo(
                static::getSiteAdministratorMail(),
                $profile
            ),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getUsersDepartmentMails()),
            'profile_created',
            [],
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    /**
     * Send notification about created profile to the user
     *
     * @param \XLite\Model\Profile $profile    Profile object
     * @param string               $password   Profile password OPTIONAL
     * @param boolean              $byCheckout By checkout flag OPTIONAL
     *
     * @return void
     */
    public static function sendProfileCreatedCustomer(
        \XLite\Model\Profile $profile,
        $password = null,
        $byCheckout = false
    )
    {
        static::register(
            [
                'profile'    => $profile,
                'password'   => $password,
                'byCheckout' => $byCheckout,
            ]
        );

        static::compose(
            static::TYPE_PROFILE_CREATED_CUSTOMER,
            static::getSiteAdministratorMail(),
            $profile->getLogin(),
            'profile_created',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $profile->getLanguage())
        );
    }

    /**
     * Send notification about created profile to the user
     *
     * @param \XLite\Model\Profile $profile  Profile object
     * @param string               $password Profile password
     *
     * @return void
     */
    public static function sendRegisterAnonymousCustomer(\XLite\Model\Profile $profile, $password)
    {
        static::register(
            [
                'profile'  => $profile,
                'password' => $password,
            ]
        );

        static::compose(
            static::TYPE_REGISTER_ANONYMOUS_CUSTOMER,
            static::getSiteAdministratorMail(),
            $profile->getLogin(),
            'register_anonymous',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $profile->getLanguage())
        );
    }

    // }}}

    // {{{ Profile updated

    /**
     * Send profile updated email
     *
     * @param \XLite\Model\Profile $profile  Profile object
     * @param string               $password Profile password OPTIONAL
     *
     * @return void
     */
    public static function sendProfileUpdated(\XLite\Model\Profile $profile, $password = null)
    {
        static::sendProfileUpdatedAdmin($profile);

        static::sendProfileUpdatedCustomer($profile, $password);
    }

    /**
     * Send notification about updated profile to the users department
     *
     * @param \XLite\Model\Profile $profile Profile object
     *
     * @return void
     */
    public static function sendProfileUpdatedAdmin(\XLite\Model\Profile $profile)
    {
        static::register('profile', $profile);

        static::compose(
            static::TYPE_PROFILE_UPDATED_ADMIN,
            static::composeProfileAdminReplyTo(
                static::getSiteAdministratorMail(),
                $profile
            ),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getUsersDepartmentMails()),
            'profile_modified',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    /**
     * Send notification about updated profile to the user
     *
     * @param \XLite\Model\Profile $profile  Profile object
     * @param string               $password Profile password OPTIONAL
     *
     * @return void
     */
    public static function sendProfileUpdatedCustomer(\XLite\Model\Profile $profile, $password = null)
    {
        $interface = $profile->isAdmin()
            ? \XLite::getAdminScript()
            : \XLite::getCustomerScript();

        $url = \XLite::getInstance()->getShopURL(
            \XLite\Core\Converter::buildURL('login', '', [], $interface)
        );

        static::register(
            [
                'profile'  => $profile,
                'password' => $password,
                'url'      => $url,
            ]
        );

        static::compose(
            static::TYPE_PROFILE_UPDATED_CUSTOMER,
            static::getSiteAdministratorMail(),
            $profile->getLogin(),
            'profile_modified',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $profile->getLanguage())
        );
    }

    // }}}

    // {{{ Profile deleted

    /**
     * Send profile deleted email
     *
     * @param string $deletedLogin Login of deleted profile
     *
     * @return void
     */
    public static function sendProfileDeleted($deletedLogin)
    {
        static::sendProfileDeletedAdmin($deletedLogin);
    }

    /**
     * Send notification about deleted profile to the users department
     *
     * @param string $deletedLogin Login of deleted profile
     *
     * @return void
     */
    public static function sendProfileDeletedAdmin($deletedLogin)
    {
        static::register('deletedLogin', $deletedLogin);

        static::compose(
            static::TYPE_PROFILE_DELETED_ADMIN,
            static::composeAdminReplyTo(
                static::getSiteAdministratorMail(),
                $deletedLogin
            ),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getUsersDepartmentMails()),
            'profile_deleted',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    // }}}

    // {{{ Failed admin login

    /**
     * Send notification to the site administrator email about failed administrator login attempt
     *
     * @param string $postedLogin Login that was used in failed login attempt
     *
     * @return void
     */
    public static function sendFailedAdminLoginAdmin($postedLogin)
    {
        static::register(
            [
                'login'                => null === $postedLogin ? 'unknown' : $postedLogin,
                'REMOTE_ADDR'          => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown',
                'HTTP_X_FORWARDED_FOR' => isset($_SERVER['HTTP_X_FORWARDED_FOR'])
                    ? $_SERVER['HTTP_X_FORWARDED_FOR']
                    : 'unknown',
            ]
        );

        static::compose(
            static::TYPE_FAILED_ADMIN_LOGIN_ADMIN,
            static::getSiteAdministratorMail(),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getSiteAdministratorMails()),
            'failed_admin_login',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );

        if ($postedLogin && static::getSiteAdministratorMail() !== $postedLogin) {
            static::compose(
                static::TYPE_FAILED_ADMIN_LOGIN_ADMIN,
                static::getSiteAdministratorMail(),
                $postedLogin,
                'failed_admin_login',
                [],
                true,
                \XLite::ADMIN_INTERFACE,
                static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
            );
        }
    }

    // }}}

    // {{{ Recover password request

    /**
     * Send recover password request to the user
     *
     * @param \XLite\Model\Profile $profile              Profile
     * @param string               $userPasswordResetKey User password
     *
     * @return void
     */
    public static function sendRecoverPasswordRequest($profile, $userPasswordResetKey)
    {
        $url = \XLite::getInstance()->getShopURL(
            \XLite\Core\Converter::buildURL(
                'recover_password',
                'confirm',
                [
                    'email'      => $profile->getLogin(),
                    'request_id' => $userPasswordResetKey,
                ]
            )
        );

        $interface = $profile->isAdmin() ? \XLite::ADMIN_INTERFACE : \XLite::CUSTOMER_INTERFACE;

        static::register('url', $url);

        static::compose(
            static::TYPE_RECOVER_PASSWORD_REQUEST,
            static::getUsersDepartmentMail(),
            $profile->getLogin(),
            'recover_password_request',
            [],
            true,
            $interface,
            static::getMailer()->getLanguageCode($interface, $profile->getLanguage())
        );
    }

    // }}}

    // {{{ Order tracking information

    /**
     * Send notification about tracking information to the user
     *
     * @param \XLite\Model\Order $order Order object
     *
     * @return void
     */
    public static function sendOrderTrackingInformationCustomer(\XLite\Model\Order $order)
    {
        $orderUrl = \XLite::getInstance()->getShopURL(
            \XLite\Core\Converter::buildURL(
                'order',
                '',
                [
                    'order_number' => $order->getOrderNumber(),
                ],
                \XLite::getCustomerScript()
            )
        );

        static::register(
            [
                'order'           => $order,
                'trackingNumbers' => $order->getTrackingNumbers(),
                'orderURL'        => $orderUrl,
                'address'         => $order->getProfile()->getBillingAddress(),
                'recipientName'   => $order->getProfile()->getName(),
            ]
        );

        static::compose(
            static::TYPE_ORDER_TRACKING_INFORMATION_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getLogin(),
            'order_tracking_information',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
            $order->getOrderId(),
            'Tracking information is sent to the customer'
        );
    }

    // }}}

    // {{{ Order created

    /**
     * Send created order mails.
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderCreated(\XLite\Model\Order $order)
    {
        static::sendOrderCreatedAdmin($order);

        static::sendOrderCreatedCustomer($order);
    }

    /**
     * Send created order mail to admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderCreatedAdmin(\XLite\Model\Order $order)
    {
        static::register('order', $order);

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::ADMIN_INTERFACE);
        }

        $result = static::composeOrderDepartmentMail('order_created', $order);

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailSent(
                $order->getOrderId(),
                'Order is initially created'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    /**
     * Send created order mail to customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderCreatedCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_CREATED_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getEmail(),
            'order_created',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order is initially created'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Order processed

    /**
     * Send processed order mails
     *
     * @param \XLite\Model\Order $order                      Order model
     * @param boolean            $ignoreCustomerNotification Flag: do not send notification to customer OPTIONAL
     *
     * @return void
     */
    public static function sendOrderProcessed(\XLite\Model\Order $order, $ignoreCustomerNotification = false)
    {
        static::sendOrderProcessedAdmin($order);

        if (!$ignoreCustomerNotification) {
            static::sendOrderProcessedCustomer($order);
        }
    }

    /**
     * Send processed order mail to Admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderProcessedAdmin(\XLite\Model\Order $order)
    {
        static::register('order', $order);

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::ADMIN_INTERFACE);
        }

        $result = static::composeOrderDepartmentMail('order_processed', $order);

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailSent(
                $order->getOrderId(),
                'Order is processed'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    /**
     * Send processed order mail to Customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderProcessedCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_PROCESSED_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getEmail(),
            'order_processed',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order is processed'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Order changed

    /**
     * Send changed order mails
     *
     * @param \XLite\Model\Order $order                      Order model
     * @param boolean            $ignoreCustomerNotification Flag: do not send notification to customer OPTIONAL
     *
     * @return void
     */
    public static function sendOrderChanged(\XLite\Model\Order $order, $ignoreCustomerNotification = false)
    {
        static::sendOrderChangedAdmin($order);

        if (!$ignoreCustomerNotification) {
            static::sendOrderChangedCustomer($order);
        }
    }

    /**
     * Send changed order mail to Admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderChangedAdmin(\XLite\Model\Order $order)
    {
        static::register('order', $order);

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::ADMIN_INTERFACE);
        }

        $result = static::composeOrderDepartmentMail('order_changed', $order);

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailSent(
                $order->getOrderId(),
                'Order is changed'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    /**
     * Send changed order mail to Customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderChangedCustomer(\XLite\Model\Order $order)
    {
        $registryKey = static::getMailRegistryKey(
            'sendOrderChangedCustomer',
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getLogin()
        ) . '_' . $order->getOrderId();

        $isSent = static::checkMailRegistry($registryKey);

        if (!$isSent) {

            // 'Order changed' notification wasn't sent earlier - send this notification

            static::register('order', $order);
            static::register('recipientName', $order->getProfile()->getName());

            if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
                static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
            }

            $result = static::compose(
                static::TYPE_ORDER_CHANGED_CUSTOMER,
                static::getOrdersDepartmentMail(),
                $order->getProfile()->getLogin(),
                'order_changed',
                [],
                true,
                \XLite::CUSTOMER_INTERFACE,
                static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage()),
                false,
                $registryKey
            );

            if ($result && !static::hasScheduledJob()) {
                \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                    $order->getOrderId(),
                    'Order is changed'
                );

            } elseif (static::$errorMessage) {
                \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                    $order->getOrderId(),
                    static::$errorMessage
                );
            }
        }
    }

    // }}}

    // {{{ Order advanced changed (AOM)

    /**
     * Send changed order mail to Customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderAdvancedChangedCustomer(\XLite\Model\Order $order)
    {
        $registryKey = static::getMailRegistryKey(
                'sendOrderAdvancedChangedCustomer',
                static::getOrdersDepartmentMail(),
                $order->getProfile()->getLogin()
            ) . '_' . $order->getOrderId();

        $isSent = static::checkMailRegistry($registryKey);

        if (!$isSent) {

            // 'Order changed' notification wasn't sent earlier - send this notification

            static::register(
                [
                    'order'         => $order,
                    'recipientName' => $order->getProfile()->getName(),
                ]
            );

            if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
                static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
            }


            $result = static::compose(
                static::TYPE_ORDER_ADVANCED_CHANGED_CUSTOMER, // todo: remove
                static::getOrdersDepartmentMail(),
                $order->getProfile()->getLogin(),
                'order_advanced_changed',
                [],
                true,
                \XLite::CUSTOMER_INTERFACE,
                static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage()),
                false,
                $registryKey
            );

            if ($result && !static::hasScheduledJob()) {
                \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                    $order->getOrderId(),
                    'Order is changed'
                );

            } elseif (static::$errorMessage) {
                \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                    $order->getOrderId(),
                    static::$errorMessage
                );
            }
        }
    }

    // }}}

    // {{{ Order shipped

    /**
     * Send email notification about shipped order
     *
     * @param \XLite\Model\Order $order Order object
     *
     * @return void
     */
    public static function sendOrderShipped(\XLite\Model\Order $order)
    {
        static::sendOrderShippedCustomer($order);
    }

    /**
     * Send email notification to customer about shipped order
     *
     * @param \XLite\Model\Order $order Order object
     *
     * @return void
     */
    public static function sendOrderShippedCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_SHIPPED_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getLogin(),
            'order_shipped',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order is shipped'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Order shipped

    /**
     * Send email notification about shipped order
     *
     * @param \XLite\Model\Order $order Order object
     *
     * @return void
     */
    public static function sendOrderWaitingForApprove(\XLite\Model\Order $order)
    {
        static::sendOrderWaitingForApproveCustomer($order);
    }

    /**
     * Send email notification to customer about shipped order
     *
     * @param \XLite\Model\Order $order Order object
     *
     * @return void
     */
    public static function sendOrderWaitingForApproveCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_WAITING_FOR_APPROVE_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getEmail(),
            'order_waiting_for_approve',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order awaiting for approval'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Order failed

    /**
     * Send failed order mails
     *
     * @param \XLite\Model\Order $order                      Order model
     * @param boolean            $ignoreCustomerNotification Flag: do not send notification to customer OPTIONAL
     *
     * @return void
     */
    public static function sendOrderFailed(\XLite\Model\Order $order, $ignoreCustomerNotification = false)
    {
        static::sendOrderFailedAdmin($order);

        if (!$ignoreCustomerNotification) {
            static::sendOrderFailedCustomer($order);
        }
    }

    /**
     * Send failed order mail to Admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderFailedAdmin(\XLite\Model\Order $order)
    {
        static::register('order', $order);

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::ADMIN_INTERFACE);
        }

        $result = static::composeOrderDepartmentMail('order_failed', $order);

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailSent(
                $order->getOrderId(),
                'Order is failed'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    /**
     * Send failed order mail to Customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderFailedCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_FAILED_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getLogin(),
            'order_failed',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order is failed'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Order canceled

    /**
     * Send canceled order mails
     *
     * @param \XLite\Model\Order $order                      Order model
     * @param boolean            $ignoreCustomerNotification Flag: do not send notification to customer OPTIONAL
     *
     * @return void
     */
    public static function sendOrderCanceled(\XLite\Model\Order $order, $ignoreCustomerNotification = false)
    {
        static::sendOrderCanceledAdmin($order);

        if (!$ignoreCustomerNotification) {
            static::sendOrderCanceledCustomer($order);
        }
    }

    /**
     * Send canceled order mail to Admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderCanceledAdmin(\XLite\Model\Order $order)
    {
        static::register('order', $order);

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::ADMIN_INTERFACE);
        }

        $result = static::composeOrderDepartmentMail('order_canceled', $order);

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailSent(
                $order->getOrderId(),
                'Order is canceled'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerAdminEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    /**
     * Send canceled order mail to Customer
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendOrderCanceledCustomer(\XLite\Model\Order $order)
    {
        static::register('order', $order);
        static::register('recipientName', $order->getProfile()->getName());

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachInvoice($order, \XLite::CUSTOMER_INTERFACE);
        }

        $result = static::compose(
            static::TYPE_ORDER_CANCELED_CUSTOMER,
            static::getOrdersDepartmentMail(),
            $order->getProfile()->getLogin(),
            'order_canceled',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $order->getProfile()->getLanguage())
        );

        if ($result && !static::hasScheduledJob()) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailSent(
                $order->getOrderId(),
                'Order is canceled'
            );

        } elseif (static::$errorMessage) {
            \XLite\Core\OrderHistory::getInstance()->registerCustomerEmailFailed(
                $order->getOrderId(),
                static::$errorMessage
            );
        }
    }

    // }}}

    // {{{ Access control

    /**
     * Send changed order mail to Customer
     *
     * @param \XLite\Model\Profile           $profile Order model
     * @param \XLite\Model\AccessControlCell $acc     Order model
     *
     * @return void
     */
    public static function sendAccessLinkCustomer(\XLite\Model\Profile $profile, \XLite\Model\AccessControlCell $acc)
    {
        $returnData = $acc->getReturnData();

        $link = \XLite\Core\Converter::buildPersistentAccessURL(
            $acc,
            isset($returnData['target']) ? $returnData['target'] : '',
            isset($returnData['action']) ? $returnData['action'] : '',
            isset($returnData['params']) ? $returnData['params'] : [],
            \XLite::getCustomerScript()
        );

        static::register('access_link', $link);
        static::register('profile', $profile);
        static::register('recipientName', $profile->getName());

        static::compose(
            static::TYPE_ACCESS_LINK_CUSTOMER,
            static::getSiteAdministratorMail(),
            $profile->getLogin(),
            'access_link',
            [],
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $profile->getLanguage())
        );
    }

    // }}}

    // {{{ Safe mode access key

    /**
     * Send notification about generated safe mode access key
     *
     * @param string  $key        Access key
     * @param boolean $keyChanged is key new
     *
     * @return void
     */
    public static function sendSafeModeAccessKeyNotification($key, $keyChanged = false)
    {
        // Register variables
        static::register('key', $key);
        static::register('keyChanged', $keyChanged);
        static::register('current_snapshot_url', \Includes\SafeMode::getLatestSnapshotURL());
        static::register('hard_reset_url', \Includes\SafeMode::getResetURL());
        static::register('soft_reset_url', \Includes\SafeMode::getResetURL(true));
        static::register('article_url', \XLite::getController()->getArticleURL());

        static::compose(
            static::TYPE_SAFE_MODE_ACCESS_KEY, // todo: remove
            static::getSiteAdministratorMail(),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getSiteAdministratorMails()),
            'safe_mode_key_generated',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    /**
     * Send notification about generated safe mode access key
     *
     * @return void
     */
    public static function sendUpgradeSafeModeAccessKeyNotification()
    {
        static::compose(
            static::TYPE_UPGRADE_SAFE_MODE_ACCESS_KEY,
            static::getSiteAdministratorMail(),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getSiteAdministratorMails()),
            'upgrade_access_keys',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    // }}}

    // {{{ Test email

    /**
     * Send test email
     *
     * @param string $from Email address to send test email from
     * @param string $to   Email address to send test email to
     * @param string $body Body test email text OPTIONAL
     *
     * @return string
     */
    public static function sendTestEmail($from, $to, $body = '')
    {
        static::register(
            ['body' => $body,]
        );

        if (\XLite\Core\Config::getInstance()->NotificationAttachments->attach_pdf_invoices) {
            static::attachTestPDF(\XLite::ADMIN_INTERFACE);
        }

        static::compose(
            static::TYPE_TEST_EMAIL,
            $from,
            $to,
            'test_email',
            [],
            true,
            \XLite::ADMIN_INTERFACE
        );

        return static::getMailer()->getLastError();
    }

    // }}}

    // {{{ Low limit warning

    /**
     * Send "Low limit warning" notification
     *
     * @param array $data Product data
     *
     * @return void
     */
    public static function sendLowLimitWarningAdmin($data)
    {
        static::register('product', $data);

        static::compose(
            static::TYPE_LOW_LIMIT_WARNING,
            static::getOrdersDepartmentMail(),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getSiteAdministratorMails()),
            'low_limit_warning',
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }

    /**
     * Send failed order mail to admin
     *
     * @param \XLite\Model\Order $order Order model
     *
     * @return void
     */
    public static function sendFailedTransactionAdmin(\XLite\Model\Payment\Transaction $transaction)
    {
        $transactionSearchURL = \XLite\Core\Converter::buildFullURL(
            'payment_transactions',
            '',
            [
                'public_id' => $transaction->getPublicId()
            ],
            \XLite::getAdminScript()
        );
        static::register('transactionSearchURL', $transactionSearchURL);
        static::register('order', $transaction->getOrder());

        static::composeOrderDepartmentMail('failed_transaction', ($transaction->getOrder() ?: null));
    }

    /**
     * Returns test pdf document
     *
     * @param \XLite\Model\Order $order     Order entity
     * @param string             $interface Document interface
     *
     * @return string
     */
    protected static function attachTestPDF($interface = null)
    {
        $page = new \XLite\View\PdfPage\Test();
        $page->setWidgetParams(
            [
                'interface' => $interface
            ]
        );

        $handler = \XLite\Core\Pdf\Handler::getDefault();

        $handler->handlePdfPage($page);

        $document = $handler->output();

        $filename = 'test_attach.pdf';

        static::attachString($document, $filename, 'base64', 'application/pdf');
    }

    /**
     * Returns pdf document of order invoice
     *
     * @param \XLite\Model\Order $order     Order entity
     * @param string             $interface Document interface
     *
     * @return string
     */
    protected static function attachInvoice(\XLite\Model\Order $order, $interface = null)
    {
        if ($order) {
            $page = new \XLite\View\PdfPage\Invoice();
            $page->setWidgetParams(
                [
                    'order'     => $order,
                    'interface' => $interface
                ]
            );

            $handler = \XLite\Core\Pdf\Handler::getDefault();

            $handler->handlePdfPage($page);

            $document = $handler->output();

            $filename = 'invoice_' . $order->getOrderNumber() . '.pdf';

            static::attachString($document, $filename, 'base64', 'application/pdf');
        } else {
            \XLite\Logger::getInstance()->log(
                'Empty order given in XLite\Core\Mailer::attachInvoice',
                LOG_ERR
            );
        }
    }

    // }}}

    // {{{ Base methods

    /**
     * Returns mailer instance
     *
     * @return \XLite\View\Mailer
     */
    protected static function getMailer()
    {
        if (null === static::$mailer) {
            static::$mailer = new \XLite\View\Mailer();
        }

        return static::$mailer;
    }

    /**
     * Register variable into mail viewer
     *
     * @param string|array $name  Variable name
     * @param mixed        $value Variable value OPTIONAL
     *
     * @return void
     */
    protected static function register($name, $value = '')
    {
        $variables = is_array($name) ? $name : [$name => $value];
        $mailer = static::getMailer();

        foreach ($variables as $k => $v) {
            $mailer->set($k, null === $v ? false : $v);
        }
    }

    /**
     * Attach file into mail viewer
     *
     * @param string $path     Full path to file
     * @param string $name     Filename in mail OPTIONAL
     * @param string $encoding File encoding (default: 'base64') OPTIONAL
     * @param string $mime     File MIME-type (default: 'Application/octet-stream') OPTIONAL
     *
     * @return void
     */
    protected static function attach($path, $name = '', $encoding = null, $mime = '')
    {
        $mailer = static::getMailer();

        $mailer->addAttachment($path, $name, $encoding, $mime);
    }

    /**
     * Attach file into mail viewer
     *
     * @param string $string   Base64 attachment string
     * @param string $name     Filename in mail OPTIONAL
     * @param string $encoding File encoding (default: 'base64') OPTIONAL
     * @param string $mime     File MIME-type (default: 'Application/octet-stream') OPTIONAL
     *
     * @return void
     */
    protected static function attachString($string, $name = '', $encoding = null, $mime = '')
    {
        $mailer = static::getMailer();

        $mailer->addStringAttachment($string, $name, $encoding, $mime);
    }

    /**
     * Attach file into mail viewer
     *
     * @param array $files Array of filepaths or records in the following format: array( 'path' => ?, 'name' => ?, 'encoding' = ?, 'mime' = ? )
     *
     * @return void
     */
    protected static function attachMultiple($files)
    {
        $mailer = static::getMailer();

        foreach ($files as $file) {
            if (is_array($file)) {
                $path = isset($file['path']) ? $file['path'] : null;
                $name = isset($file['name']) ? $file['name'] : '';
                $encoding = isset($file['encoding']) ? $file['encoding'] : null;
                $mime = isset($file['mime']) ? $file['mime'] : '';

                static::attach($path, $name, $encoding, $mime);
            } else {
                static::attach($file);
            }
        }
    }

    /**
     * Clear attachments from mail
     *
     * @return void
     */
    protected static function clearAttachments()
    {
        $mailer = static::getMailer();

        $mailer->clearAttachments();
    }

    /**
     * Clear string attachments from mail
     *
     * @return void
     */
    protected static function clearStringAttachments()
    {
        $mailer = static::getMailer();

        $mailer->clearStringAttachments();
    }

    /**
     * Returns scheduling availability flag.
     *
     * @param bool $value
     */
    public static function setSchedule($value)
    {
        static::$schedule = $value;
    }

    /**
     * @return bool
     */
    public static function getSchedule()
    {
        return static::$schedule;
    }

    /**
     * Sets the last scheduled job
     *
     * @param SendMail $job
     */
    public static function setScheduledJob($job)
    {
        static::$scheduledJob = $job;
    }

    /**
     * Returns the last scheduled job
     *
     * @return SendMail
     */
    public static function getScheduledJob()
    {
        return static::$scheduledJob;
    }

    /**
     * Check if there is recently scheduled job
     *
     * @return bool
     */
    public static function hasScheduledJob()
    {
        return (bool) static::$scheduledJob;
    }

    /**
     * Compose and send wrapper for \XLite\View\Mailer::compose()
     *
     * @param string       $type          Email type. It defines the additional specific changes of the email data
     *                                    (see prepareFrom and other methods)
     * @param array|string $from          Email REPLY-TO(first email also could be used as FROM)
     * @param string       $to            Email TO
     * @param string       $dir           Directory where mail templates are located
     * @param array        $customHeaders Array of custom mail headers OPTIONAL
     * @param boolean      $doSend        Flag: if true - send email immediately OPTIONAL
     * @param string       $interface     Interface to compile mail templates (skin name: customer, admin or mail) OPTIONAL
     * @param string       $languageCode  Language code OPTIONAL
     * @param bool         $force         Force email send OPTIONAL
     *
     * @return bool
     */
    protected static function compose(
        $type, // todo: remove
        $from,
        $to,
        $dir,
        array $customHeaders = [],
        $doSend = true,
        $interface = \XLite::CUSTOMER_INTERFACE,
        $languageCode = '',
        $force = false,
        $mailRegistryKey = null
    )
    {
        $result = false;
        static::$errorMessage = null;

        list($callee, $arguments) = static::tryGetCallee();

        if (!$mailRegistryKey) {
            $mailRegistryKey = static::getMailRegistryKey($callee, $from, $to);
            foreach ($arguments as $arg) {
                $part = $arg;
                if ($arg instanceof \XLite\Model\AEntity) {
                    $part = [
                        get_class($arg),
                        $arg->getUniqueIdentifier()
                    ];
                }
                $mailRegistryKey .= md5(serialize($part));
            }
        }

        if (
            static::getSchedule()
            && method_exists('\XLite\Core\Mailer', $callee)
            && !in_array($callee, static::getQueueExcludedCallees())
        ) {
            $sendMailJob = new SendMail(
                $callee,
                $arguments
            );

            static::clearAttachments();
            static::clearStringAttachments();

            static::schedule($sendMailJob);
            static::setScheduledJob($sendMailJob);
            static::$errorMessage = null;

            $result = true;

        } else {
            if (static::isNotificationEnabled($dir, $interface) || $force) {

                if (static::excludedFromRegistryCheck($callee, $from, $to)
                    || !static::checkMailRegistry($mailRegistryKey)
                ) {
                    static::getMailer()->compose(
                        static::prepareFrom($type, $from),
                        static::prepareTo($type, $to),
                        static::prepareDir($type, $dir),
                        static::prepareCustomHeaders($type, $customHeaders),
                        $interface,
                        $languageCode
                    );

                    if ($doSend) {
                        $result = static::getMailer()->send();
                    }
                }

            } else {
                static::clearAttachments();
                static::getMailer()->clearStringAttachments();
            }

            if (!$result && static::getMailer()->getLastErrorMessage()) {
                static::$errorMessage = static::getMailer()->getLastErrorMessage();
            }

            if (!empty($callee)) {
                static::$mailRegistry[] = $mailRegistryKey;
            }
        }

        return $result;
    }

    /**
     * Return list of callees which should not be queued
     *
     * @return array
     */
    protected static function getQueueExcludedCallees()
    {
        return [
            'sendRecoverPasswordRequest',
            'sendTestEmail',
            'sendSafeModeAccessKeyNotification',
            'sendUpgradeSafeModeAccessKeyNotification'
        ];
    }


    /**
     * I'm really sorry for this, but its is much simpler than
     * trying to serialize good half of environment
     * or refactor whole Core\Mailer and View\Mailer
     * @return array
     */
    public static function tryGetCallee()
    {
        $maxDepth = 512;

        $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT);

        $maxDepth = min($maxDepth, count($backtrace));

        for ($index = 2; $index < $maxDepth; $index++) {
            $calleeRaw = static::getCalleeAndArgsFromTraceEntry($backtrace[$index++]);
            list($calleeFound, ) = $calleeRaw;

            if ($calleeFound !== 'compose') {
                return $calleeRaw;
            }
        }

        return ['', []];
    }

    /**
     * @param $entry
     */
    protected static function getCalleeAndArgsFromTraceEntry($entry)
    {
        $callee = $entry['function'];
        $arguments = [];
        if (isset($entry['args'])) {
            $arguments = $entry['args'];
        }

        return [$callee, $arguments];
    }

    /**
     * Should we exclude from check registry
     *
     * @param string $callee    Function name
     * @param string $from      From e-mail
     * @param string $to        To e-mail
     *
     * @return boolean
     */
    protected static function excludedFromRegistryCheck($callee, $from, $to)
    {
        return false;
    }

    /**
     * Return true if specified notification has already been sent
     *
     * @param $key
     *
     * @return bool
     * @internal param string $func Function name
     * @internal param string $from From e-mail
     * @internal param string $to To e-mail
     *
     */
    protected static function checkMailRegistry($key)
    {
        return in_array($key, static::$mailRegistry, true);
    }

    /**
     * Generate key for sent emails registry
     *
     * @param string $func Function name
     * @param string $from From e-mail
     * @param string $to   To e-mail
     *
     * @return string
     */
    protected static function getMailRegistryKey($func, $from, $to)
    {
        return sprintf(
            '%s-%s-%s',
            $func,
            static::prepareFromKey($from),
            $to
        );
    }

    /**
     * @param $from
     *
     * @return string
     */
    protected static function prepareFromKey($from)
    {
        return is_array($from)
            ? implode(',', array_map(['XLite\Core\Mailer', 'prepareFromKey'], $from))
            : $from;
    }


    /**
     * Make some specific preparations for "From" field according the email type
     *
     * @param string $type Email notification "type"
     * @param string $from "From" field value
     *
     * @return string New "From" field value
     */
    protected static function prepareFrom($type, $from)
    {
        return method_exists('\XLite\Core\Mailer', 'prepareFrom' . ucfirst($type))
            ? call_user_func('\XLite\Core\Mailer::prepareFrom' . ucfirst($type), $from)
            : $from;
    }

    /**
     * Make some specific preparations for "To" field according the email type
     *
     * @param string $type Email notification "type"
     * @param string $to   "To" field value
     *
     * @return string New "To" field value
     */
    protected static function prepareTo($type, $to)
    {
        return method_exists('\XLite\Core\Mailer', 'prepareTo' . ucfirst($type))
            ? call_user_func('\XLite\Core\Mailer::prepareTo' . ucfirst($type), $to)
            : $to;
    }

    /**
     * Make some specific preparations for "dir" field according the email type
     *
     * @param string $type Email notification "type"
     * @param string $dir  Dir field value
     *
     * @return string New "Dir" field value
     */
    protected static function prepareDir($type, $dir)
    {
        return method_exists('\XLite\Core\Mailer', 'prepareDir' . ucfirst($type))
            ? call_user_func('\XLite\Core\Mailer::prepareDir' . ucfirst($type), $dir)
            : $dir;
    }

    /**
     * Make some specific preparations for "Custom Headers" according the email type
     *
     * @param string $type          Email notification "type"
     * @param array  $customHeaders "Custom Headers" field value
     *
     * @return array New "Custom Headers" field value
     */
    protected static function prepareCustomHeaders($type, $customHeaders)
    {
        return method_exists('\XLite\Core\Mailer', 'prepareCustomHeaders' . ucfirst($type))
            ? call_user_func('\XLite\Core\Mailer::prepareCustomHeaders' . ucfirst($type), $customHeaders)
            : $customHeaders;
    }

    /**
     * Sales department e-mail:
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string
     */
    public static function getOrdersDepartmentMail($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->orders_department);

        return (is_array($emails) && !empty($emails))
            ? array_shift($emails)
            : static::getSiteAdministratorMail();
    }

    /**
     * Sales department e-mail:
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string[]
     */
    public static function getOrdersDepartmentMails($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->orders_department);

        return (is_array($emails) && !empty($emails))
            ? $emails
            : static::getSiteAdministratorMails();
    }

    /**
     * Customer relations e-mail
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string
     */
    public static function getUsersDepartmentMail($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->users_department);

        return (is_array($emails) && !empty($emails)) ? array_shift($emails) : '';
    }

    /**
     * Customer relations e-mail
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string[]
     */
    public static function getUsersDepartmentMails($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->users_department);

        return (is_array($emails) && !empty($emails)) ? $emails : [];
    }

    /**
     * Customer relations e-mail
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string
     */
    public static function getSupportDepartmentMail($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->support_department);

        return (is_array($emails) && !empty($emails)) ? array_shift($emails) : '';
    }

    /**
     * Support e-mails
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string[]
     */
    public static function getSupportDepartmentMails($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->support_department);

        return (is_array($emails) && !empty($emails)) ? $emails : [];
    }

    /**
     * Site administrator e-mail
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string
     */
    public static function getSiteAdministratorMail($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->site_administrator);

        return (is_array($emails) && !empty($emails)) ? array_shift($emails) : '';
    }

    /**
     * Site administrator e-mail
     *
     * @param boolean $registerFromName register company name as from name
     *
     * @return string[]
     */
    public static function getSiteAdministratorMails($registerFromName = true)
    {
        if ($registerFromName) {
            static::register('fromName', static::getCompanyName());
        }

        $emails = @unserialize(\XLite\Core\Config::getInstance()->Company->site_administrator);

        return (is_array($emails) && !empty($emails)) ? $emails : [];
    }

    /**
     * Returns company name from config
     *
     * @return string
     */
    protected static function getCompanyName()
    {
        return \XLite\Core\Config::getInstance()->Company->company_name;
    }

    /**
     * Returns notification model for templates directory
     *
     * @param string $dir Templates directory
     *
     * @return mixed
     */
    protected static function getNotification($dir)
    {
        return \XLite\Core\Database::getRepo('\XLite\Model\Notification')
            ->findOneByTemplatesDirectory($dir);
    }

    /**
     * Check if sending allowed
     *
     * @param string $dir       Templates directory
     * @param string $interface Interface
     *
     * @return boolean
     */
    protected static function isNotificationEnabled($dir, $interface)
    {
        $result = true;
        $notification = static::getNotification($dir);

        if ($notification) {
            switch ($interface) {
                case \XLite::CUSTOMER_INTERFACE:
                    $result = $notification->getEnabledForCustomer();
                    break;

                case \XLite::ADMIN_INTERFACE:
                    $result = $notification->getEnabledForAdmin();
                    break;

                default:
                    break;
            }
        }

        return $result;
    }

    // }}}

    // {{{ Variables for mail body

    /**
     * Returns all available variables and there current values
     *
     * @return array
     */
    public function getAllVariables()
    {
        $names = $this->getVariables();

        $variables = array_map([$this, 'getVariableName'], $names);
        $values = array_map([$this, 'getVariableValue'], $names);

        return array_combine($variables, $values);
    }

    /**
     * Replace variables by values
     *
     * @param string $body Message body
     *
     * @return string
     */
    public function populateVariables($body)
    {
        $names = $this->getVariables();

        $variables = array_map([$this, 'getVariableName'], $names);
        $values = array_map([$this, 'getVariableValue'], $names);

        return str_replace($variables, $values, $body);
    }

    /**
     * Returns variables names
     *
     * @return array
     */
    protected function getVariables()
    {
        return [
            'logo',
            'company_name',
            'company_link',
            'company_website',
            'company_address',
            'company_country',
            'company_state',
            'company_fax',
            'company_city',
            'company_zipcode',
            'company_phone',
            'recipient_name',
        ];
    }

    /**
     * Returns variable placeholder
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableName($name)
    {
        return '%' . $name . '%';
    }

    /**
     * Return variable value
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValue($name)
    {
        $result = '';

        $methodName = __FUNCTION__ . \Includes\Utils\Converter::convertToPascalCase($name);

        if (method_exists($this, $methodName)) {
            $result = $this->{$methodName}($name);
        } elseif (0 === strpos($name, 'company')) {
            $result = $this->getVariableValueCompany($name);
        }

        return $result;
    }

    /**
     * Returns logo URI
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueLogo($name)
    {
        $logo = static::getMailer()->getLogo();
        $companyName = \XLite\Core\Config::getInstance()->Company->company_name;
        $shopURL = \XLite::getInstance()->getShopURL();

        return sprintf(
            '<a href="%s"><img src="%s" alt="%s" style="max-width:100%%;" width="100%%" /></a>',
            $shopURL,
            $logo,
            $companyName
        );
    }

    /**
     * Returns Company related variable value
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueCompany($name)
    {
        $value = '';

        switch ($name) {
            case 'company_name':
            case 'company_website':
            case 'company_fax':
            case 'company_phone':
                $value = \XLite\Core\Config::getInstance()->Company->{$name};
                break;

            case 'company_address':
            case 'company_country':
            case 'company_state':
            case 'company_city':
            case 'company_zipcode':
                $name = str_replace('company', 'location', $name);
                $value = \XLite\Core\Config::getInstance()->Company->{$name};
                break;

            case 'company_link':
                $companyName = \XLite\Core\Config::getInstance()->Company->company_name;
                $shopURL = \XLite::getInstance()->getShopURL();
                $value = sprintf('<a href="%s">%s</a>', $shopURL, $companyName);
                break;
        }

        return $value;
    }

    /**
     * Returns logo URI
     *
     * @param string $name Variable name
     *
     * @return string
     */
    protected function getVariableValueRecipientName($name)
    {
        $result = static::getMailer()->get('recipientName');

        return $result
            ?: (\Xlite\Core\Layout::getInstance()->getInnerInterface() === \XLite::CUSTOMER_INTERFACE
                ? static::t('na_customer')
                : static::t('na_admin'));
    }

    // }}}

    /**
     * @param string       $fromOrReply This email will be used as REPLY-TO if other $replyTo is
     *                                  not provided, also could be used as FROM depending on
     *                                  "Which email to use for the FROM field" setting
     * @param array|string $replyTo
     *
     * @return Entries
     */
    protected static function composeReplyTo($fromOrReply, $replyTo)
    {
        $data = is_array($replyTo)
            ? array_merge([$fromOrReply], $replyTo)
            : [
                $fromOrReply,
                $replyTo,
            ];

        return new Entries($data);
    }

    /**
     * @see composeReplyTo
     *
     * @param string       $fromOrReply
     * @param array|string $replyTo
     *
     * @return Entries
     */
    protected static function composeAdminReplyTo($fromOrReply, $replyTo)
    {
        return static::composeReplyTo($fromOrReply, $replyTo);
    }

    /**
     * @see composeReplyTo
     *
     * @param string       $fromOrReply
     * @param Order|null   $order
     *
     * @return Entries
     */
    protected static function composeOrderAdminReplyTo($fromOrReply, $order)
    {
        return $order
            ? static::composeAdminReplyTo(
                $fromOrReply,
                [
                    [
                        'address' => $order->getProfile()->getEmail(),
                    ]
                    + static::retrieveReplyToFromProfile($order->getProfile()),
                ]
            )
            : static::composeAdminReplyTo($fromOrReply, '');
    }

    /**
     * @param Profile $profile
     *
     * @return array
     */
    protected static function retrieveReplyToFromProfile(Profile $profile)
    {
        return [
                'address' => $profile->getLogin(),
                'name'    => $profile->getName(false),
            ];
    }

    /**
     * @see composeReplyTo
     *
     * @param string       $fromOrReply
     * @param Profile|null $profile
     *
     * @return Entries
     */
    protected static function composeProfileAdminReplyTo($fromOrReply, $profile)
    {
        if ($profile) {
            return static::composeAdminReplyTo(
                $fromOrReply,
                [static::retrieveReplyToFromProfile($profile)]
            );
        }

        return static::composeAdminReplyTo($fromOrReply, '');
    }

    /**
     * @param string $template
     * @param Order|null $order
     * @return bool
     */
    public static function composeOrderDepartmentMail($template, $order)
    {
        if (!$template) {
            return false;
        }

        try {
            $typeName = 'TYPE_' . strtoupper($template) . '_ADMIN';
            $class = new ReflectionClass(get_called_class());
            $type = $class->getConstant($typeName) ?: 'siteAdmin';
        } catch (\ReflectionException $e) {
            \XLite\Logger::getInstance()->log('Could not reflect mailer class. ' . $e->getMessage(), LOG_WARNING, $e->getTrace());
            $type = 'siteAdmin';
        }

        return static::compose(
            $type,
            static::composeOrderAdminReplyTo(
                static::getOrdersDepartmentMail(),
                $order
            ),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getOrdersDepartmentMails()),
            $template,
            array(),
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );
    }
}
