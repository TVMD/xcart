<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Cache;

/**
 * CacheKeyPartsGenerator contains the common logic that is used by different widgets to obtain cache key parts such as membership and shipping zones.
 */
class CacheKeyPartsGenerator
{
    use ExecuteCachedTrait;

    /**
     * Get logged in customer's membership that can be used as a cache key part
     *
     * @return string|null
     */
    public function getMembershipPart()
    {
        return $this->executeCachedRuntime(function () {
            $auth = \XLite\Core\Auth::getInstance();

            if (!$auth->isLogged()) {
                return null;
            }

            $profile = $auth->getProfile();

            return $profile->getMembership() ? $profile->getMembership()->getMembershipId() : null;
        });
    }

    /**
     * Get logged in customer's shipping zones string that can be used as a cache key part
     *
     * @return string|null
     */
    public function getShippingZonesPart()
    {
        return $this->executeCachedRuntime(function () {
            $auth = \XLite\Core\Auth::getInstance();

            if (!$auth->isLogged()) {
                return null;
            }

            $zones = [];

            $profile = $auth->getProfile();

            $repo = \XLite\Core\Database::getRepo('XLite\Model\Zone');
            $address = $profile->getShippingAddress()
                ? $profile->getShippingAddress()->toArray()
                : null;

            if ($address) {
                foreach ($repo->findApplicableZones($address) as $zone) {
                    $zones[] = $zone->getZoneId();
                }
            }

            return implode(',', $zones);
        });
    }
}
