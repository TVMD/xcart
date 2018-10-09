<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Core\CommonCell;
use XLite\Core\Config;
use XLite\Core\Converter;
use XLite\Core\Database;
use XLite\Core\Translation;
use XLite\Model\Category;
use XLite\Model\Product;
use XLite\Module\QSL\CloudSearch\Main;
use XLite\Module\QSL\CloudSearch\Model\Repo\Product as ProductRepo;
use XLite\Module\QSL\CloudSearch\Model\Repo\Page as PageRepo;


/**
 * CloudSearch store-side API methods
 */
abstract class StoreApiAbstract extends \XLite\Base\Singleton
{
    /*
     * Maximum number of entities to include in API call response
     */
    const MAX_ENTITIES_AT_ONCE = 300;
    const MAX_VARIANTS_AT_ONCE = 6000;

    /*
     * Maximum thumbnail width/height
     */
    const MAX_THUMBNAIL_WIDTH = 300;
    const MAX_THUMBNAIL_HEIGHT = 300;

    protected $categoryCache = [];

    protected $priceCache = [];

    /**
     * Get API summary - entity counts and supported features
     *
     * @return array
     */
    public function getApiSummary()
    {
        /** @var ProductRepo $repo */
        $repo        = Database::getRepo('XLite\Model\Product');
        $numProducts = $repo->search($this->getProductSearchConditions(), $repo::SEARCH_MODE_COUNT);

        $catRepo       = Database::getRepo('XLite\Model\Category');
        $numCategories = $catRepo->search($this->getCategorySearchConditions(), $catRepo::SEARCH_MODE_COUNT);

        $pageRepo = Database::getRepo('\XLite\Module\CDev\SimpleCMS\Model\Page');
        $numPages = $pageRepo ? $pageRepo->search($this->getPageSearchConditions(), $pageRepo::SEARCH_MODE_COUNT) : 0;

        return [
            'numProducts'      => $numProducts,
            'numCategories'    => $numCategories,
            'numManufacturers' => $this->getBrandsCount(),
            'numPages'         => $numPages,
            'productsAtOnce'   => $this->getMaxEntitiesAtOnce(),
            'features'         => ['cloud_filters', 'customizable_category_price'],
        ];
    }

    /**
     * Get product search conditions when indexing the catalog
     *
     * @return CommonCell
     */
    protected function getProductSearchConditions()
    {
        $cnd = new CommonCell();

        if ('directLink' != Config::getInstance()->General->show_out_of_stock_products) {
            $cnd->{ProductRepo::P_INVENTORY} = false;
        }

        $cnd->{ProductRepo::P_SKIP_MEMBERSHIP_CONDITION} = true;

        return $cnd;
    }

    /**
     * Get category search conditions when indexing the catalog
     *
     * @return CommonCell
     */
    protected function getCategorySearchConditions()
    {
        return new CommonCell();
    }

    /**
     * Get page search conditions when indexing the catalog
     *
     * @return CommonCell
     */
    protected function getPageSearchConditions()
    {
        return new CommonCell([PageRepo::PARAM_ENABLED => true]);
    }

    /**
     *
     * Maximum number of entities returned in one API response
     *
     * @return int
     */
    protected function getMaxEntitiesAtOnce()
    {
        return static::MAX_ENTITIES_AT_ONCE;
    }

    /**
     * @return int
     */
    protected function getBrandsCount()
    {
        return 0;
    }

    /**
     * Get products data
     *
     * @return array
     */
    public function getBrands()
    {
        return [];
    }

    /**
     * Get products data
     *
     * @param $start
     * @param $limit
     *
     * @return array
     */
    public function getProducts($start, $limit)
    {
        $cnd = $this->getProductSearchConditions();

        $cnd->{ProductRepo::P_LIMIT} = [$start, $limit];

        /** @var ProductRepo $repo */
        $repo = Database::getRepo('XLite\Model\Product');

        $products = [];

        $variantsCount = 0;

        foreach ($repo->search($cnd, ProductRepo::SEARCH_MODE_ENTITIES) as $p) {
            $product = $this->getProduct($p);

            $variantsCount += count($product['variants']);

            $products[] = $product;

            if ($variantsCount > self::MAX_VARIANTS_AT_ONCE) {
                break;
            }
        }

        return $products;
    }

