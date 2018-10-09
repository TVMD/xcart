<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin;

use XLite\Core\Cache\ExecuteCached;

/**
 * Left side menu widget
 *
 * @ListChild (list="admin.main.page.content.left", weight="100", zone="admin")
 */
class LeftMenu extends \XLite\View\Menu\Admin\AAdmin
{
    /**
     * @var array
     */
    protected $bottomItems;

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list   = parent::getJSFiles();
        $list[] = $this->getDir() . '/controller.js';

        return $list;
    }

    /**
     * Register JS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list   = parent::getJSFiles();
        $list[] = $this->getDir() . '/style.less';

        return $list;
    }

    /**
     * Get menu items
     *
     * @return array
     */
    protected function getItems()
    {
        if (!isset($this->items)) {
            $items = $this->defineItems();

            $this->setSelectedDecider(
                $this->createSelectedDecider('getItemsLeftMenuForDecider')
            );

            $this->items = $this->prepareItems($items);
        }

        return $this->items;
    }

    /**
     * Get menu items
     *
     * @return array
     */
    public function getItemsLeftMenuForDecider()
    {
        $cacheParams = [
            'getItemsLeftMenuForDecider',
            get_class($this)
        ];

        return ExecuteCached::executeCachedRuntime(function() {
            return $this->defineItems();
        }, $cacheParams);
    }

    /**
     * @return array
     */
    public function getBottomItems()
    {
        if ($this->bottomItems === null) {
            $items = $this->defineBottomItems();

            $this->setSelectedDecider(
                $this->createSelectedDecider('getBottomItemsForDecider')
            );

            $this->bottomItems = $this->prepareItems($items);
        }

        return $this->bottomItems;
    }

    /**
     * Get menu items
     *
     * @return array
     */
    public function getBottomItemsForDecider()
    {
        $cacheParams = [
            'getBottomItemsForDecider',
            get_class($this)
        ];

        return ExecuteCached::executeCachedRuntime(function() {
            return $this->defineBottomItems();
        }, $cacheParams);
    }

    /**
     * Initialize handler
     *
     * @return void
     */
    public function init()
    {
        \XLite\Core\Marketplace::getInstance()->getXC5Notifications();
    }

    /**
     * Bottom items
     *
     * @return array
     */
    protected function defineBottomItems()
    {
        $result = [
            'extensions'      => [
                static::ITEM_TITLE    => static::t('My addons'),
                static::ITEM_WIDGET   => 'XLite\View\Menu\Admin\LeftMenu\Extensions',
                static::ITEM_ICON_SVG => 'images/fa-puzzle-piece.svg',
                static::ITEM_WEIGHT   => 100,
                static::ITEM_TARGET   => 'addons_list_installed',
            ],
            'css_js'          => [
                static::ITEM_TITLE    => static::t('Look & Feel'),
                static::ITEM_ICON_SVG => 'images/fa-picture-o.svg',
                static::ITEM_TARGET   => 'layout',
                static::ITEM_WEIGHT   => 200,
                static::ITEM_CHILDREN => [
                    'layout'             => [
                        static::ITEM_TITLE  => static::t('Layout'),
                        static::ITEM_TARGET => 'layout',
                        static::ITEM_WEIGHT => 100,
                    ],
                    'images'             => [
                        static::ITEM_TITLE  => static::t('Images'),
                        static::ITEM_TARGET => 'images',
                        static::ITEM_WEIGHT => 600,
                    ],
                    'css_js_performance' => [
                        static::ITEM_TITLE  => static::t('Performance'),
                        static::ITEM_TARGET => 'css_js_performance',
                        static::ITEM_WEIGHT => 700,
                    ],
                ],
            ],
            'store_setup'     => [
                static::ITEM_TITLE    => static::t('Store setup'),
                static::ITEM_ICON_SVG => 'images/fa-info-circle.svg',
                static::ITEM_WEIGHT   => 300,
                static::ITEM_TARGET   => 'settings',
                static::ITEM_EXTRA    => ['page' => 'Company'],
                static::ITEM_CHILDREN => [
                    'store_info'       => [
                        static::ITEM_TITLE  => static::t('Store info'),
                        static::ITEM_TARGET => 'settings',
                        static::ITEM_EXTRA  => ['page' => 'Company'],
                        static::ITEM_WEIGHT => 100,
                    ],
                    'general'          => [
                        static::ITEM_TITLE  => static::t('Cart & checkout'),
                        static::ITEM_TARGET => 'general_settings',
                        static::ITEM_WEIGHT => 200,
                    ],
                    'payment_settings' => [
                        static::ITEM_TITLE  => static::t('Payments'),
                        static::ITEM_TARGET => 'payment_settings',
                        static::ITEM_WEIGHT => 300,
                    ],
                    'countries'        => [
                        static::ITEM_TITLE  => static::t('Countries, states and zones'),
                        static::ITEM_TARGET => 'countries',
                        static::ITEM_WEIGHT => 400,
                    ],
                    'shipping_methods' => [
                        static::ITEM_TITLE  => static::t('Shipping'),
                        static::ITEM_TARGET => 'shipping_methods',
                        static::ITEM_WEIGHT => 500,
                    ],
                    'tax_classes'      => [
                        static::ITEM_TITLE  => static::t('Taxes'),
                        static::ITEM_TARGET => 'tax_classes',
                        static::ITEM_WEIGHT => 600,
                    ],
                    'localization'     => [
                        static::ITEM_TITLE  => static::t('Localization'),
                        static::ITEM_TARGET => 'units_formats',
                        static::ITEM_WEIGHT => 700,
                    ],
                    'translations'     => [
                        static::ITEM_TITLE  => static::t('Translations'),
                        static::ITEM_TARGET => 'languages',
                        static::ITEM_WEIGHT => 800,
                    ],
                    'notifications'    => [
                        static::ITEM_TITLE  => static::t('Email notifications'),
                        static::ITEM_TARGET => 'notifications',
                        static::ITEM_WEIGHT => 900,
                    ],
                    'seo'              => [
                        static::ITEM_TITLE  => static::t('SEO settings'),
                        static::ITEM_TARGET => 'settings',
                        static::ITEM_EXTRA  => ['page' => 'CleanURL'],
                        static::ITEM_WEIGHT => 1200,
                    ],
                ],
            ],
            'system_settings' => [
                static::ITEM_TITLE    => static::t('System tools'),
                static::ITEM_ICON_SVG => 'images/fa-cog.svg',
                static::ITEM_WEIGHT   => 400,
                static::ITEM_TARGET   => 'db_backup',
                static::ITEM_CHILDREN => [
                    'environment'       => [
                        static::ITEM_TITLE  => static::t('Environment'),
                        static::ITEM_TARGET => 'settings',
                        static::ITEM_EXTRA  => ['page' => 'Environment'],
                        static::ITEM_WEIGHT => 100,
                    ],
                    'rebuild_cache'     => [
                        static::ITEM_TITLE  => static::t('Cache management'),
                        static::ITEM_TARGET => 'cache_management',
                        static::ITEM_CLASS  => 'rebuild-cache',
                        static::ITEM_WEIGHT => 200,
                    ],
                    'db_backup'         => [
                        static::ITEM_TITLE  => static::t('Database'),
                        static::ITEM_TARGET => 'db_backup',
                        static::ITEM_WEIGHT => 300,
                    ],
                    'integrity_check'   => [
                        static::ITEM_TITLE  => static::t('Integrity check'),
                        static::ITEM_TARGET => 'integrity_check',
                        static::ITEM_WEIGHT => 400,
                    ],
                    'consistency_check' => [
                        static::ITEM_TITLE  => static::t('Consistency check'),
                        static::ITEM_TARGET => 'consistency_check',
                        static::ITEM_WEIGHT => 450,
                    ],
                    'view_log_file'     => [
                        static::ITEM_TITLE      => static::t('System logs'),
                        static::ITEM_TARGET     => 'logs',
                        static::ITEM_WEIGHT     => 500,
                    ],
                    'safe_mode'         => [
                        static::ITEM_TITLE  => static::t('Safe mode'),
                        static::ITEM_TARGET => 'safe_mode',
                        static::ITEM_WEIGHT => 600,
                    ],
                    'remove_data'       => [
                        static::ITEM_TITLE  => static::t('Remove data'),
                        static::ITEM_TARGET => 'remove_data',
                        static::ITEM_WEIGHT => 700,
                    ],
                    'security_settings' => [
                        static::ITEM_TITLE  => static::t('HTTPS settings'),
                        static::ITEM_TARGET => 'https_settings',
                        static::ITEM_WEIGHT => 800,
                    ],
                ],
            ],
        ];

        return $result;
    }

    /**
     * Define items
     *
     * @return array
     */
    protected function defineItems()
    {
        $items = [
            'sales'          => [
                static::ITEM_TITLE       => static::t('Orders'),
                static::ITEM_ICON_SVG    => 'images/orders.svg',
                static::ITEM_WEIGHT      => 100,
                static::ITEM_TARGET      => 'order_list',
                static::ITEM_LABEL_LINK  => $this->buildURL('order_list', 'search', ['filter_id' => 'recent']),
                static::ITEM_LABEL_TITLE => static::t('Orders awaiting processing'),
                static::ITEM_CHILDREN    => [
                    'order_list'           => [
                        static::ITEM_TITLE      => static::t('Orders list'),
                        static::ITEM_TARGET     => 'order_list',
                        static::ITEM_PERMISSION => 'manage orders',
                        static::ITEM_WEIGHT     => 100,
                    ],
                    'orders_stats'         => [
                        static::ITEM_TITLE      => static::t('Statistics'),
                        static::ITEM_TARGET     => 'orders_stats',
                        static::ITEM_PERMISSION => 'manage orders',
                        static::ITEM_WEIGHT     => 200,
                    ],
                    'accounting'           => [
                        static::ITEM_TITLE  => static::t('Accounting'),
                        static::ITEM_TARGET => 'accounting',
                        static::ITEM_WEIGHT => 300,
                    ],
                    'payment_transactions' => [
                        static::ITEM_TITLE      => static::t('Payment transactions'),
                        static::ITEM_TARGET     => 'payment_transactions',
                        static::ITEM_PERMISSION => 'manage orders',
                        static::ITEM_WEIGHT     => 400,
                    ],
                ],
            ],
            'catalog'        => [
                static::ITEM_TITLE    => static::t('Catalog'),
                static::ITEM_ICON_SVG => 'images/fa-tags.svg',
                //static::ITEM_TARGET   => 'product_list',
                static::ITEM_WEIGHT   => 200,
                static::ITEM_CHILDREN => [
                    'product_list'    => [
                        static::ITEM_TITLE      => static::t('Products'),
                        static::ITEM_TARGET     => 'product_list',
                        static::ITEM_PERMISSION => 'manage catalog',
                        static::ITEM_WEIGHT     => 200,
                    ],
                    'categories'      => [
                        static::ITEM_TITLE      => static::t('Categories'),
                        static::ITEM_TARGET     => 'categories',
                        static::ITEM_PERMISSION => 'manage catalog',
                        static::ITEM_WEIGHT     => 300,
                    ],
                    'product_classes' => [
                        static::ITEM_TITLE      => static::t('Classes & attributes'),
                        static::ITEM_TARGET     => 'product_classes',
                        static::ITEM_PERMISSION => 'manage catalog',
                        static::ITEM_WEIGHT     => 400,
                    ],
                    'import'          => [
                        static::ITEM_TITLE      => static::t('Import'),
                        static::ITEM_TARGET     => 'import',
                        static::ITEM_PERMISSION => 'manage import',
                        static::ITEM_WEIGHT     => 500,
                    ],
                    'export'          => [
                        static::ITEM_TITLE      => static::t('Export'),
                        static::ITEM_TARGET     => 'export',
                        static::ITEM_PERMISSION => 'manage export',
                        static::ITEM_WEIGHT     => 600,
                    ],
                ],
            ],
            'promotions'     => [
                static::ITEM_TITLE    => static::t('Discounts'),
                static::ITEM_ICON_SVG => 'images/fa-gift.svg',
                static::ITEM_WEIGHT   => 300,
                static::ITEM_CHILDREN => [],
            ],
            'users'          => [
                static::ITEM_TITLE    => static::t('Users'),
                static::ITEM_ICON_SVG => 'images/fa-users.svg',
                static::ITEM_WEIGHT   => 400,
                //static::ITEM_TARGET   => 'profile_list',
                static::ITEM_CHILDREN => [
                    'profile_list' => [
                        static::ITEM_TITLE      => static::t('Users list'),
                        static::ITEM_TARGET     => 'profile_list',
                        static::ITEM_PERMISSION => 'manage users',
                        static::ITEM_WEIGHT     => 100,
                    ],
                    'memberships'  => [
                        static::ITEM_TITLE      => static::t('Membership levels'),
                        static::ITEM_TARGET     => 'memberships',
                        static::ITEM_PERMISSION => 'manage users',
                        static::ITEM_WEIGHT     => 200,
                    ],
                ],
            ],
            'content'        => [
                static::ITEM_TITLE    => static::t('Content'),
                //static::ITEM_TARGET   => 'front_page',
                static::ITEM_WEIGHT   => 500,
                static::ITEM_ICON_SVG => 'images/contacts.svg',
                static::ITEM_CHILDREN => [
                    'front_page' => [
                        static::ITEM_TITLE      => static::t('Front page'),
                        static::ITEM_TARGET     => 'front_page',
                        static::ITEM_PERMISSION => 'manage catalog',
                        static::ITEM_WEIGHT     => 100,
                    ],
                ],
            ],
            'sales_channels' => [
                static::ITEM_TITLE    => static::t('Sales channels'),
                //static::ITEM_TARGET   => 'sales_channels',
                static::ITEM_WIDGET   => 'XLite\View\Menu\Admin\LeftMenu\SalesChannels',
                static::ITEM_WEIGHT   => 600,
                static::ITEM_ICON_SVG => 'images/sales_channels.svg',
                static::ITEM_CHILDREN => [
                ],
            ],
        ];

        $items['catalog'][static::ITEM_CHILDREN]['banner_rotation'] = [
            static::ITEM_TITLE      => static::t('Banner rotation'),
            static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\LeftMenu\BannerRotation',
            static::ITEM_TARGET     => 'banner_rotation',
            static::ITEM_PERMISSION => 'manage banners',
            static::ITEM_WEIGHT     => 100,
        ];

        $items['catalog'][static::ITEM_CHILDREN]['clone_products'] = [
            static::ITEM_TITLE      => static::t('Cloned products'),
            static::ITEM_WIDGET     => 'XLite\View\Menu\Admin\LeftMenu\ClonedProducts',
            static::ITEM_TARGET     => 'cloned_products',
            static::ITEM_PERMISSION => 'manage catalog',
            static::ITEM_WEIGHT     => 220,
        ];

        $pagesStatic = \XLite\Controller\Admin\Promotions::getPagesStatic();
        if ($pagesStatic) {
            foreach ($pagesStatic as $k => $v) {
                $items['promotions'][static::ITEM_CHILDREN][$k] = [
                    static::ITEM_TITLE      => $v['name'],
                    static::ITEM_TARGET     => 'promotions',
                    static::ITEM_EXTRA      => ['page' => $k],
                    static::ITEM_PERMISSION => !empty($v['permission']) ? $v['permission'] : null,
                ];

                $items['promotions'][static::ITEM_EXTRA] = ['page' => $k];
            }
        }

        $items['sales'][static::ITEM_LABEL] = $this->getRecentOrdersCount();

        if (!$items['promotions'][static::ITEM_CHILDREN]) {
            $items['promotions'][static::ITEM_TARGET] = 'promotions';
        }

        return $items;
    }

    /**
     * Get content of the dynamic widget that renders 'product-added' css class if product was added to cart.
     *
     * @return integer
     */
    public function getRecentOrdersCount()
    {
        $widget = $this->getChildWidget('XLite\View\Menu\Admin\RecentOrdersCount');

        return (int)$widget->getContent();
    }

    /**
     * Return widget directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'left_menu';
    }

    /**
     * Get default widget
     *
     * @return string
     */
    protected function getDefaultWidget()
    {
        return 'XLite\View\Menu\Admin\LeftMenu\Node';
    }

    /**
     * Get container tag attributes
     *
     * @return array
     */
    protected function getContainerTagAttributes()
    {
        $offsetTop = 60;

        if (!\XLite::getXCNLicense()) {
            $offsetTop += 50;
        }

        $flags = \XLite\Core\Marketplace::getInstance()->checkForUpdates();
        if (is_array($flags)
            && (!empty($flags[\XLite\Core\Marketplace::FIELD_ARE_UPDATES_AVAILABLE])
                || !empty($flags[\XLite\Core\Marketplace::FIELD_IS_UPGRADE_AVAILABLE])
            )
        ) {
            $offsetTop += 25;
        }


        $attributes = [
            'id'              => 'leftMenu',
            'data-spy'        => 'affix',
            'data-offset-top' => $offsetTop,
        ];

        if (!empty($_COOKIE['XCAdminLeftMenuCompressed'])) {
            $attributes['class'] = ['compressed'];
        }

        return $attributes;
    }

    protected function isCacheAvailable()
    {
        return true;
    }

    protected function getCacheParameters()
    {
        $menuCompressed = isset($_COOKIE['XCAdminLeftMenuCompressed'])
            ? $_COOKIE['XCAdminLeftMenuCompressed']
            : false;

        return array_merge(
            parent::getCacheParameters(),
            [
                $menuCompressed,
                \XLite\Core\Auth::getInstance()->getProfile()
                    ? \XLite\Core\Auth::getInstance()->getProfile()->getProfileId()
                    : 'no_profile',
                \XLite::isFreeLicense(),
                $this->getRecentOrdersCount()
            ]
        );
    }
}
