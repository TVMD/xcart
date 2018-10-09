<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Model;

/**
 * XPayments extensions to Order entity
 *
 * @MappedSuperclass
 *
 * @Table (indexes={
 *      @Index (name="is_zero_auth", columns={"is_zero_auth"}),
 *  })
 *
 */
class Order extends \XLite\Model\Order implements \XLite\Base\IDecorator
{
    /** 
     * Fraud statuses
     */
    const FRAUD_STATUS_CLEAN    = 'Clean';
    const FRAUD_STATUS_FRAUD    = 'Fraud';
    const FRAUD_STATUS_REVIEW   = 'Review';
    const FRAUD_STATUS_ERROR    = 'Error';
    const FRAUD_STATUS_UNKNOWN  = '';

    /**
     * Order fraud status
     *
     * @var string
     *
     * @Column (type="string")
     */
    protected $fraud_status_xpc = '';

    /**
     * Order fraud type (which system considered the transaction fraudulent)
     *
     * @var string
     *
     * @Column (type="string")
     */
    protected $fraud_type_xpc = '';

    /**
     * Transaction with fraud check data
     * 
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $fraud_check_transaction_id = 0;

    /**
     * Flag to mark carts created temporarily for zero-dollar auth feature
     *
     * @var boolean
     *
     * @Column (type="boolean")
     */
    protected $is_zero_auth = false;

    /**
     * Fraud check data from transaction
     */
    protected $fraudCheckData = false;

    /**
     * Get visible payment methods
     *
     * @return array
     */
    public function getCCData()
    {
        $result = array();

        foreach ($this->getPaymentTransactions() as $transaction) {

            if ($transaction->getCard()) {
                $result[] = $transaction->getCard();
            }

        }

        return $result;
    }

    /**
     * Get items for card setup there should be only one item
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        $items = parent::getItems();

        foreach ($items as $key => $item) {
            if ($item->isXpcFakeItem()) {
                $items->clear();
                $items[] = $item;
                break;
            }
        }

        return $items;
    }

    /**
     * Get total
     *
     * @return decimal
     */
    public function getTotal()
    {
        if (
            $this->getItems()
            && $this->getItems()->last()
            && $this->getItems()->last()->isXpcFakeItem()
        ) {
            $total = $this->getItems()->last()->getPrice();
        } else {
            $total = parent::getTotal();
        }
        
        return $total;
    }

    /**
     * Get transaction xpc_ values for the entire order. What was actually authorized, captured, voided, and refunded.
     *
     * @return array
     */
    protected function getXpcTransactionSums()
    {
        $orderAuthorized = 0;
        $orderCaptured = 0;
        $orderVoided = 0;
        $orderRefunded = 0;

        $xpcFound = false;

        $transactions = $this->getPaymentTransactions();

        foreach ($transactions as $t) {

            if ($t->isXpc(true)) {

                $xpcFound = true;

                $xpcValues = $t->getXpcValues(); 

                $orderAuthorized += $xpcValues['authorized'];
                $orderCaptured   += max($xpcValues['captured'], $xpcValues['charged']);
                $orderVoided     += $xpcValues['voided'];
                $orderRefunded   += $xpcValues['refunded'];
            }
        }

        return array($orderAuthorized, $orderCaptured, $orderVoided, $orderRefunded, $xpcFound);
    }
    
    /**
     * Checks if at least one transaction is handled by X-Payments
     *
     * @return boolean
     */
    protected function isXpc()
    {
        $transactions = $this->getPaymentTransactions();

        $isXpc = false;
        foreach ($transactions as $t) {
            if ($t->isXpc(true)) {
                $isXpc = true;
                break;
            }
        }

        return $isXpc;
    }

    /**
     * Get calculated payment status
     *
     * @param boolean $override Override calculation cache OPTIONAL
     *
     * @return string
     */
    public function getCalculatedPaymentStatus($override = false)
    {
        if ($this->isXpc()) {
            return $this->getXpcPaymentStatus();
        } else {
            return parent::getCalculatedPaymentStatus($override);
        }
    }