    /**
     * Get single product data
     *
     * @param Product $product
     *
     * @return array
     */
    public function getProduct(Product $product)
    {
        $skus = implode(' ', $this->getSkus($product));

        $url = $this->getItemUrl(
            Converter::buildFullURL('product', '', ['product_id' => $product->getProductId()])
        );

        $data = [
                'name'        => $product->getName(),
                'description' => $product->getDescription() ?: $product->getBriefDescription(),
                'id'          => $product->getProductId(),
                'sku'         => $skus,
                'price'       => $this->getProductPrice($product),
                'url'         => $url,
                'membership'  => $product->getMembershipIds(),
            ]
            + $this->getProductImage($product)
            + $this->getProductCategoryData($product);

        $data['modifiers'] = [];

        $filterableAttributes = $this->getFilterableProductAttributes($product);

        $data['modifiers']   = $this->getSearchableProductAttributes($product);
        $data['modifiers'][] = $this->getProductMetaInfo($product);

        $data['variants'] = $this->getProductVariants($product, $filterableAttributes);

        $data['conditions'] = $this->getProductConditions($product);

        $data += $this->getSortFields($product);

        return $data;
    }

    /**
     * Get sort fields that can be used to sort CloudSearch search results.
     * Sort fields are dynamic in the way that custom sort_int_*, sort_float_*, sort_str_* are allowed.
     *
     * @param Product $product
     *
     * @return array
     */
    protected function getSortFields(Product $product)
    {
        return [
            'sort_int_orderby'      => $product->getOrderBy(),
            'sort_int_arrival_date' => $product->getArrivalDate(),
            'sort_float_price'      => $this->getProductPrice($product),
            'sort_str_name'         => $product->getName(),
            'sort_int_sales'        => $product->getSales(),
        ];
    }

    /**
     * Get product price.
     *
     * @param Product $product
     *
     * @return float
     */
    protected function getProductPrice(Product $product)
    {
        $id = $product->getProductId();

        if (!isset($this->priceCache[$id])) {
            $quickData = $product->getQuickData();

            if (empty($quickData)) {
                $this->priceCache[$id] = $product->getDisplayPrice();
            } else {
                foreach ($quickData as $qd) {
                    if ($qd->getMembership() === null) {
                        $this->priceCache[$id] = $qd->getPrice();
                        break;
                    }
                }
            }
        }

        return $this->priceCache[$id];
    }

    /**
     * Get product SKUs (multiple if there are variants)
     *
     * @param $product
     *
     * @return array
     */
    protected function getSkus($product)
    {
        return [$product->getSku()];
    }

    /**
     * Get "conditions" that can be used to restrict the results when searching.
     *
     * This is different from "attributes" which are used to construct full-fledged filters (CloudFilters).
     *
     * @param Product $product
     * @return array
     */
    protected function getProductConditions(Product $product)
    {
        return [
            'type' => []
        ];
    }

    /**
     * Get searchable product attributes data
     *
     * @param $product
     *
     * @return array
     */
    protected function getSearchableProductAttributes(Product $product)
    {
        $attributes = [];

        $productAttributes = array_merge(
            $this->getProductAttributesOfSelectType($product),
            $this->getProductAttributesOfCheckboxType($product),
            $this->getProductAttributesOfTextareaType($product)
        );

        foreach ($productAttributes as $attr) {
            if (!isset($attributes[$attr['id']])) {
                $attributes[$attr['id']] = [
                    'name'   => htmlspecialchars_decode($attr['name']),
                    'values' => [htmlspecialchars_decode($attr['value'])],
                ];
            } else {
                $attributes[$attr['id']]['values'][] = htmlspecialchars_decode($attr['value']);
            }
        }

        return array_values($attributes);
    }

    /**
     * Get filterable product attributes data
     *
     * @param $product
     *
     * @return array
     */
    protected function getFilterableProductAttributes(Product $product)
    {
        $productClassRepo = Database::getRepo('XLite\Model\ProductClass');

        $attributes = [];

        $productAttributes = array_merge(
            $this->getProductAttributesOfSelectType($product),
            $this->getProductAttributesOfCheckboxType($product)
        );

        foreach ($productAttributes as $attr) {
            if (!isset($attributes[$attr['id']])) {
                $group = $attr['productClassId'] !== null
                    ? $productClassRepo->find($attr['productClassId'])->getName() : null;

                $attributes[$attr['id']] = [
                    'id'                => $attr['id'],
                    'name'              => htmlspecialchars_decode($attr['name']),
                    'preselectAsFilter' => $this->isPreselectAttributeAsFilter($attr),
                    'group'             => $group,
                    'values'            => [htmlspecialchars_decode($attr['value'])],
                ];
            } else {
                $attributes[$attr['id']]['values'][] = htmlspecialchars_decode($attr['value']);
            }
        }

        return array_values($attributes);
    }

