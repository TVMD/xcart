<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\Account;

/**
 * Quick menu widget
 */
class Menu extends \XLite\View\Menu\Admin\AAdmin
{
    /**
     * Return widget directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'menu/account';
    }

    /**
     * Get default widget
     *
     * @return string
     */
    protected function getDefaultWidget()
    {
        return 'XLite\View\Menu\Admin\Account\Node';
    }

    /**
     * Define menu items
     *
     * @return array
     */
    protected function defineItems()
    {
        $result = [
            'profile'      => [
                static::ITEM_TITLE         => static::t('My profile'),
                static::ITEM_TARGET        => 'profile',
                static::ITEM_WEIGHT        => 100,
                static::ITEM_PUBLIC_ACCESS => true,
            ],
            'account_info' => [
                static::ITEM_TITLE         => \XLite\Core\Auth::getInstance()->getProfile()->getLogin(),
                static::ITEM_CLASS         => 'login-text',
                static::ITEM_WEIGHT        => 200,
                static::ITEM_PUBLIC_ACCESS => true,
            ],

            'knoweledge_base' => [
                static::ITEM_TITLE      => static::t('Knowledge Base'),
                static::ITEM_LINK       => static::t('https://kb.x-cart.com/'),
                static::ITEM_CLASS      => 'knoweledge-base external',
                static::ITEM_WEIGHT     => 300,
                static::ITEM_BLANK_PAGE => true,
            ],
            'developers_docs' => [
                static::ITEM_TITLE      => static::t('Developers docs'),
                static::ITEM_LINK       => 'https://devs.x-cart.com/',
                static::ITEM_CLASS      => 'developers-docs external',
                static::ITEM_WEIGHT     => 400,
                static::ITEM_BLANK_PAGE => true,
            ],
            'suggest_idea'    => [
                static::ITEM_TITLE      => static::t('Suggest an idea'),
                static::ITEM_LINK       => 'https://ideas.x-cart.com/forums/229428-x-cart-5-ideas',
                static::ITEM_CLASS      => 'suggest-idea external',
                static::ITEM_WEIGHT     => 500,
                static::ITEM_BLANK_PAGE => true,
            ],
            'report_bug'      => [
                static::ITEM_TITLE      => static::t('Report a bug'),
                static::ITEM_LINK       => 'https://bt.x-cart.com/',
                static::ITEM_CLASS      => 'report-bug external',
                static::ITEM_WEIGHT     => 600,
                static::ITEM_BLANK_PAGE => true,
            ],
            'contact_us'      => [
                static::ITEM_TITLE      => static::t('Contact us'),
                static::ITEM_LINK       => \XLite::getXCartURL('https://www.x-cart.com/contact-us.html'),
                static::ITEM_CLASS      => 'contact-us external',
                static::ITEM_WEIGHT     => 700,
                static::ITEM_BLANK_PAGE => true,
            ],

            'logoff' => [
                static::ITEM_TITLE         => static::t('Sign out'),
                static::ITEM_CLASS         => 'logoff',
                static::ITEM_TARGET        => 'login',
                static::ITEM_EXTRA         => ['action' => 'logoff'],
                static::ITEM_WEIGHT        => 100000,
                static::ITEM_PUBLIC_ACCESS => true,
            ],
        ];

        $purchasesCount = \XLite\Core\Database::getRepo('XLite\Model\Module')->getPurchasedModulesCount();
        if ($purchasesCount) {

            $result['my_purchases'] = [
                static::ITEM_TITLE      => static::t('My purchases'),
                static::ITEM_TARGET     => 'addons_list_purchased',
                static::ITEM_LABEL      => $purchasesCount,
                static::ITEM_LABEL_LINK => $this->buildURL('addons_list_purchased'),
                static::ITEM_CLASS      => 'my-purchases',
                static::ITEM_WEIGHT     => 250,
            ];
        }

        return $result;
    }
}
