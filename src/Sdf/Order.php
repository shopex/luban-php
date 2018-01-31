<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Order</code>
 */
class Order extends \Google\Protobuf\Internal\Message
{
    /**
     *交易单号
     *
     * Generated from protobuf field <code>string Tid = 1;</code>
     */
    private $Tid = '';
    /**
     *商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     */
    private $SkuId = '';
    /**
     *商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     */
    private $SkuName = '';
    /**
     *订单类型
     *
     * Generated from protobuf field <code>.luban.OrderType Type = 5;</code>
     */
    private $Type = 0;
    /**
     *数量
     *
     * Generated from protobuf field <code>int64 Quantity = 6;</code>
     */
    private $Quantity = 0;
    /**
     *价格
     *
     * Generated from protobuf field <code>double Price = 8;</code>
     */
    private $Price = 0.0;
    /**
     *总额  Amount = Price * Quantity
     *
     * Generated from protobuf field <code>double Amount = 9;</code>
     */
    private $Amount = 0.0;
    /**
     *买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     */
    private $Customization = '';
    /**
     *发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     */
    private $ConsignTime = 0;
    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 12;</code>
     */
    private $Meta;

    public function __construct() {
        \GPBMetadata\Trade::initOnce();
        parent::__construct();
    }

    /**
     *交易单号
     *
     * Generated from protobuf field <code>string Tid = 1;</code>
     * @return string
     */
    public function getTid()
    {
        return $this->Tid;
    }

    /**
     *交易单号
     *
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
     *商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     * @return string
     */
    public function getSkuId()
    {
        return $this->SkuId;
    }

    /**
     *商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SkuId = $var;

        return $this;
    }

    /**
     *商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     * @return string
     */
    public function getSkuName()
    {
        return $this->SkuName;
    }

    /**
     *商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SkuName = $var;

        return $this;
    }

    /**
     *订单类型
     *
     * Generated from protobuf field <code>.luban.OrderType Type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     *订单类型
     *
     * Generated from protobuf field <code>.luban.OrderType Type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\OrderType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     *数量
     *
     * Generated from protobuf field <code>int64 Quantity = 6;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     *数量
     *
     * Generated from protobuf field <code>int64 Quantity = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->Quantity = $var;

        return $this;
    }

    /**
     *价格
     *
     * Generated from protobuf field <code>double Price = 8;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     *价格
     *
     * Generated from protobuf field <code>double Price = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->Price = $var;

        return $this;
    }

    /**
     *总额  Amount = Price * Quantity
     *
     * Generated from protobuf field <code>double Amount = 9;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     *总额  Amount = Price * Quantity
     *
     * Generated from protobuf field <code>double Amount = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->Amount = $var;

        return $this;
    }

    /**
     *买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     * @return string
     */
    public function getCustomization()
    {
        return $this->Customization;
    }

    /**
     *买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomization($var)
    {
        GPBUtil::checkString($var, True);
        $this->Customization = $var;

        return $this;
    }

    /**
     *发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     * @return int|string
     */
    public function getConsignTime()
    {
        return $this->ConsignTime;
    }

    /**
     *发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConsignTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->ConsignTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->Meta;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 12;</code>
     * @param \Shopex\Luban\Sdf\Meta[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMeta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Meta::class);
        $this->Meta = $arr;

        return $this;
    }

}

