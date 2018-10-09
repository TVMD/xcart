<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Reviews\Core;

/**
 * Mailer
 */
abstract class Mailer extends \XLite\Module\XC\ThemeTweaker\Core\Mailer implements \XLite\Base\IDecorator
{
    const TYPE_ORDER_REVIEW_KEY = 'ordersDep';

    const NEW_REVIEW_NOTIFICATION = 'modules/XC/Reviews/new_review';
    const NEW_REVIEW_KEY_NOTIFICATION = 'modules/XC/Reviews/review_key';

    /**
     * Send new review message
     *
     * @param \XLite\Module\XC\Reviews\Model\Review $review Review
     *
     * @return string
     */
    public static function sendNewReview(\XLite\Module\XC\Reviews\Model\Review $review)
    {
        static::register('review', $review);

        $from = $review->getEmail() ?: '';

        if ($from && $review->getReviewerName()) {
            $from = [[
                'address' => $from,
                'name'    => $review->getReviewerName(),
            ]];
        }

        static::compose(
            'siteAdmin',
            static::composeAdminReplyTo(
                static::getOrdersDepartmentMail(),
                $from
            ),
            implode(\XLite\View\Mailer::MAIL_SEPARATOR, static::getSiteAdministratorMails()),
            static::NEW_REVIEW_NOTIFICATION,
            [],
            true,
            \XLite::ADMIN_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::ADMIN_INTERFACE)
        );


        return static::getMailer()->getLastError();
    }

    /**
     * Send order review key (follow up notification) to customer
     *
     * @param \XLite\Module\XC\Reviews\Model\OrderReviewKey $reviewKey Review key object
     *
     * @return string
     */
    public static function sendOrderReviewKey($reviewKey, $products)
    {
        $order = $reviewKey->getOrder();
        $profile = $order->getProfile();

        static::register('products', $products);
        static::register('recipientName', $profile->getName());
        static::register('companyName', \XLite\Core\Config::getInstance()->Company->company_name);
        static::register('orderNumber', $order->getOrderNumber());
        static::register('orderDate', $order->getDate());

        if (1 === count($products)) {
            static::register('subject', static::t('Please review purchased product {{product}}', ['product' => $products[0]['name']]));
        }

        static::compose(
            static::TYPE_ORDER_REVIEW_KEY,
            static::getOrdersDepartmentMail(),
            $profile->getLogin(),
            static::NEW_REVIEW_KEY_NOTIFICATION,
            array(),
            true,
            \XLite::CUSTOMER_INTERFACE,
            static::getMailer()->getLanguageCode(\XLite::CUSTOMER_INTERFACE, $profile->getLanguage())
        );

        return static::getMailer()->getLastError();
    }
}
