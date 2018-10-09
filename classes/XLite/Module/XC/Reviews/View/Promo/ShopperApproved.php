<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Reviews\View\Promo;


class ShopperApproved extends \XLite\View\AView
{
    protected function getDefaultTemplate()
    {
        return 'modules/XC/Reviews/promo/shopper_approved/body.twig';
    }

    public function getCSSFiles()
    {
        return array_merge(parent::getCSSFiles(), [
            'modules/XC/Reviews/promo/shopper_approved/style.less'
        ]);
    }

    /**
     * Get promo image url
     *
     * @return string
     */
    public function getPromoImageUrl()
    {
        return \XLite\Core\Layout::getInstance()->getResourceWebPath(
            'modules/XC/Reviews/promo/shopper_approved/promo.jpg'
        );
    }

    /**
     * Get promo image url
     *
     * @return string
     */
    protected function getPromoLink()
    {
        return $this->getModule() && $this->getModule()->getEnabled()
            ? $this->getModule()->getSettingsForm()
            : \XLite\Core\Promo::getInstance()->getRecommendedModuleURL($this->getModuleName());
    }

    protected function getModule()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')->findOneByModuleName($this->getModuleName());
    }

    /**
     * Get module name
     *
     * @return string
     */
    protected function getModuleName()
    {
        return 'XC\ShopperApproved';
    }
}