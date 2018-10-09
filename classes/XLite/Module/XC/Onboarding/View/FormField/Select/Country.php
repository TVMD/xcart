<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\View\FormField\Select;


class Country extends \XLite\View\FormField\Select\Country
{
    protected function getOptionAttributes($value, $text)
    {
        $attributes = parent::getOptionAttributes($value, $text);

        /** @var \XLite\Model\Country $country */
        if (
            $value
            && $country = \XLite\Core\Database::getRepo('XLite\Model\Country')->find($value)
        ) {
            /** @var \XLite\Model\CountryTranslation $translation */
            $translation = $country->getTranslation('en', true);

            if ($translation) {
                $attributes['data-name'] = $translation->getCountry();
            } else {
                $attributes['data-name'] = $country->getCountry();
            }

            if ($country->getCurrency()) {
                $attributes['data-currency'] = $country->getCurrency()->getCurrencyId();
            }

            $attributes['data-weight-unit'] = in_array($country->getCode(), $this->getNonMetricCountries(), true) ? 'lbs' : 'kg';
        }

        return $attributes;
    }

    protected function getNonMetricCountries()
    {
        return ['US', 'GB', 'MM', 'LR', 'PW', 'FM', 'WS', 'MH'];
    }
}