    /**
     * Get "select"-type attributes with values
     *
     * @param $product
     *
     * @return mixed
     */
    protected function getProductAttributesOfSelectType(Product $product)
    {
        static $attributes = [];

        if (!isset($attributes[$product->getProductId()])) {
            $qb = Database::getEM()->createQueryBuilder()
                ->select('a.id')
                ->addSelect('IDENTITY(a.productClass) AS productClassId')
                ->from('XLite\Model\AttributeValue\AttributeValueSelect', 'av')
                ->join('av.attribute', 'a')
                ->leftJoin('av.attribute_option', 'ao')
                ->addSelect('ao.id AS optionId')
                ->where('av.product = :productId')
                ->setParameter('productId', $product->getProductId());

            $codes = Translation::getLanguageQuery();

            foreach ($codes as $code) {
                $qb
                    ->leftJoin('a.translations', "at_$code", 'WITH', "at_$code.code = :lng_$code")
                    ->leftJoin('ao.translations', "aot_$code", 'WITH', "aot_$code.code = :lng_$code")
                    ->setParameter("lng_$code", $code);
            }

            $qb->addSelect(
                $this->getIfNullChainSqlExp(
                    array_map(function ($code) {
                        return "at_{$code}.name";
                    }, $codes)
                ) . ' AS name'
            );

            $qb->addSelect(
                $this->getIfNullChainSqlExp(
                    array_map(function ($code) {
                        return "aot_{$code}.name";
                    }, $codes)
                ) . ' AS value'
            );

            $this->addProductAttributesQuerySelects($qb);

            $attributes[$product->getProductId()] = $qb
                ->getQuery()
                ->getArrayResult();
        }

        return $attributes[$product->getProductId()];
    }

    /**
     * Get "checkbox"-type attributes with values
     *
     * @param $product
     *
     * @return mixed
     */
    protected function getProductAttributesOfCheckboxType(Product $product)
    {
        static $attributes = [];

        if (!isset($attributes[$product->getProductId()])) {
            $qb = Database::getEM()->createQueryBuilder()
                ->select('a.id')
                ->addSelect('av.value')
                ->addSelect('IDENTITY(a.productClass) AS productClassId')
                ->from('XLite\Model\AttributeValue\AttributeValueCheckbox', 'av')
                ->join('av.attribute', 'a')
                ->where('av.product = :productId')
                ->setParameter('productId', $product->getProductId());

            $codes = Translation::getLanguageQuery();

            foreach ($codes as $code) {
                $qb
                    ->leftJoin('a.translations', "at_$code", 'WITH', "at_$code.code = :lng_$code")
                    ->setParameter("lng_$code", $code);
            }

            $qb->addSelect(
                $this->getIfNullChainSqlExp(
                    array_map(function ($code) {
                        return "at_{$code}.name";
                    }, $codes)
                ) . ' AS name'
            );

            $this->addProductAttributesQuerySelects($qb);

            $result = $qb
                ->getQuery()
                ->getArrayResult();

            foreach ($result as $k => $v) {
                $result[$k]['value'] = (string)static::t($v['value'] ? 'Yes' : 'No');
            }

            $attributes[$product->getProductId()] = $result;
        }

        return $attributes[$product->getProductId()];
    }

