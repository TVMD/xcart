<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Module\XC\MultiVendor\Model\Repo;

/**
 * Cart repository extension
 *
 * @Decorator\Depend({"CDev\XPaymentsConnector","XC\MultiVendor"})
 */
class Cart extends \XLite\Model\Repo\Cart implements \XLite\Base\IDecorator
{
    /**
     * Alter default findOneByProfile() method to select cart only with empty vendor and non zero-auth flag
     *
     * @param \XLite\Model\Profile $profile Profile object
     *
     * @return \XLite\Model\Cart
     */
    public function findOneByProfile($profile)
    {
        return parent::findOneBy(array('profile' => $profile, 'vendor' => null, 'is_zero_auth' => false));
    }
}
