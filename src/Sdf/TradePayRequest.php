<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: svc_dealer.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.TradePayRequest</code>
 */
class TradePayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     */
    private $Tid = '';
    /**
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 2;</code>
     */
    private $Payments;

    public function __construct() {
        \GPBMetadata\SvcDealer::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     * @return string
     */
    public function getTid()
    {
        return $this->Tid;
    }

    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 2;</code>
     * @param \Shopex\Luban\Sdf\Payment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Payment::class);
        $this->Payments = $arr;

        return $this;
    }

}

