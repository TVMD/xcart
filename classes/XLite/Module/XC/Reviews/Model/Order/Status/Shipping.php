<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Reviews\Model\Order\Status;

/**
 * Shipping status
 */
abstract class Shipping extends \XLite\Model\Order\Status\Shipping implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    public static function getStatusHandlers()
    {
        $statuses = parent::getStatusHandlers();

        foreach ($statuses as $old => $newStatuses) {
            if (static::STATUS_DELIVERED !== $old) {
                $delivered = isset($newStatuses[static::STATUS_DELIVERED]) ? $newStatuses[static::STATUS_DELIVERED] : array();
                $newStatuses[static::STATUS_DELIVERED] = array_merge($delivered, array('reviewKey'));
                $statuses[$old] = $newStatuses;
            }
        }

        return $statuses;
    }
}