    /**
     * Get "textarea"-type attributes with values
     *
     * @param $product
     *
     * @return mixed
     */
    protected function getProductAttributesOfTextareaType(Product $product)
    {
        $qb = Database::getEM()->createQueryBuilder()
            ->select('a.id')
            ->from('XLite\Model\AttributeValue\AttributeValueText', 'av')
            ->join('av.attribute', 'a')
            ->andWhere('av.product = :productId')
            ->andWhere('av.editable = :editable')
            ->setParameter('productId', $product->getProductId())
            ->setParameter('editable', false);

        $codes = Translation::getLanguageQuery();

        foreach ($codes as $code) {
            $qb
                ->leftJoin('a.translations', "at_$code", 'WITH', "at_$code.code = :lng_$code")
                ->leftJoin('av.translations', "avt_$code", 'WITH', "avt_$code.code = :lng_$code")
                ->setParameter("lng_$code", $code);
        }

        $qb->addSelect(
            $this->getIfNullChainSqlExp(
                array_map(function ($code) {
                    return "at_{$code}.name";
                }, $codes)
            ) . ' AS name'
        );

        $qb->addSelect(
            $this->getIfNullChainSqlExp(
                array_map(function ($code) {
                    return "avt_{$code}.value";
                }, $codes)
            ) . ' AS value'
        );

        $this->addProductAttributesQuerySelects($qb);

        $result = $qb
            ->getQuery()
            ->getArrayResult();

        return $result;
    }

    /**
     * Construct an expression in the form of IFNULL(a1, IFNULL(a2, ...)) out of field names
     *
     * @param $fieldNames
     *
     * @return string
     */
    protected function getIfNullChainSqlExp($fieldNames)
    {
        $fieldName = array_shift($fieldNames);

        return empty($fieldNames)
            ? $fieldName
            : "IFNULL($fieldName, " . $this->getIfNullChainSqlExp($fieldNames) . ')';
    }

    /**
     * Override to modify QueryBuilder before querying attributes
     *
     * @param $qb
     */
    protected function addProductAttributesQuerySelects($qb)
    {
    }

    /**
     * Check if specific attribute should be preselected as a custom filter for CloudFilters
     *
     * @param $attribute
     *
     * @return bool
     */
    protected function isPreselectAttributeAsFilter($attribute)
    {
        return $attribute['productClassId'] !== null;
    }

    /**
     * Get product variants data.
     * If ProductVariants is disabled, then there will be a single product variant representing the main product.
     *
     * @param Product $product
     * @param         $attributes
     *
     * @return array
     */
    protected function getProductVariants(Product $product, $attributes)
    {
        $variant = [
            'id'         => $product->getId(),
            'price'      => $this->getProductPrice($product),
            'attributes' => $attributes,
        ];

        return [$variant];
    }

    /**
     * Get additional meta information about the product
     *
     * @param $product
     *
     * @return array
     */
    protected function getProductMetaInfo(Product $product)
    {
        $info = [
            'name'   => '_meta_additional_',
            'values' => [
                $product->getMetaTags(),
                $product->getMetaDesc(),
            ],
        ];

        // Include brief description if full description is not empty (so that both will be indexed)
        if ($product->getDescription()) {
            $info['values'][] = $product->getBriefDescription();
        }

        return $info;
    }

    /**
     * Get product category data
     *
     * @param $product
     *
     * @return array
     */
    protected function getProductCategoryData(Product $product)
    {
        $categories = [];

        $catRepo = Database::getRepo('XLite\Model\Category');

        /** @var Category $category */
        foreach ($product->getCategories() as $category) {
            $id = $category->getCategoryId();

            if (!isset($this->categoryCache[$id])) {
                $categoryPath = $catRepo->getCategoryPath($id);

                $path = [];

                /** @var Category $parent */
                foreach ($categoryPath as $parent) {
                    $path[] = [
                        'id'   => $parent->getCategoryId(),
                        'name' => htmlspecialchars_decode($parent->getName()),
                    ];
                }

                $this->categoryCache[$id] = [
                    'id'   => $id,
                    'path' => $path,
                ];
            }

            if (!empty($this->categoryCache[$id]['path'])) {
                $categories[] = $this->categoryCache[$id];
            }
        }

        return ['category' => $categories];
    }

    /**
     * Get product image
     *
     * @param $product
     *
     * @return array
     */
    protected function getProductImage(Product $product)
    {
        $result = [];

        if ($product->getImage()) {
            list(
                $result['image_width'],
                $result['image_height'],
                $result['image_src']
                ) = $product->getImage()->getResizedURL(static::MAX_THUMBNAIL_WIDTH, static::MAX_THUMBNAIL_HEIGHT);
        }

        return $result;
    }

