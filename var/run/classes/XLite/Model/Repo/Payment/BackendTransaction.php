<?php
namespace XLite\Model\Repo\Payment;
/**
 * Payment backend transaction repository
 *
 * @Api\Operation\Create(modelClass="XLite\Model\Payment\BackendTransaction", summary="Add new backend transaction")
 * @Api\Operation\Read(modelClass="XLite\Model\Payment\BackendTransaction", summary="Retrieve backend transaction by id")
 * @Api\Operation\ReadAll(modelClass="XLite\Model\Payment\BackendTransaction", summary="Retrieve all backend transactions")
 * @Api\Operation\Update(modelClass="XLite\Model\Payment\BackendTransaction", summary="Update backend transaction by id")
 * @Api\Operation\Delete(modelClass="XLite\Model\Payment\BackendTransaction", summary="Delete backend transaction by id")
 */
class BackendTransaction extends \XLite\Module\CDev\XPaymentsConnector\Model\Repo\Payment\BackendTransaction {}