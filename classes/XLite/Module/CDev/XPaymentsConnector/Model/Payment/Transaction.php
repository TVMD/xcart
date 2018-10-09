<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Model\Payment;

/**
 * XPayments payment processor
 *
 */
class Transaction extends \XLite\Model\Payment\Transaction implements \XLite\Base\IDecorator
{
    /**
     * Fields for transaction note is limited by 255 characters in database
     */
    const NOTE_LIMIT = 255;

    /**
     * X-Payments custom data cells
     *
     * @var \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcDataCell
     *
     * @OneToMany (targetEntity="\XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcDataCell", mappedBy="transaction", cascade={"all"})
     */
    protected $xpc_data_cells;

    /**
     * One-to-one relation with X-Payments transaction details
     *
     * @var \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData
     *
     * @OneToOne  (targetEntity="\XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData", mappedBy="transaction", cascade={"all"})
     */
    protected $xpc_data;

    /**
     * One-to-one relation with X-Payments payment fraud check data
     *
     * @var \XLite\Module\CDev\XPaymentsConnector\Model\Payment\FraudCheckData
     *
     * @OneToMany  (targetEntity="\XLite\Module\CDev\XPaymentsConnector\Model\Payment\FraudCheckData", mappedBy="transaction", cascade={"all"})
     */
    protected $fraud_check_data;

    /**
     * Constructor
     *
     * @param array $data Entity properties OPTIONAL
     *
     * @return void
     */
    public function __construct(array $data = array())
    {
        $this->xpc_data_cells = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct($data);
    }

    /**
     * Check - transaction is X-Payment connector's transaction
     * 
     * @return boolean
     */
    public function isXpc($includeSavedCardsMethod = false)
    {
        $xpClass = array(
            'Module\CDev\XPaymentsConnector\Model\Payment\Processor\XPayments',
        );

        if ($includeSavedCardsMethod) {
            $xpClass[] = 'Module\CDev\XPaymentsConnector\Model\Payment\Processor\SavedCard';
        } 

        return $this->getPaymentMethod()
            && in_array($this->getPaymentMethod()->getClass(), $xpClass);
    }


    /**
     * Check - transaction is for Save card in profile ("Zero auth") feature
     * 
     * @return boolean
     */
    public function isPendingZeroAuth()
    {
        return (
            $this->getProfile()
            && $this->getProfile()->getPendingZeroAuth() == $this->getPublicId()
        );
    }

    /**
     * Save card in details
     *
     * @return array
     */
    public function saveCard($first6, $last4, $type, $expireMonth = '', $expireYear = '')
    {
        if (!$this->getXpcData()) {
            
            $xpcData = new \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData;
            $xpcData->setTransaction($this);

            $this->xpc_data = $xpcData;
        }

        $xpcData = $this->getXpcData();

        $xpcData->setCardNumber($first6 . '******' . $last4);
        $xpcData->setCardType($type);
        
        if ($expireMonth && $expireYear) {

            // If this is changed, correct Model\Payment\Processor\AXPayments::copyMaskedCard() as well
            $xpcData->setCardExpire($expireMonth . '/' . $expireYear);
        }
    }

    /**
     * Get saved credit card 
     *
     * @return array
     */
    public function getCard($forRechargesOnly = false)
    {
        $result = false;

        if (
            $this->getXpcData()
            && (
                !$forRechargesOnly 
                || 'Y' == $this->getXpcData()->getUseForRecharges()
            )
        ) {

            $result = array(
                'card_id'           => $this->getXpcData()->getId(),
                'card_number'       => $this->getXpcData()->getCardNumber(),
                'card_type'         => $this->getXpcData()->getCardType(),
                'card_type_css'     => strtolower($this->getXpcData()->getCardType()),
                'use_for_recharges' => $this->getXpcData()->getUseForRecharges(),
                'expire'            => $this->getXpcData()->getCardExpire(),
            );
        }

        return $result;
    }

    /**
     * Get initial action of a transaction. Was it first authorized or charged.
     *
     * @return string
     */
    public function getInitXpcAction()
    {
        if (
            $this->getXpcDataCell('xpc_authorized')
            && $this->getXpcDataCell('xpc_authorized')->getValue() > \XLite\Model\Order::ORDER_ZERO
        ) {
            $action = 'authorize';
        } else {
            $action = 'charge';
        }

        return $action;
    }

