<?php
namespace XLite\Model\Payment;
/**
 * Payment method
 *
 * @Entity
 * @Table  (name="payment_methods",
 *      indexes={
 *          @Index (name="orderby", columns={"orderby"}),
 *          @Index (name="class", columns={"class","enabled"}),
 *          @Index (name="enabled", columns={"enabled"})
 *      }
 * )
 */
class Method extends \XLite\Module\Amazon\PayWithAmazon\Model\Payment\Method {}