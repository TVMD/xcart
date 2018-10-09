<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Reviews\Module\XC\CustomProductTabs\View\ItemsList\Model;


use XLite\Core\Database;
use XLite\Model\Product\GlobalTab;

/**
 * GlobalTabs
 *
 * @Decorator\Depend("XC\CustomProductTabs")
 */
class GlobalTabs extends \XLite\Module\XC\CustomProductTabs\View\ItemsList\Model\GlobalTabs implements \XLite\Base\IDecorator
{
    protected function getTabHelpText(GlobalTab $model)
    {
        if ($model->getServiceName() === 'Reviews') {
            $url = Database::getRepo('XLite\Model\Module')
                ->findOneByModuleName('XC\Reviews')
                ->getInstalledURL();
            return static::t(
                'Tab displaying product reviews. Added by the addon Product Reviews',
                [
                    'url' => $url,
                ]
            );
        }

        return parent::getTabHelpText($model);
    }
}