    /**
     * Get calculated payment status by transaction
     *
     * @param \XLite\Model\Payment\Transaction $transaction Transaction which changes status
     *
     * @return string
     */
    public function getXpcPaymentStatus(\XLite\Model\Payment\Transaction $transaction = null)
    {
        $config = \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector;

        $total = $this->getCurrency()->roundValue($this->getTotal());

        list($authorized, $captured, $voided, $refunded) = $this->getXpcTransactionSums();

        if (
            !is_null($transaction)
            && $transaction->getXpcDataCell('xpc_is_fraud_status')
            && 1 == $transaction->getXpcDataCell('xpc_is_fraud_status')->getValue()
            && self::ORDER_ZERO >= $authorized
            && self::ORDER_ZERO >= $captured
            && self::ORDER_ZERO >= $voided
            && self::ORDER_ZERO >= $refunded
            && $transaction->getValue() > self::ORDER_ZERO
        ) {

            $status = \XLite\Model\Order\Status\Payment::STATUS_DECLINED;

        } elseif ($refunded > 0) {

            if ($refunded >= $captured) {
                $status = \XLite\Model\Order\Status\Payment::STATUS_REFUNDED;
            } elseif ($captured < $total) {
                $status = \XLite\Model\Order\Status\Payment::STATUS_PART_PAID;
            } else {
                $status = \XLite\Model\Order\Status\Payment::STATUS_PAID;
            }

        } elseif ($voided > 0) {

            $status = \XLite\Model\Order\Status\Payment::STATUS_DECLINED;

        } elseif ($captured > 0) {

            if ($captured >= $authorized) {
                $status = \XLite\Model\Order\Status\Payment::STATUS_PAID;
            } else {
                $status = \XLite\Model\Order\Status\Payment::STATUS_PART_PAID;
            }

        } elseif (
            $authorized > 0
            || (
                $authorized <= self::ORDER_ZERO
                && $total <= self::ORDER_ZERO
            )
        ) {

            $status = \XLite\Model\Order\Status\Payment::STATUS_AUTHORIZED;

        } elseif (
            !is_null($transaction)
            && (
                $transaction->getStatus() == \XLite\Model\Payment\Transaction::STATUS_FAILED
                || $transaction->getStatus() == \XLite\Model\Payment\Transaction::STATUS_CANCELED
            )
        ) {
            // Payment was failed (after allowed amount of attempts) or canceled by customer
            $status = \XLite\Model\Order\Status\Payment::STATUS_CANCELED;

        } else {
            $status = \XLite\Model\Order\Status\Payment::STATUS_QUEUED;
        } 

        return $status;
    }

    /**
     * Set order status by transaction
     *
     * @param \XLite\Model\Payment\transaction $transaction Transaction which changes status
     *
     * @return void
     */
    public function setPaymentStatusByTransaction(\XLite\Model\Payment\Transaction $transaction)
    {
        if ($transaction->isXpc(true)) {

            $this->setPaymentStatus($this->getXpcPaymentStatus($transaction));

        } else {
            parent::setPaymentStatusByTransaction($transaction);
        }

    }

    /**
     * Get array of raw payment transaction sums
     *
     * @param boolean $override Override cache OPTIONAL
     *
     * @return array
     */
    public function getRawPaymentTransactionSums($override = false)
    {
        if (null === $this->paymentTransactionSums || $override) {

            if (!$this->isXpc()) {

                $this->paymentTransactionSums = parent::getRawPaymentTransactionSums($override);

            } else {

                $this->paymentTransactionSums = array(
                    'authorized' => 0,
                    'captured'   => 0,
                    'refunded'   => 0,
                    'sale'       => 0,
                    'blocked'    => 0,
                );

                $transactions = $this->getPaymentTransactions();

                $voided = 0;

                foreach ($transactions as $t) {
                    if ($t->isXpc(true)) {
                        $xpcValues = $t->getXpcValues();

                        $this->paymentTransactionSums['captured']   +=
                            max($xpcValues['captured'] - $xpcValues['refunded'], 0);
                        $this->paymentTransactionSums['authorized'] +=
                            max($xpcValues['authorized'] - $xpcValues['voided'] - $xpcValues['captured'], 0);
                        $this->paymentTransactionSums['sale']       +=
                            max($xpcValues['charged'] - $xpcValues['refunded'] - $this->paymentTransactionSums['captured'], 0);
                        $this->paymentTransactionSums['refunded']   +=
                            $xpcValues['refunded'];
                    }
                }

                $this->paymentTransactionSums['blocked'] = $this->paymentTransactionSums['authorized'] + $this->paymentTransactionSums['captured'] + $this->paymentTransactionSums['sale'];

            }

        }

        return $this->paymentTransactionSums;
    }

