<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Promo;

/**
 * Mandrill welcome header
 *
 * @ListChild (list="crud.settings.header", zone="admin", weight="100")
 */
class SMTP extends \XLite\View\AView
{
    /**
     * @inheritdoc
     */
    public static function getAllowedTargets()
    {
        return array_merge(parent::getAllowedTargets(), [
            'email_settings',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getCSSFiles()
    {
        $return = parent::getCSSFiles();

        $return[] = 'main/style.css';
        $return[] = $this->getDir() . '/header.css';

        return $return;
    }

    /**
     * @inheritdoc
     */
    protected function getDir()
    {
        return 'promotions/mandrill';
    }

    /**
     * @inheritdoc
     */
    protected function getDefaultTemplate()
    {
        return $this->getDir() . '/header.twig';
    }

    /**
     * @inheritdoc
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && (
                empty(\XLite\Core\Config::getInstance()->XC->Mandrill->mandrillAPIKey)
                || !\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\Mandrill')
            );
    }

    /**
     * @return string
     */
    protected function getSecondButtonText()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\Mandrill')
            ? 'Configure'
            : 'Install Mandrill addon';
    }

    /**
     * @return string
     */
    protected function getSecondButtonLink()
    {
        if (\XLite\Core\Database::getRepo('XLite\Model\Module')->isModuleEnabled('XC\Mandrill')) {
            return \XLite\Core\Converter::buildURL('mandrill_transactional_emails');
        } else {
            $module = \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneByModuleName('XC\Mandrill');

            return $module && $module->isInstalled()
                ? $module->getInstalledURL()
                : \XLite\Core\Database::getRepo('XLite\Model\Module')->getMarketplaceUrlByName('XC', 'Mandrill');
        }
    }

    /**
     * @return string
     */
    protected function getPromoText()
    {
        return 'Explore Mandrill as the default mailer. It\'s reliable, powerful, and ideal for sending data-driven emails, including targeted e-commerce and personalized one-to-one messages.';
    }
}