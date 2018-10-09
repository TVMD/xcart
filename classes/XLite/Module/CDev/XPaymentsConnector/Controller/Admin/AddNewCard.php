<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
 namespace XLite\Module\CDev\XPaymentsConnector\Controller\Admin;

/**
 * Add new credit card
 */
class AddNewCard extends \XLite\Controller\Admin\AAdmin
{
    /**
     * Check - controller must work in secure zone or not
     *
     * @return boolean
     */
    public function isSecure()
    {
        return true;
    }

    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Add new credit card');
    }

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    public function checkACL()
    {
        return parent::checkACL()
            || \XLite\Core\Auth::getInstance()->isPermissionAllowed('manage users');
    }

    /**
     * Get customer profile
     *
     * @return \XLite\Model\Profile
     */
    protected function getCustomerProfile()
    {
        $profileId = \XLite\Core\Request::getInstance()->profile_id;
        if (empty($profileId)) {
            $profileId = \XLite\Core\Auth::getInstance()->getProfile()->getProfileId();
        }

        return \XLite\Core\Database::getRepo('XLite\Model\Profile')
            ->find(intval($profileId));
    }

    /**
     * Get customer profile Id
     *
     * @return integer
     */
    public function getCustomerProfileId()
    {
        return $this->getCustomerProfile()->getProfileId();
    }

    /**
     * Check if current page is accessible
     *
     * @return boolean
     */
    public function checkAccess()
    {
        return parent::checkAccess()
            && \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->getPaymentMethod()
            && $this->getCustomerProfile();
    }

    /**
     * Payment amount for zero-auth (card-setup)
     *
     * @return bool
     */
    public function getAmount()
    {
        return \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector->xpc_zero_auth_amount;
    }

    /**
     * Payment description for zero-auth (card-setup)
     *
     * @return bool
     */
    public function getDescription()
    {
        return \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector->xpc_zero_auth_description;
    }

    /**
     * Get list of addresses
     *
     * @return array 
     */
    public function getAddressList()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->getAddressList($this->getCustomerProfile());
    }

    /**
     * Get list of addresses
     *
     * @return bool
     */
    public function isSingleAddress()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->isSingleAddress($this->getCustomerProfile());
    }

    /**
     * Get string line for the single address
     *
     * @return string
     */
    public function getSingleAddress()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->getSingleAddress($this->getCustomerProfile());
    }

    /**
     * Get address ID
     *
     * return int
     */
    public function getAddressId()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->getAddressId($this->getCustomerProfile());
    }

    /**
     * Show iframe redirect form
     *
     * @return void
     */
    protected function doActionXpcIframe()
    {
        $this->setReturnURL($this->buildURL('add_new_card'));

        \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->doActionXpcIframe(
            $this->getCustomerProfile(),
            \XLite::getAdminScript()
        );

    }

    /**
     * Update address (set selected address for the current zero auth)
     *
     * return void
     */
    protected function doActionUpdateAddress()
    {
        \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->doActionUpdateAddress($this->getCustomerProfile());
    }
}
