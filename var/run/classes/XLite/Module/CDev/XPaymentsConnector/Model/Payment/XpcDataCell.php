<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\XPaymentsConnector\Model\Payment;

/**
 * XPC custom transaction data storage
 *
 * @Entity
 * @Table (name="xpc_payment_data_cells",
 *      indexes={
 *          @Index (name="tn", columns={"transaction_id","name"})
 *      }
 * )
 */
class XpcDataCell extends \XLite\Model\AEntity
{

    /**
     * Primary key
     *
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer")
     */
    protected $data_id;

    /**
     * Record name
     *
     * @var string
     *
     * @Column (type="string", length=128)
     */
    protected $name;

    /**
     * Value
     *
     * @var string
     *
     * @Column (type="text")
     */
    protected $value;

    /**
     * Transaction
     *
     * @var \XLite\Model\Payment\Transaction
     *
     * @ManyToOne  (targetEntity="XLite\Model\Payment\Transaction", inversedBy="data")
     * @JoinColumn (name="transaction_id", referencedColumnName="transaction_id", onDelete="CASCADE")
     */
    protected $transaction;

    /**
     * Get data_id
     *
     * @return integer 
     */
    public function getDataId()
    {
        return $this->data_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TransactionData
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return TransactionData
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set transaction
     *
     * @param \XLite\Model\Payment\Transaction $transaction
     * @return TransactionData
     */
    public function setTransaction(\XLite\Model\Payment\Transaction $transaction = null)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Get transaction
     *
     * @return \XLite\Model\Payment\Transaction 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