    /**
     * Get categories data
     *
     * @param $start
     * @param $limit
     *
     * @return array
     */
    public function getCategories($start, $limit)
    {
        $repo = Database::getRepo('XLite\Model\Category');

        $cnd = $this->getCategorySearchConditions();

        $cnd->{\XLite\Model\Repo\Category::P_LIMIT} = [$start, $limit];

        $categories = $repo->search($cnd, false);

        $categoriesArray = [];

        $rootCatId = Database::getRepo('XLite\Model\Category')->getRootCategoryId();

        foreach ($categories as $category) {
            $parentId = $category->getParentId() == $rootCatId ? 0 : $category->getParentId();

            $categoryHash = [
                'id'          => $category->getCategoryId(),
                'name'        => htmlspecialchars_decode($category->getName()),
                'description' => $category->getViewDescription(),
                'parent'      => $parentId,
            ];

            if ($category->getImage()) {
                list($categoryHash['image_width'], $categoryHash['image_height'], $categoryHash['image_src']) =
                    $category->getImage()->getResizedURL(static::MAX_THUMBNAIL_WIDTH, static::MAX_THUMBNAIL_HEIGHT);
            }

            $categoryHash['url'] = $this->getItemUrl(
                Converter::buildFullURL('category', '', ['category_id' => $category->getCategoryId()])
            );

            $categoriesArray[] = $categoryHash;
        }

        return $categoriesArray;
    }

    /**
     * Get categories data
     *
     * @param $start
     * @param $limit
     *
     * @return array
     */
    public function getPages($start, $limit)
    {
        $repo = Database::getRepo('\XLite\Module\CDev\SimpleCMS\Model\Page');

        $pagesArray = [];

        if ($repo) {
            $cnd = $this->getPageSearchConditions();

            $cnd->{PageRepo::P_LIMIT}       = [$start, $limit];
            $cnd->{PageRepo::PARAM_ENABLED} = true;
            $pages                          = $repo->search($cnd, false);

            foreach ($pages as $page) {
                $url = $this->getItemUrl(
                    Converter::buildFullURL('page', '', ['id' => $page->getId()])
                );

                $pageHash = [
                    'id'      => $page->getId(),
                    'title'   => $page->getName(),
                    'content' => $page->getBody(),
                    'url'     => $url,
                ];

                $pagesArray[] = $pageHash;
            }
        }

        return $pagesArray;
    }

    /**
     * Stores new secret key sent from CloudSearch server
     *
     * @param $key
     * @param $signature
     *
     * @return array
     */
    public function setSecretKey($key, $signature)
    {
        if ($key && $signature) {
            $signature = base64_decode($signature);

            if ($this->isSignatureCorrect($key, $signature)) {
                $repo = Database::getRepo('XLite\Model\Config');

                $secretKeySetting = $repo->findOneBy([
                    'name'     => 'secret_key',
                    'category' => 'QSL\CloudSearch',
                ]);

                $secretKeySetting->setValue($key);

                Database::getEM()->flush();
            }
        }

        return [];
    }

    /**
     * Check the signature against our public key
     *
     * @param $data
     * @param $signature
     *
     * @return bool
     */
    protected function isSignatureCorrect($data, $signature)
    {
        $result = false;

        if (function_exists('openssl_get_publickey')) {
            $pubKeyId = openssl_get_publickey($this->getPublicKey());

            $result = openssl_verify($data, $signature, $pubKeyId) == 1;
        }

        return $result;
    }

    /**
     * Get public encryption key
     *
     * @return string
     */
    protected function getPublicKey()
    {
        return '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+sJv3R+kKUl0okgi7HoN6sGcM
4Lyp4LMkMYqwD0hK618lJwydI5PRMj3+vmCxVZcnoiAM/8XwGmH24y2s7D2/8/co
K55PFPn6T0V5++5oyyObofPe08kDoW6Ft2+yNcshmg1Vd711Vd37LLXWsaWpfcjr
82cfYTelfejE4IO5NQIDAQAB
-----END PUBLIC KEY-----';
    }

    /**
     * Check if current store is running in multi-domain mode
     *
     * @return bool
     */
    protected function isMultiDomain()
    {
        return Main::isMultiDomain();
    }

    /**
     * Get product/category/page url
     *
     * @param $url
     * @return string
     */
    protected function getItemUrl($url)
    {
        if ($this->isMultiDomain()) {
            // Use domain-agnostic URL for multi-domain stores
            $path = parse_url($url, PHP_URL_PATH);

            $query = parse_url($url, PHP_URL_QUERY);

            return $path . ($query ? '?' . $query : '');
        } else {
            return $url;
        }
    }
}
