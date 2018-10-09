<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MailChimp\Core;

use XLite\Module\XC\MailChimp\Logic\DataMapper\Order;
use XLite\Module\XC\MailChimp\Logic\DataMapper\Product;
use XLite\Module\XC\MailChimp\Model;

require_once LC_DIR_MODULES . 'XC' . LC_DS . 'MailChimp' . LC_DS . 'lib' . LC_DS . 'MailChimp.php';

/**
 * MailChimp core class
 */
class MailChimpECommerce extends \XLite\Base\Singleton
{
    const MC_FIRST_NAME = 'FNAME';
    const MC_LAST_NAME  = 'LNAME';

    protected $isStoreExists = [];
    
    /**
     * MailChimp API class
     *
     * @var \DrewM\MailChimp\MailChimp
     */
    protected $mailChimpAPI = null;

    /**
     * Check if module has API key populated
     *
     * @return boolean
     */
    public static function hasAPIKey()
    {
        return \XLite\Core\Config::getInstance()->XC->MailChimp->mailChimpAPIKey;
    }

    /**
     * Get campaign info
     * 
     * @param string $id Campaign id
     * @return array|false
     */
    public function getCampaign($id)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting campaigns');
        return $this->mailChimpAPI->get("campaigns/{$id}");
    }

    /**
     * Get stores info
     *
     * @return array|false
     */
    public function getStores()
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting stores');
        $result = $this->mailChimpAPI->get("ecommerce/stores");

        return $this->mailChimpAPI->success()
            ? $result['stores']
            : null;
    }

    /**
     * Get store info
     *
     * @param string $id Store id
     * @return array|false
     */
    public function getStore($id)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting store');
        $result = $this->mailChimpAPI->get("ecommerce/stores/{$id}");

        $result = $this->mailChimpAPI->success()
            ? $result
            : null;

        $this->isStoreExists[$id] = !!$result;

        return $result;
    }

    /**
     * Get store info
     *
     * @param string $id Store id
     * @return array|false
     */
    public function isStoreExists($id)
    {
        if (isset($this->isStoreExists[$id])) {
            return $this->isStoreExists[$id];
        }

        $this->mailChimpAPI->setActionMessageToLog('Getting store');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$id}",
            [
                'fields' => 'id',
            ]
        );

        $result = $this->mailChimpAPI->success()
            ? $result
            : null;
        
        $this->isStoreExists[$id] = !!$result;
        
        return $result;
    }

    /**
     * @param $string   $storeId
     *
     * @return array|bool|false
     */
    public function getOrdersIds($storeId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting orders ids');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/orders",
            [
                'fields' => 'orders.id',
                'count'     => PHP_INT_MAX  // Mailchimp, why?
            ]
        );

        return $this->mailChimpAPI->success()
            ? $result['orders']
            : null;
    }

    /**
     * See http://developer.mailchimp.com/documentation/mailchimp/guides/getting-started-with-ecommerce/#order-status-notifications
     *
     * @return array
     */
    public function mapForOrderNotifications()
    {
        return [
            'financial' => [
                \XLite\Model\Order\Status\Payment::STATUS_PAID          => 'paid',
                \XLite\Model\Order\Status\Payment::STATUS_PART_PAID     => 'paid',
                \XLite\Model\Order\Status\Payment::STATUS_AUTHORIZED    => 'pending',
                \XLite\Model\Order\Status\Payment::STATUS_QUEUED        => 'pending',
                \XLite\Model\Order\Status\Payment::STATUS_REFUNDED      => 'refunded',
                \XLite\Model\Order\Status\Payment::STATUS_CANCELED      => 'cancelled',
                \XLite\Model\Order\Status\Payment::STATUS_DECLINED      => 'cancelled',
            ],
            'fulfillment'   => [
                \XLite\Model\Order\Status\Shipping::STATUS_SHIPPED      => 'shipped',
            ],
        ];
    }

    /**
     * @param $string   $storeId
     *
     * @return array|bool|false
     */
    public function getProductsIds($storeId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting products ids');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/products",
            [
                'fields'    => 'products.id',
                'count'     => PHP_INT_MAX  // Mailchimp, why?
            ]
        );

        return $this->mailChimpAPI->success()
            ? $result['products']
            : null;
    }

    /**
     * Create new store
     *
     * @param      $dataRaw
     * @param null $listId
     *
     * @return array|false
     */
    public function createStore($dataRaw, $listId = null)
    {
        if (!$listId) {
            $campaignInfo = $this->getCampaign($dataRaw['campaign_id']);

            if(!$campaignInfo
                || !isset($campaignInfo['recipients'])
                || !$campaignInfo['recipients']
            ) {
                return false;
            }

            $list = isset($campaignInfo['recipients']['list_id'])
                ? $campaignInfo['recipients']
                : $campaignInfo['recipients'][0];
            $listId = $list['list_id'];
        }

        $data = array_merge(
            $this->getCommonStoreData(),
            [
                'id'            => $dataRaw['store_id'],
                'name'          => $dataRaw['store_name'],
                'list_id'       => $listId,
                'currency_code' => $dataRaw['currency_code'],
                'money_format'  => $dataRaw['money_format'],
            ]
        );

        $this->mailChimpAPI->setActionMessageToLog('Creating store');
        $result = $this->mailChimpAPI->post("ecommerce/stores", $data);

        if ($this->mailChimpAPI->success()
            && !\XLite\Core\Database::getRepo('XLite\Module\XC\MailChimp\Model\Store')->find($dataRaw['store_id']) 
        ) {
            $this->createStoreReference(
                $listId,
                $dataRaw['store_id'],
                $dataRaw['store_name'],
                isset($dataRaw['is_main']) ? $dataRaw['is_main'] : false
            );
        }

        $this->isStoreExists[$dataRaw['store_id']] = $this->mailChimpAPI->success();
        
        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    public function removeAllStores_DEBUG()
    {
        $stores = $this->mailChimpAPI->get("ecommerce/stores");

        foreach ($stores['stores'] as $storeData) {
            $this->mailChimpAPI->delete("ecommerce/stores/" . $storeData['id']);
        }
    }

    /**
     * @param $storeId
     *
     * @param $statusFlag
     *
     * @return array|false|null
     */
    public function changeStoreSyncingStatus($storeId, $statusFlag)
    {
        $data = [ 'is_syncing' => $statusFlag ];

        return $this->updateStoreData($storeId, $data);
    }

    /**
     * @param $listId
     * @param $selected
     */
    public function updateStoreAndReference($listId, $selected)
    {
        $storeId = MailChimp::getInstance()->getStoreId($listId);

        if (!$storeId) {
            return;
        }

        $storeName = MailChimp::getInstance()->getStoreName($listId);

        if ($selected) {
            if (!$this->getStore($storeId)) {
                $this->createStore(
                    [
                        'campaign_id'   => '',
                        'store_id'      => $storeId,
                        'store_name'    => $storeName,
                        'currency_code' => \XLite::getInstance()->getCurrency()->getCode(),
                        'money_format'  => \XLite::getInstance()->getCurrency()->getPrefix()
                            ?: \XLite::getInstance()->getCurrency()->getSuffix(),
                        'is_main'       => $selected
                    ],
                    $listId
                );
            } else {
                $this->updateStoreData($storeId);
            }
        }

        /** @var \XLite\Module\XC\MailChimp\Model\Store $existingStore */
        $existingStore = \XLite\Core\Database::getRepo('XLite\Module\XC\MailChimp\Model\Store')->find($storeId);

        if ($existingStore) {
            $existingStore->setMain($selected);
            $existingStore->setName($storeName);
        } else {
            $this->createStoreReference(
                $listId,
                $storeId,
                $storeName,
                $selected
            );
        }
    }

    /**
     * @param      $storeId
     * @param null $data
     *
     * @return array|false|null
     */
    public function updateStoreData($storeId, $data = null)
    {
        if (!$data) {
            $data = $this->getCommonStoreData();
        }

        $this->mailChimpAPI->setActionMessageToLog('Changing store data');

        $result = $this->mailChimpAPI->patch("ecommerce/stores/{$storeId}", $data);

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }


    public function getCommonStoreData()
    {
        $timezone = '';

        try {
            $timezoneObj = \XLite\Core\Converter::getTimeZone();

            if ($timezoneObj) {
                $timezone = $timezoneObj->getName();
            }
        } catch (\Exception $e) {}

        return [
            'name'          => \XLite\Core\Config::getInstance()->Company->company_name,
            'platform'      => 'X-Cart',
            'domain'        => \XLite\Core\URLManager::getShopURL(),
            'email_address' => \XLite\Core\Mailer::getUsersDepartmentMail(),
            'primary_locale'    => \XLite\Core\Config::getInstance()->General->default_language,
            'timezone'      => $timezone,
            'phone'         => \XLite\Core\Config::getInstance()->Company->company_phone,
            'address'       => $this->mapStoreAddress(),
        ];
    }

    public function mapStoreAddress()
    {
        $data = [
            "address1"      => \XLite\Core\Config::getInstance()->Company->location_address,
            "address2"      => '',
            "city"          => \XLite\Core\Config::getInstance()->Company->location_city,
            "postal_code"   => \XLite\Core\Config::getInstance()->Company->location_zipcode,
        ];

        $country = \XLite\Core\Config::getInstance()->Company->locationCountry;
        if ($country && $country instanceof \XLite\Model\Country) {
            $data["country"]        = $country->getCountry();
            $data["country_code"]   = $country->getCode3();
        }

        $state = \XLite\Core\Config::getInstance()->Company->locationState;
        if ($state && $state instanceof \XLite\Model\State) {
            $data["province"]       = $state->getState();
            $data["province_code"]  = $state->getCode();
        }

        return array_filter($data);
    }

    public function createStoreReference($listId, $storeId, $storeName, $isMain = false)
    {
        $repo = \XLite\Core\Database::getRepo('\XLite\Module\XC\MailChimp\Model\Store');
        $duplicateByList = $repo->findByList($listId);
        if ($duplicateByList) {
            $repo->deleteInBatch($duplicateByList);
        }

        $list = \XLite\Core\Database::getEM()->getReference(
            'XLite\Module\XC\MailChimp\Model\MailChimpList',
            $listId
        );
        $store = new Model\Store();
        $store->setId($storeId);
        $store->setName($storeName);
        $store->setList($list);
        $store->setMain($isMain);

        $store->create();
    }
    
    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function getProduct($storeId, $productId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting product');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/products/{$productId}"
        );
        
        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function removeProduct($storeId, $productId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Removing product');
        $result = $this->mailChimpAPI->delete(
            "ecommerce/stores/{$storeId}/products/{$productId}"
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param $string   $storeId
     * @param string    $cartId
     *
     * @return array|bool|false
     */
    public function getCart($storeId, $cartId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting cart');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/carts/{$cartId}"
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param string    $storeId
     * @param string    $cartId
     *
     * @return array|bool|false
     */
    public function removeCart($storeId, $cartId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Removing cart');
        $result = $this->mailChimpAPI->delete(
            "ecommerce/stores/{$storeId}/carts/{$cartId}"
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param           $storeId
     * @param integer   $productId
     *
     * @return array|bool|false
     */
    public function isProductExists($storeId, $productId)
    {
        $this->mailChimpAPI->setActionMessageToLog('Getting product');
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/products/{$productId}",
            [
                'fields' => 'id'
            ]
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function createProduct($storeId, \XLite\Model\Product $product)
    {
        $this->mailChimpAPI->setActionMessageToLog('Creating products');
        return $this->mailChimpAPI->post(
            "ecommerce/stores/{$storeId}/products",
            Product::getDataByProduct($product)
        );
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function createProductFast($storeId, \XLite\Model\Product $product)
    {
        $this->mailChimpAPI->setActionMessageToLog('Creating products');
        return $this->mailChimpAPI->post(
            "ecommerce/stores/{$storeId}/products?" . http_build_query(
                [ 'fields' => 'id' ]
            ),
            Product::getDataByProduct($product)
        );
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function updateProduct($storeId, \XLite\Model\Product $product)
    {
        $this->mailChimpAPI->setActionMessageToLog('Updating products');
        $result = $this->mailChimpAPI->patch(
            "ecommerce/stores/{$storeId}/products/{$product->getProductId()}",
            Product::getDataByProduct($product)
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Order[] $products
     *
     * @return array|bool
     */
    public function createOrdersBatch($storeId, array $orders)
    {
        $ordersData = [];

        /** @var \XLite\Model\Order $order */
        foreach ($orders as $order) {
            $order = \XLite\Core\Database::getEM()->merge($order);
            $ordersData[$order->getOrderId()] = Order::getDataByOrder(
                null,
                null,
                null,
                $order,
                $this->isCustomerExists(
                    $storeId,
                    $order->getProfile()
                        ? $order->getProfile()->getProfileId()
                        : \XLite\Core\Request::getInstance()->{Request::MAILCHIMP_USER_ID}
                )
            );
        }

        if (!$ordersData) {
            return false;
        }

        return $this->createOrdersBatchFromMappedData($storeId, $ordersData);
    }

    /**
     * @param           $storeId
     * @param array     $ordersData
     *
     * @return array|bool
     */
    public function createOrdersBatchFromMappedData($storeId, array $ordersData)
    {
        $operations = [];

        foreach ($ordersData as $orderId => $orderData) {
            $operations[] = [
                "method"    => "post",
                "path"      => "ecommerce/stores/{$storeId}/orders",
                "body"      => json_encode($orderData)
            ];
        }

        if (!$operations) {
            return false;
        }

        $this->mailChimpAPI->setActionMessageToLog('Creating orders batch');
        return $this->mailChimpAPI->post(
            "batches",
            [
                'operations' => $operations,
                'fields' => 'id'
            ]
        );
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product[] $products
     *
     * @return array|bool|false
     */
    public function createProductsBatch($storeId, array $products)
    {
        $operations = [];
        
        foreach ($products as $product) {
            $product = \XLite\Core\Database::getEM()->merge($product);
            $operations[] = [
                "method"    => "post",
                "path"      => "ecommerce/stores/{$storeId}/products",
                "body"      => json_encode(Product::getDataByProduct($product)) 
            ];
        }
        
        if (!$operations) {
            return false;
        }

        $this->mailChimpAPI->setActionMessageToLog('Creating products batch');
        return $this->mailChimpAPI->post(
            "batches",
            [ 'operations' => $operations ]
        );
    }

    /**
     * @param                      $storeId
     * @param \XLite\Model\Product $product
     *
     * @return array|bool|false
     */
    public function isCustomerExists($storeId, $customerId)
    {
        $result = $this->mailChimpAPI->get(
            "ecommerce/stores/{$storeId}/customers/{$customerId}",
            [
                'fields' => 'id'
            ]
        );

        return $this->mailChimpAPI->success()
            ? $result
            : null;
    }

    /**
     * Protected constructor.
     * It's not possible to instantiate a derived class (using the "new" operator)
     * until that child class is not implemented public constructor
     *
     * @return void
     *
     * @throws MailChimpException
     */
    protected function __construct()
    {
        parent::__construct();

        try {
            $this->mailChimpAPI = new \XLite\Module\XC\MailChimp\Core\MailChimpLoggableAPI(
                \XLite\Core\Config::getInstance()->XC->MailChimp->mailChimpAPIKey
            );

        } catch (\Exception $e) {
            if (
                MailChimpException::MAILCHIMP_NO_API_KEY_ERROR == $e->getMessage()
                && \XLite::isAdminZone()
            ) {
                \XLite\Core\TopMessage::addError($e->getMessage());

                \XLite\Core\Operator::redirect(
                    \XLite\Core\Converter::buildURL('mailchimp_options')
                );
            }

            throw new MailChimpException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
