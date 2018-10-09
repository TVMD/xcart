<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MailChimp\Core;

use Includes\Utils\URLManager;

/**
 * Request
 */
abstract class Request extends \XLite\Module\XC\ThemeTweaker\Core\Request implements \XLite\Base\IDecorator
{
    const MAILCHIMP_CAMPAIGN_ID     = 'mc_cid';
    const MAILCHIMP_USER_ID         = 'mc_eid';
    const MAILCHIMP_TRACKING_CODE   = 'mc_tc';

    const MAILCHIMP_LANDING_SITE    = 'xc_mailchimp_landing_site';

    /**
     * @return string
     */
    public function getLandingSiteForMailchimp()
    {
        $data = $this->getData();
        return isset($data[static::MAILCHIMP_LANDING_SITE])
            ? $data[static::MAILCHIMP_LANDING_SITE]
            : '';
    }

    /**
     * Map request data
     *
     * @param array $data Custom data OPTIONAL
     *
     * @return void
     */
    public function mapRequest(array $data = array())
    {
        if (
            isset(\XLite\Core\Config::getInstance()->XC)
            && isset(\XLite\Core\Config::getInstance()->XC->MailChimp)
            && isset(\XLite\Core\Config::getInstance()->XC->MailChimp->analytics360enabled)
            && \XLite\Core\Config::getInstance()->XC->MailChimp->analytics360enabled
        ) {
            $this->processECommerce360Data();

            $this->tryToFillLandingSite();
        }

        parent::mapRequest($data);
    }

    protected function tryToFillLandingSite()
    {
        $data = $this->getGetData(true);

        $mcId      = $this->getCheckedParam(self::MAILCHIMP_CAMPAIGN_ID, $data);
        $utmSource  = $this->getCheckedParam('utm_source', $data);

        if ($mcId || $utmSource) {
            setcookie(
                static::MAILCHIMP_LANDING_SITE,
                URLManager::getCurrentURL(),
                \XLite\Core\Converter::getInstance()->time() + 2592000
            );
        }
    }

    /**
     * Process ECommerce360 input data
     *
     * @return void
     */
    protected function processECommerce360Data()
    {
        $data = $this->getGetData(true);

        $this->tryToMapParameter(self::MAILCHIMP_CAMPAIGN_ID, $data);
        $this->tryToMapParameter(self::MAILCHIMP_USER_ID, $data);
        $this->tryToMapParameter(self::MAILCHIMP_CAMPAIGN_ID, $data);
    }

    /**
     * @param $name
     * @param $data
     */
    protected function tryToMapParameter($name, $data)
    {
        $param = $this->getCheckedParam($name, $data);

        if ($param) {
            setcookie(
                $name,
                $param,
                \XLite\Core\Converter::getInstance()->time() + 2592000
            );
        }
    }

    /**
     * @param $name
     *
     * @return null
     */
    protected function getCheckedParam($name, $data)
    {
        return isset($data[$name]) && !empty($data[$name])
            ? $data[$name]
            : null;
    }
}
