<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\View;

/**
 * Invoice page 
 */
 class Invoice extends \XLite\Module\QSL\BraintreeVZ\View\Invoice implements \XLite\Base\IDecorator
{
    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'modules/CDev/XPaymentsConnector/invoice/style.css';

        return $list;
    }

    /**
     * Register files from common repository
     *
     * @return array
     */
    public function getCommonFiles()
    {
        $list = parent::getCommonFiles();
        $list['css'][] = 'modules/CDev/XPaymentsConnector/cc_type_sprites.css';
        return $list;
    }

    /**
     * Display Kount result on the invoice or not
     *
     * @return bool 
     */
    protected function isDisplayKountResult()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountData($this->getOrder())
            && \XLite\Core\Mailer::getInstance()->isMailSendToAdmin();
    }

    /**
     * Get Kount data
     *
     * @return object
     */
    protected function getKountData()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountData($this->getOrder());
    }

    /**
     * Get list of Kount errors
     *
     * @return array
     */
    protected function getKountErrors()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountErrors($this->getOrder());
    }

    /**
     * Get list of Kount triggered rules
     *
     * @return array
     */
    protected function getKountRules()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountRules($this->getOrder());
    }

    /**
     * Get Kount result as text
     *
     * @return string
     */
    protected function getKountMessage()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountMessage($this->getOrder());
    }

    /**
     * Get Kount transaction ID
     *
     * @return string
     */
    protected function getKountTransactionId()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountTransactionId($this->getOrder());
    }

    /**
     * Get Kount score
     *
     * @return string
     */
    protected function getKountScore()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountScore($this->getOrder());
    }

    /**
     * Get CSS class for Kount score
     *
     * @return string
     */
    protected function getKountScoreClass()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\Kount::getInstance()->getKountScoreClass($this->getOrder());
    }

    /**
     * Get Kount error CSS style
     *
     * @return string
     */
    protected function getKountErrorStyle()
    {
        return 'padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;background-color: #f2dede; border-color: #ebccd1; color: #a94442;';
    }
}

