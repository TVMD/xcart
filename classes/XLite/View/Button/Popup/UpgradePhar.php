<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Button\Popup;


/**
 * UpgradePhar
 */
class UpgradePhar extends \XLite\View\Button\PopupButton
{
    /**
     * Return CSS classes
     *
     * @return string
     */
    protected function getClass()
    {
        return parent::getClass() . ' install-modules-button';
    }

    /**
     * @inheritdoc
     */
    protected function prepareURLParams()
    {
        return [
            'target'     => 'upgrade',
            'action'     => 'view',
            'hide_title' => true,
            'widget'     => '\XLite\View\Upgrade\Step\Prepare\PharPopup',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCSSFiles()
    {
        return array_merge(parent::getCSSFiles(), [
            'upgrade/step/prepare/buttons/parts/phar_popup.css'
        ]);
    }
}
