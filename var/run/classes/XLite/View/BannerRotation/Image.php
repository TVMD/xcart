<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\BannerRotation;


class Image extends \XLite\View\Image
{
    /**
     * @return array
     */
    protected function getBlurredImageDimensions()
    {
        return [
            'w' => 60,
            'h' => 20,
        ];
    }
}