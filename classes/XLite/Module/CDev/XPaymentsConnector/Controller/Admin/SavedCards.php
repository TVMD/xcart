<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
 namespace XLite\Module\CDev\XPaymentsConnector\Controller\Admin;

/**
 * Saved credit cards
 */
class SavedCards extends \XLite\Controller\Admin\AAdmin
{
    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Edit profile');
    }

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    public function checkACL()
    {
        $profile = (null !== $this->getCustomerProfile())
            ? $this->getCustomerProfile()
            : \XLite\Core\Auth::getInstance()->getProfile();
        $isAnonymous = $profile->getAnonymous();

        return (
            parent::checkACL()
            || \XLite\Core\Auth::getInstance()->isPermissionAllowed('manage users')
            )
            && !$isAnonymous;
    }

    /**
     * Get saved cards
     *
     * @return array
     */
    public function getSavedCards()
    {
        return $this->getCustomerProfile()
            ? $this->getCustomerProfile()->getSavedCards()
            : null;
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
     * Is zero-auth (card setup) allowed
     *
     * @return bool
     */
    public function allowZeroAuth()
    {
        return \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->allowZeroAuth();
    }

    /**
     * Update default credit card, card addresses and remove cards
     *
     * @return void
     */
    protected function doActionUpdate()
    {
        $profile = $this->getCustomerProfile();

        $defaultCardId = (int)\XLite\Core\Request::getInstance()->default_card_id;
        $delete = \XLite\Core\Request::getInstance()->delete;

        $addresses = \XLite\Core\Request::getInstance()->address_id;

        if ($profile) {
            // Mark card as default
            if ($profile->isCardIdValid($defaultCardId)) {
                $profile->setDefaultCardId($defaultCardId);
            }

            // Remove credit card
            // I.e deny recharges for it
            if ($delete && is_array($delete)) {
                foreach ($delete as $cardId => $v) {

                    if ($profile->isCardIdValid($cardId)) {
                        $profile->denyRecharge($cardId);
                    }

                    if ($cardId === $defaultCardId) {
                        $profileSavedCards = $profile->getSavedCards();
                        if (!empty($profileSavedCards)) {
                            $profile->setDefaultCardId($profileSavedCards[0]['card_id']);
                        } else {
                            $profile->setDefaultCardId(0);
                        }
                    }

                }
            }

            if ($addresses && is_array($addresses)) {

                // Get list of Address IDs associated with profile
                $profileAddressIds = array_keys(
                    \XLite\Module\CDev\XPaymentsConnector\Core\ZeroAuth::getInstance()->getAddressList($profile)
                );

                foreach ($addresses as $cardId => $addressId) {

                    // Validate Address ID and card ID
                    if (
                        in_array($addressId, $profileAddressIds)
                        && $profile->isCardIdValid($cardId)
                    ) {
                        $address = \XLite\Core\Database::getRepo('\XLite\Model\Address')->find($addressId);
                        $card = \XLite\Core\Database::getRepo('XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData')->find($cardId);

                        $card->setBillingAddress($address);
                    }
                }
            }

            \XLite\Core\Database::getEM()->flush();
        }
    }
}
