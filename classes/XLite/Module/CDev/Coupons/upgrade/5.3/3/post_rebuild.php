<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

return function()
{
    $couponTableName = \XLite\Core\Database::getRepo('XLite\Module\CDev\Coupons\Model\Coupon')->getTableName();
    $usedCouponTableName = \XLite\Core\Database::getRepo('XLite\Module\CDev\Coupons\Model\UsedCoupon')->getTableName();

    $query = "UPDATE {$usedCouponTableName} AS uc INNER JOIN {$couponTableName} as c ON uc.coupon_id = c.id SET uc.type = c.type";

    \XLite\Core\Database::getEM()->getConnection()->executeQuery($query);
};
