<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\NewsletterSubscriptions\View;

use XLite\Module\XC\MailChimp\Core;

/**
 * Placeholder
 *
 * @ListChild (list="admin.center", zone="admin", weight="0")
 */
class MailChimpPlaceholder extends \XLite\View\AView
{
    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $return = parent::getCSSFiles();

        $return[] = 'main/style.css';
        $return[] = 'modules/XC/MailChimp/settings/header.css';
        $return[] = 'modules/XC/NewsletterSubscriptions/mail_chimp/header.css';

        return $return;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/NewsletterSubscriptions/mail_chimp/items_list_header.twig';
    }

    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $return = parent::getAllowedTargets();

        $return[] = 'newsletter_subscribers';

        return $return;
    }

    /**
     * Get logo url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return \XLite\Core\Layout::getInstance()->getResourceWebPath(
            'modules/XC/MailChimp/settings/images/logo.png'
        );
    }

    /**
     * Check if XC\MailChimp configured
     *
     * @return boolean
     */
    public function isMailChimpConfigured()
    {
        return $this->isMailChimpInstalled()
            && Core\MailChimp::hasAPIKey();
    }

    /**
     * Get recommended module URL
     *
     * @param string $moduleName
     *
     * @return string
     */
    protected function getAddonLink()
    {
        /** @var \XLite\Model\Module $module */
        $module = \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneBy(
            [
                'author' => 'XC',
                'name'   => 'MailChimp',
            ],
            [ 'fromMarketplace' => 'ASC' ]
        );

        $result = null;

        if ($module && !$module->getEnabled()) {
            // Module disabled or not installed
            $result = $module->getFromMarketplace()
                ? $module->getMarketplaceURL()
                : $module->getInstalledURL();
        }

        return $result;
    }

    /**
     * Check if XC\MailChimp configured
     *
     * @return boolean
     */
    public function isMailChimpInstalled()
    {
        $repo = \XLite\Core\Database::getRepo('XLite\Model\Module');

        return $repo->isModuleEnabled('XC\MailChimp');
    }

    /**
     * MailChimp external sign in url
     *
     * @return string
     */
    public function getMailChimpSignInLink()
    {
        return 'https://login.mailchimp.com/signup?source=website&pid=xcart';
    }

    /**
     * MailChimp setting url
     *
     * @return string
     */
    public function getMailChimpSettingsLink()
    {
        return \XLite\Module\XC\MailChimp\Main::getSettingsForm();
    }

    /**
     * Check if there is subscribers already in database
     *
     * @return boolean
     */
    public function isItemsListEmpty()
    {
        return !\XLite\Core\Database::getRepo('XLite\Module\XC\NewsletterSubscriptions\Model\Subscriber')
            ->count();
    }

    /**
     * Export subscribers link with preselected options
     *
     * @return string
     */
    public function getExportSubscribersLink()
    {
        $subscribersStepName = 'XLite\Module\XC\NewsletterSubscriptions\Logic\Export\Step\NewsletterSubscribers';
        return $this->buildURL(
            'export',
            '',
            array(
                \XLite\View\Export\Begin::PARAM_PRESELECT => $subscribersStepName
            )
        );
    }
}