    /**
     * Get transaction xpc_ values. What was actually authorized, paid, voided, and refunded.
     *
     * @return array 
     */
    public function getXpcValues()
    {

        $fields = array(
            'authorized' => 0,
            'captured' => 0,
            'charged' => 0,
            'paid' => 0,
            'voided' => 0,
            'refunded' => 0,
        );

        foreach ($fields as $key => $unused) {
            $fields[$key] = $this->getXpcDataCell('xpc_' . $key)
                ? floatval($this->getXpcDataCell('xpc_' . $key)->getValue())
                : 0;

        }

        if ($this->getXpcDataCell('xpc_paid')) {
            // The 'paid' value is used for backwards compatiblity only.

            if ($fields['paid'] < $fields['refunded']) {

                // WA fix for the information returned from X-Payments.
                // The captured and charged values are calculated in a different way,
                // refunded amount is substracted from charged but not from captured.
                // See XPay_Model_Payment::getInfo().

                $fields['paid'] += $fields['refunded'];
            }

            $fields['captured'] = $fields['paid'];
        }

        unset($fields['paid']);

        return $fields;
    }

    /**
     * Get charge value modifier
     *
     * @return float
     */
    public function getChargeValueModifier()
    {
        if ($this->isXpc(true)) {

            $sums = $this->getXpcValues();

            $authorized = max($sums['authorized'] - $sums['voided'] - $sums['captured'], 0);
            $captured = max($sums['captured'] - $sums['refunded'], 0);
            $charged = max($sums['charged'] - $sums['refunded'] - $captured, 0);

            $value = $authorized + $captured + $charged;

        } else {

            $value = parent::getChargeValueModifier();

        }

        return $value;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Transaction
     */
    public function setNote($note)
    {
        if (strlen($note) > self::NOTE_LIMIT) {

            // truncate note for STRICT_TRANS_TABLES
            $note = function_exists('mb_substr')
                ? mb_substr($note, 0, self::NOTE_LIMIT - 3)
                : substr($note, 0, self::NOTE_LIMIT - 3);

            $note .= '...';
        }

        return parent::setNote($note);
    }

    /**
     * Check if transaction is still being reviewed
     *
     * @return bool 
     */
    public function isPendingFraudCheck()
    {
        $allIsPending = false;

        if ($this->getFraudCheckData()) {
            $allIsPending = true;
            foreach ($this->getFraudCheckData() as $fraudCheckData) {
                if (!$fraudCheckData->isPending()) {
                    $allIsPending = false;
                    break;
                }
            }
        }

        return $allIsPending;
    }

    /**
     * Is transaction marked as fraud
     *
     * @return bool
     */
    public function isFraudStatus()
    {
        return $this->getXpcDataCell('xpc_is_fraud_status')
            && $this->getXpcDataCell('xpc_is_fraud_status')->getValue();
    }

    /**
     * Set XPC data cell
     *
     * @param string $name  Data cell name
     * @param string $value Value
     *
     * @return void
     */
    public function setXpcDataCell($name, $value)
    {
        $data = null;

        if (!isset($value)) {
            $value = '';
        }

        foreach ($this->getXpcDataCells() as $cell) {
            if ($cell->getName() == $name) {
                $data = $cell;
                break;
            }
        }

        if (!$data) {
            $data = new \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcDataCell;
            $data->setName($name);
            $this->addXpcDataCell($data);
            $data->setTransaction($this);
        }

        $data->setValue($value);
    }

    /**
     * Get XPC data cell object by name
     *
     * @param string $name Name of data cell
     *
     * @return \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcDataCell
     */
    public function getXpcDataCell($name)
    {
        $value = null;

        foreach ($this->getXpcDataCells() as $cell) {
            if ($cell->getName() == $name) {
                $value = $cell;
                break;
            }
        }

        if (is_null($value)) {
            // Backward compatiblity
            $value = $this->getDataCell($name);
        }

        return $value;
    }

    /**
     * Add data
     *
     * @param \XLite\Model\Payment\TransactionData $data
     * @return Transaction
     */
    public function addXpcDataCell(\XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcDataCell $data)
    {
        $this->xpc_data_cells[] = $data;
        return $this;
    }

    /**
     * Get data
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getXpcDataCells()
    {
        return $this->xpc_data_cells;
    }

    /**
     * Set xpc_data
     *
     * @param \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData $xpcData
     * @return Transaction
     */
    public function setXpcData(\XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData $xpcData = null)
    {
        $this->xpc_data = $xpcData;
        return $this;
    }

    /**
     * Get xpc_data
     *
     * @return \XLite\Module\CDev\XPaymentsConnector\Model\Payment\XpcTransactionData 
     */
    public function getXpcData()
    {
        return $this->xpc_data;
    }

    /**
     * Add fraud_check_data
     *
     * @param \XLite\Module\CDev\XPaymentsConnector\Model\Payment\FraudCheckData $fraudCheckData
     * @return Transaction
     */
    public function addFraudCheckData(\XLite\Module\CDev\XPaymentsConnector\Model\Payment\FraudCheckData $fraudCheckData)
    {
        $this->fraud_check_data[] = $fraudCheckData;
        return $this;
    }

    /**
     * Get fraud_check_data
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFraudCheckData()
    {
        return $this->fraud_check_data;
    }
}
