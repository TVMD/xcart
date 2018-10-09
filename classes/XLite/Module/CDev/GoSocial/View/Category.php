<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoSocial\View;

/**
 * Category page
 */
abstract class Category extends \XLite\View\Category implements \XLite\Base\IDecorator
{
    /**
     * Register Meta tags
     *
     * @return array
     */
    public function getMetaTags()
    {
        $list = parent::getMetaTags();

        $list[] = $this->getCategory()->getOpenGraphMetaTags();

        if (\XLite\Core\Config::getInstance()->CDev->GoSocial->gplus_use
            && \XLite\Core\Config::getInstance()->CDev->GoSocial->gplus_page_id
        ) {
            $list[] = sprintf(
                '<link href="https://plus.google.com/%s" rel="publisher" />',
                \XLite\Core\Config::getInstance()->CDev->GoSocial->gplus_page_id
            );
        }

        return $list;
    }
}
