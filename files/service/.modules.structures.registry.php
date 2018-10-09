# <?php if (!defined('LC_DS')) { die(); } ?>

Amazon\PayWithAmazon:
    tables: {  }
    columns: { profiles: { socialLoginProvider: 'socialLoginProvider VARCHAR(128) DEFAULT NULL', socialLoginId: 'socialLoginId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
XC\ESelectHPP:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\ProductComparison:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\CustomOrderStatuses:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\CustomProductTabs:
    tables: [custom_global_tabs, product_tab_translations, custom_global_tab_translation, product_tabs]
    columns: { global_product_tabs: { enabled: 'enabled TINYINT(1) NOT NULL', link: 'link VARCHAR(255) DEFAULT NULL' } }
    dependencies: {  }
XC\UPS:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\CustomerAttachments:
    tables: [customer_attachments_storage]
    columns: { products: { isCustomerAttachmentsAvailable: 'isCustomerAttachmentsAvailable TINYINT(1) NOT NULL', isCustomerAttachmentsRequired: 'isCustomerAttachmentsRequired TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC\NextPreviousProduct:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\Onboarding:
    tables: {  }
    columns: { categories: { demo: 'demo TINYINT(1) NOT NULL' }, orders: { demo: 'demo TINYINT(1) NOT NULL' }, products: { demo: 'demo TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC\SagePay:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\Geolocation:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\News:
    tables: [news_message_translations, news]
    columns: { clean_urls: { news_message_id: 'news_message_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
XC\OgoneEcommerce:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\ThemeTweaker:
    tables: [theme_tweaker_template]
    columns: { view_lists: { list_override: 'list_override VARCHAR(255) NOT NULL', weight_override: 'weight_override INT NOT NULL', override_mode: 'override_mode INT NOT NULL' } }
    dependencies: {  }
XC\Upselling:
    tables: [upselling_products]
    columns: {  }
    dependencies: {  }
XC\VendorMessages:
    tables: [vendor_convo_messages, vendor_convo_message_reads, conversations, conversation_members]
    columns: {  }
    dependencies: {  }
XC\NewsletterSubscriptions:
    tables: [newsletter_subscriptions_subscribers]
    columns: {  }
    dependencies: {  }
XC\NotFinishedOrders:
    tables: {  }
    columns: { orders: { not_finished_order_id: 'not_finished_order_id INT DEFAULT NULL' } }
    dependencies: {  }
XC\CrispWhiteSkin:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\Sitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\FroalaEditor:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\EPDQ:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\BulkEditing:
    tables: {  }
    columns: { products: { xcPendingBulkEdit: 'xcPendingBulkEdit TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC\ProductTags:
    tables: [tags, product_tags, tag_translations]
    columns: {  }
    dependencies: {  }
XC\FastLaneCheckout:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\IdealPayments:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\Concierge:
    tables: {  }
    columns: { profiles: { conciergeUserId: 'conciergeUserId VARCHAR(128) DEFAULT NULL' } }
    dependencies: {  }
XC\UpdateInventory:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\FreeShipping:
    tables: {  }
    columns: { shipping_methods: { free: 'free TINYINT(1) NOT NULL' }, products: { freeShip: 'freeShip TINYINT(1) NOT NULL', shipForFree: 'shipForFree TINYINT(1) NOT NULL', freightFixedFee: 'freightFixedFee NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
XC\MailChimp:
    tables: [mailchimp_lists, mailchimp_subscriptions, mailchimp_list_group_name, mailchimp_profile_interests, mailchimp_list_group, mailchimp_list_segments, segment_membership, segment_products, mailchimp_segment_subscriptions, mailchimp_store]
    columns: { orders: { mailchimpStoreId: 'mailchimpStoreId VARCHAR(255) NOT NULL' }, products: { useAsSegmentCondition: 'useAsSegmentCondition TINYINT(1) NOT NULL' } }
    dependencies: {  }
XC\ProductFilter:
    tables: [category_class_links]
    columns: { attributes: { visible: 'visible TINYINT(1) DEFAULT ''1'' NOT NULL' }, categories: { useClasses: 'useClasses CHAR(1) NOT NULL' } }
    dependencies: {  }
XC\Stripe:
    tables: {  }
    columns: {  }
    dependencies: {  }
XC\Reviews:
    tables: [order_review_keys, reviews]
    columns: {  }
    dependencies: {  }
XC\CanadaPost:
    tables: [capost_returns, capost_return_items, capost_return_links, capost_return_link_storage, order_capost_office, order_capost_parcels, order_capost_parcel_items, order_capost_parcel_shipment, order_capost_parcel_manifests, order_capost_parcel_shipments_manifests, order_capost_parcel_manifest_links, order_capost_parcel_manifest_link_storage, order_capost_parcel_shipment_tracking_options, order_capost_parcel_shipment_tracking_files, order_capost_parcel_shipment_tracking_events, order_capost_parcel_shipment_links, order_capost_parcel_shipment_link_storage, order_capost_parcel_shipment_tracking, capost_delivery_services, capost_delivery_service_options]
    columns: {  }
    dependencies: {  }
CDev\Paypal:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\Bestsellers:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\USPS:
    tables: [usps_shipment]
    columns: {  }
    dependencies: {  }
CDev\UserPermissions:
    tables: {  }
    columns: { permissions: { enabled: 'enabled TINYINT(1) NOT NULL' }, roles: { enabled: 'enabled TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev\Egoods:
    tables: [order_item_private_attachments, product_attachment_history_points]
    columns: { product_attachments: { private: 'private TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev\GoogleAnalytics:
    tables: {  }
    columns: { order_items: { categoryAdded: 'categoryAdded VARCHAR(255) DEFAULT NULL' }, profiles: { gaClientId: 'gaClientId VARCHAR(255) NOT NULL' } }
    dependencies: {  }
CDev\XPaymentsConnector:
    tables: [xpc_payment_data_cells, xpc_payment_fraud_check_data, xpc_payment_transaction_data]
    columns: { orders: { fraud_status_xpc: 'fraud_status_xpc VARCHAR(255) NOT NULL', fraud_type_xpc: 'fraud_type_xpc VARCHAR(255) NOT NULL', fraud_check_transaction_id: 'fraud_check_transaction_id INT NOT NULL', is_zero_auth: 'is_zero_auth TINYINT(1) NOT NULL' }, order_items: { xpcFakeItem: 'xpcFakeItem TINYINT(1) NOT NULL' }, profiles: { default_card_id: 'default_card_id INT UNSIGNED NOT NULL', pending_zero_auth: 'pending_zero_auth VARCHAR(255) NOT NULL', pending_zero_auth_txn_id: 'pending_zero_auth_txn_id VARCHAR(255) NOT NULL', pending_zero_auth_status: 'pending_zero_auth_status CHAR(1) NOT NULL', pending_zero_auth_interface: 'pending_zero_auth_interface VARCHAR(255) NOT NULL' } }
    dependencies: {  }
CDev\Quantum:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\XMLSitemap:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\Moneybookers:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\SimpleCMS:
    tables: [menu_translations, menus, menu_quick_flags, page_translations, page_images, pages]
    columns: { clean_urls: { page_id: 'page_id INT UNSIGNED DEFAULT NULL' } }
    dependencies: {  }
CDev\ContactUs:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\SalesTax:
    tables: [sales_taxes, sales_tax_translations, sales_tax_rates]
    columns: {  }
    dependencies: {  }
CDev\MarketPrice:
    tables: {  }
    columns: { products: { marketPrice: 'marketPrice NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev\VolumeDiscounts:
    tables: [volume_discounts]
    columns: {  }
    dependencies: {  }
CDev\TwoCheckout:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\ProductAdvisor:
    tables: [product_stats]
    columns: {  }
    dependencies: {  }
CDev\PINCodes:
    tables: [pin_codes]
    columns: { products: { pinCodesEnabled: 'pinCodesEnabled TINYINT(1) NOT NULL', autoPinCodes: 'autoPinCodes TINYINT(1) NOT NULL' } }
    dependencies: {  }
CDev\Sale:
    tables: {  }
    columns: { products: { participateSale: 'participateSale TINYINT(1) NOT NULL', discountType: 'discountType VARCHAR(32) NOT NULL', salePriceValue: 'salePriceValue NUMERIC(14, 4) NOT NULL' } }
    dependencies: {  }
CDev\FeaturedProducts:
    tables: [featured_products]
    columns: {  }
    dependencies: {  }
CDev\FedEx:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\GoSocial:
    tables: {  }
    columns: { categories: { ogMeta: 'ogMeta LONGTEXT NOT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, products: { ogMeta: 'ogMeta LONGTEXT DEFAULT NULL', useCustomOG: 'useCustomOG TINYINT(1) NOT NULL' }, pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT NOT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' } }
    dependencies: { CDev\SimpleCMS: { pages: { useCustomOG: 'useCustomOG TINYINT(1) NOT NULL', ogMeta: 'ogMeta LONGTEXT NOT NULL', showSocialButtons: 'showSocialButtons TINYINT(1) NOT NULL' } } }
CDev\AustraliaPost:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\AuthorizeNet:
    tables: {  }
    columns: {  }
    dependencies: {  }
CDev\Coupons:
    tables: [coupons, product_class_coupons, membership_coupons, coupon_categories, order_coupons]
    columns: {  }
    dependencies: {  }
CDev\FileAttachments:
    tables: [product_attachments, product_attachment_storages, product_attachment_translations]
    columns: {  }
    dependencies: {  }
QSL\FlyoutCategoriesMenu:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL\AuthorizenetAcceptjs:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL\CloudSearch:
    tables: {  }
    columns: {  }
    dependencies: {  }
QSL\BraintreeVZ:
    tables: {  }
    columns: { profiles: { braintree_customer_id: 'braintree_customer_id VARCHAR(255) NOT NULL', saveCardBoxChecked: 'saveCardBoxChecked TINYINT(1) NOT NULL' } }
    dependencies: {  }