    /**
     * Get array of payment transaction sums (how much is authorized, captured and refunded)
     *
     * @return array
     */
    public function getPaymentTransactionSums()
    {
        $paymentTransactionSums = parent::getPaymentTransactionSums();

        if ($this->isAllowRecharge()) {
            $difference = (string) static::t('Difference between total and paid amount');
            $paymentTransactionSums[$difference] = $this->getAomTotalDifference();
        }

        return $paymentTransactionSums;
    }

    /**
     * Difference in order Total after AOM changes if (any)
     *
     * @return float
     */
    public function getAomTotalDifference()
    {
        // Apparently we'll need to change this
        return $this->getOpenTotal();
    }

    /**
     * Check if total difference after AOM changes is greater than zero
     *
     * @return boolean
     */
    public function isAomTotalDifferencePositive()
    {
        return $this->getAomTotalDifference() > \XLite\Model\Order::ORDER_ZERO;
    }

    /**
     * Does profile has saved cards 
     *
     * @return boolean
     */
    protected function hasSavedCardsInProfile()
    {
        return $this->getProfile()
            && $this->getProfile()->getSavedCards();
    }

    /**
     * Is recharge allowed for the order 
     *
     * @return boolean
     */
    public function isAllowRecharge()
    {
        return $this->isXpc()
            && $this->isAomTotalDifferencePositive()
            && $this->hasSavedCardsInProfile(); 
    }

    /**
     * Return anchor name for the information about fraud check on the order details page
     *
     * @return string 
     */
    public function getFraudInfoXpcAnchor()
    {
        return 'fraud-info-' . $this->getFraudTypeXpc();
    }

    /**
     * Get fraud check data from transaction
     *
     * @return array
     */
    public function getFraudCheckData()
    {
        if (empty($this->fraudCheckData)) {

            if ($this->getFraudCheckTransactionId()) {

                $transaction = \XLite\Core\Database::getRepo('XLite\Model\Payment\Transaction')->find(
                    $this->getFraudCheckTransactionId()
                );

                if ($transaction) {
                    $this->fraudCheckData = $transaction->getFraudCheckData();
                }
            }
        }

        return $this->fraudCheckData;
    }

    /**
     * Set fraud_status_xpc
     *
     * @param string $fraudStatusXpc
     * @return Order
     */
    public function setFraudStatusXpc($fraudStatusXpc)
    {
        $this->fraud_status_xpc = $fraudStatusXpc;
        return $this;
    }

    /**
     * Get fraud_status_xpc
     *
     * @return string 
     */
    public function getFraudStatusXpc()
    {
        return $this->fraud_status_xpc;
    }

    /**
     * Set fraud_type_xpc
     *
     * @param string $fraudTypeXpc
     * @return Order
     */
    public function setFraudTypeXpc($fraudTypeXpc)
    {
        $this->fraud_type_xpc = $fraudTypeXpc;
        return $this;
    }

    /**
     * Get fraud_type_xpc
     *
     * @return string 
     */
    public function getFraudTypeXpc()
    {
        return $this->fraud_type_xpc;
    }

    /**
     * Set fraud_check_transaction_id
     *
     * @param integer $fraudCheckTransactionId
     * @return Order
     */
    public function setFraudCheckTransactionId($fraudCheckTransactionId)
    {
        $this->fraud_check_transaction_id = $fraudCheckTransactionId;
        return $this;
    }

    /**
     * Get fraud_check_transaction_id
     *
     * @return integer 
     */
    public function getFraudCheckTransactionId()
    {
        return $this->fraud_check_transaction_id;
    }

    /**
     * Set isZeroAuth flag
     *
     * @param boolean $isZeroAuth
     * @return Order
     */
    public function setIsZeroAuth($isZeroAuth)
    {
        $this->is_zero_auth = $isZeroAuth;
        return $this;
    }

    /**
     * Get isZeroAuth flag
     *
     * @return boolean
     */
    public function isZeroAuth()
    {
        return $this->is_zero_auth;
    }

}
