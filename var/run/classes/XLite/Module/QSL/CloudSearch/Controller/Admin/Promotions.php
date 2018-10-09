<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Controller\Admin;

use XLite;
use XLite\Module\QSL\CloudSearch\Main;

/**
 * CloudSearch dashboard page controller (Promotion section)
 */
 class Promotions extends \XLite\Controller\Admin\PromotionsAbstract implements \XLite\Base\IDecorator
{
    /**
     * Page key
     */
    const PAGE_CLOUD_SEARCH_DASHBOARD  = 'cloud_search';
    const PAGE_CLOUD_FILTERS_DASHBOARD = 'cloud_filters';


    /**
     * Get pages static
     *
     * @return array
     */
    public static function getPagesStatic()
    {
        $version = XLite::getInstance()->getVersion();

        $list = parent::getPagesStatic();

        if (version_compare($version, '5.3.3') < 0) {
            $list[static::PAGE_CLOUD_SEARCH_DASHBOARD] = [
                'name' => static::t('CloudSearch'),
                'tpl'  => 'modules/QSL/CloudSearch/cs_page_body.twig',
            ];

            if (Main::isCloudFiltersEnabled()) {
                $list[static::PAGE_CLOUD_FILTERS_DASHBOARD] = [
                    'name' => static::t('CloudFilters'),
                    'tpl'  => 'modules/QSL/CloudSearch/cf_page_body.twig',
                ];
            }
        }

        return $list;
    }
}
