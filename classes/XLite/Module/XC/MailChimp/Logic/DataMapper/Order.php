<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MailChimp\Logic\DataMapper;

use XLite\Module\XC\MailChimp\Core\MailChimpECommerce;

class Order
{
    /**
     * Get order data
     *
     * @param                    $mc_cid
     * @param                    $mc_eid
     * @param \XLite\Model\Order $order
     *
     * @return array
     */
    public static function getDataByOrder($mc_cid, $mc_eid, $mc_tc, \XLite\Model\Order $order, $customerExists)
    {
        \XLite\Core\Translation::setTmpTranslationCode(
            \XLite\Core\Config::getInstance()->General->default_language
        );

        $customerData = [ 'id' => (string)$mc_eid];

        if ($order->getProfile()) {
            $customerData = !$customerExists
                ? Customer::getDataForOrder($mc_eid, $order->getProfile())
                : [ 'id' => (string)$order->getProfile()->getProfileId()];
        }

        $return = array(
            'id'                    => (string)$order->getOrderNumber(),
            'customer'              => $customerData,
            'landing_site'          => static::getLandingSite($order),
            'financial_status'      => static::mapFinancialStatus($order),
            'fulfillment_status'    => static::mapFulfillmentStatus($order),
            'currency_code'         => $order->getCurrency()->getCode(),
            'order_total'           => $order->getTotal(),
            'tax_total'             => static::getTaxValue($order),
            'shipping_total'        => $order->getSurchargeSumByType(\XLite\Model\Base\Surcharge::TYPE_SHIPPING),
            'order_date'            => $order->getDate(),
            'processed_at_foreign'  => date('c', $order->getDate()),
            'updated_at_foreign'    => date('c', $order->getLastRenewDate()),
            'lines'                 => static::getLines($order),
        );
        
        if ($mc_tc) {
            $return['tracking_code'] = (string)$mc_tc;
        }
        
        if ($mc_cid) {
            $return['campaign_id'] = $mc_cid;
        }
        
        if ($order->getProfile()) {
            if ($order->getProfile()->getShippingAddress()) {
                $return['shipping_address'] = Address::getData(
                    $order->getProfile()->getShippingAddress()
                );
            }

            if ($order->getProfile()->getBillingAddress()) {
                $return['billing_address'] = Address::getData(
                    $order->getProfile()->getBillingAddress()
                );
            }
        }

        \XLite\Core\Translation::setTmpTranslationCode(null);

        return $return;
    }

    public static function mapDataForChange(\XLite\Model\Order $order)
    {
        \XLite\Core\Translation::setTmpTranslationCode(
            \XLite\Core\Config::getInstance()->General->default_language
        );

        $return = array(
            'id'                    => (string)$order->getOrderNumber(),
            'landing_site'          => static::getLandingSite($order),
            'financial_status'      => static::mapFinancialStatus($order),
            'fulfillment_status'    => static::mapFulfillmentStatus($order),
            'currency_code'         => $order->getCurrency()->getCode(),
            'order_total'           => $order->getTotal(),
            'tax_total'             => static::getTaxValue($order),
            'shipping_total'        => $order->getSurchargeSumByType(\XLite\Model\Base\Surcharge::TYPE_SHIPPING),
            'order_date'            => $order->getDate(),
            'processed_at_foreign'  => date('c', $order->getDate()),
            'updated_at_foreign'    => date('c', $order->getLastRenewDate()),
            'lines'                 => static::getLines($order),
        );

        if ($order->getProfile()) {
            if ($order->getProfile()->getShippingAddress()) {
                $return['shipping_address'] = Address::getData(
                    $order->getProfile()->getShippingAddress()
                );
            }

            if ($order->getProfile()->getBillingAddress()) {
                $return['billing_address'] = Address::getData(
                    $order->getProfile()->getBillingAddress()
                );
            }
        }

        \XLite\Core\Translation::setTmpTranslationCode(null);

        return $return;
    }

    /**
     * Get tax value
     *
     * @param \XLite\Model\Order $order
     *
     * @return float
     */
    protected static function getTaxValue(\XLite\Model\Order $order)
    {
        $total = 0;

        /** @var \XLite\Model\Order\Surcharge $s */
        foreach ($order->getSurchargesByType(\XLite\Model\Base\Surcharge::TYPE_TAX) as $s) {
            $total += $s->getValue();
        }

        return $total;
    }

    /**
     * Get lines data
     * 
     * @param \XLite\Model\Order $order
     *
     * @return array
     */
    protected static function getLines(\XLite\Model\Order $order)
    {
        $lines = array();

        /** @var \XLite\Model\OrderItem $item */
        foreach ($order->getItems() as $item) {
            $lines[] = Line::getDataByOrderItem($item);
        }

        return $lines;
    }

    /**
     * @param \XLite\Model\Order $order
     *
     * @return string
     */
    protected static function getLandingSite(\XLite\Model\Order $order)
    {
        /** @var \XLite\Module\XC\MailChimp\Core\Request $request */
        $request = \XLite\Core\Request::getInstance();

        return $request->getLandingSiteForMailchimp()
            ?: '';
    }

    /**
     * @param \XLite\Model\Order $order
     *
     * @return string
     */
    protected static function mapFinancialStatus(\XLite\Model\Order $order)
    {
        $map = MailChimpECommerce::getInstance()->mapForOrderNotifications();

        $result = 'unknown';
        $code = $order->getPaymentStatusCode();

        if ($code && isset($map['financial'][$code])) {
            $result = $map['financial'][$code];
        }

        return $result;
    }

    /**
     * @param \XLite\Model\Order $order
     *
     * @return string
     */
    protected static function mapFulfillmentStatus(\XLite\Model\Order $order)
    {
        $map = MailChimpECommerce::getInstance()->mapForOrderNotifications();

        $result = 'unknown';
        $code = $order->getShippingStatusCode();

        if ($code && isset($map['fulfillment'][$code])) {
            $result = $map['fulfillment'][$code];
        }

        return $result;
    }
}
