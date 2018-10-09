<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\ProductAdvisor\View\Product\Details\Customer\Page;

/**
 * APage
 */
class APage extends \XLite\View\Product\Details\Customer\Page\APage implements \XLite\Base\IDecorator
{
    /**
     * Return product labels
     *
     * @return array
     */
    protected function getLabels()
    {
        $labels = parent::getLabels();

        $labels += \XLite\Module\CDev\ProductAdvisor\Main::getProductPageLabels($this->getProduct());

        return $labels;
    }

    /**
     * @return array
     */
    protected function getComingSoonLabel()
    {
        return [\XLite\Module\CDev\ProductAdvisor\Main::PA_MODULE_PRODUCT_LABEL_SOON => static::t('Coming soon')];
    }
}