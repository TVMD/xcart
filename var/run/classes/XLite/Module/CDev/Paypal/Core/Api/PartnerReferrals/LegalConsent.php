<?php
/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\Core\Api\PartnerReferrals;

use PayPal\Common\PayPalModel;

/**
 * https://developer.paypal.com/docs/api/partner-referrals/#definition-legal_consent
 *
 * @property string type
 * @property bool   granted
 */
class LegalConsent extends PayPalModel
{
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Valid Values: ["SHARE_DATA_CONSENT"]
     *
     * @param string $type
     *
     * @return LegalConsent
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGranted()
    {
        return $this->granted;
    }

    /**
     * @param bool $granted
     *
     * @return LegalConsent
     */
    public function setGranted($granted)
    {
        $this->granted = $granted;

        return $this;
    }
}
