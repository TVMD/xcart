<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Moneybookers\View\Menu\Admin;

/**
 * Menu
 */
abstract class AAdmin extends \XLite\Module\CDev\Paypal\View\Menu\Admin\AAdmin implements \XLite\Base\IDecorator
{
    /**
     * Returns the list of related targets
     *
     * @param string $target Target name
     *
     * @return array
     */
    public function getRelatedTargets($target)
    {
        $targets = parent::getRelatedTargets($target);

        if ('payment_settings' == $target) {
            $targets[] = 'moneybookers_settings';
        }

        return $targets;
    }

}
