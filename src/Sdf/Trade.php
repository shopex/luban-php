<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Trade</code>
 */
class Trade extends \Google\Protobuf\Internal\Message
{
    /**
     *交易单号
     *
     * Generated from protobuf field <code>string Tid = 1;</code>
     */
    private $Tid = '';
    /**
     *卖家ID
     *
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     */
    private $BuyerId = '';
    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     */
    private $SellerId = '';
    /**
     *交易状态
     *
     * Generated from protobuf field <code>.luban.TradeStatus Status = 4;</code>
     */
    private $Status = 0;
    /**
     *支付状态
     *
     * Generated from protobuf field <code>.luban.PayStatus PayStatus = 5;</code>
     */
    private $PayStatus = 0;
    /**
     *配送状态
     *
     * Generated from protobuf field <code>.luban.ShipStatus ShipStatus = 6;</code>
     */
    private $ShipStatus = 0;
    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Order = 7;</code>
     */
    private $Order;
    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 8;</code>
     */
    private $Currency = '';
    /**
     *商品总额  // Order1.Amount + Order2.Amount ...
     *
     * Generated from protobuf field <code>double GoodsAmount = 9;</code>
     */
    private $GoodsAmount = 0.0;
    /**
     *支付总额
     *
     * Generated from protobuf field <code>double PaidAmount = 10;</code>
     */
    private $PaidAmount = 0.0;
    /**
     *最终交易金额	
     *
     * Generated from protobuf field <code>double FinalAmount = 11;</code>
     */
    private $FinalAmount = 0.0;
    /**
     *税费
     *
     * Generated from protobuf field <code>double TaxFee = 12;</code>
     */
    private $TaxFee = 0.0;
    /**
     *物流费用
     *
     * Generated from protobuf field <code>double ShippingFee = 13;</code>
     */
    private $ShippingFee = 0.0;
    /**
     *优惠费用
     *
     * Generated from protobuf field <code>double DiscountFee = 14;</code>
     */
    private $DiscountFee = 0.0;
    /**
     * FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double AdjustPrice = 15;</code>
     */
    private $AdjustPrice = 0.0;
    /**
     *收货地址
     *
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 16;</code>
     */
    private $BuyerAddress = null;
    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 17;</code>
     */
    private $DiscountToken = '';
    /**
     *促销明细
     *
     * Generated from protobuf field <code>string DiscountMemo = 18;</code>
     */
    private $DiscountMemo = '';
    /**
     *发票
     *
     * Generated from protobuf field <code>.luban.Invoice Invoice = 19;</code>
     */
    private $Invoice = null;
    /**
     *买家信息
     *
     * Generated from protobuf field <code>string BuyerMessage = 20;</code>
     */
    private $BuyerMessage = '';
    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 CreateTime = 21;</code>
     */
    private $CreateTime = 0;
    /**
     *最后更新时间
     *
     * Generated from protobuf field <code>int64 ModifiedTime = 22;</code>
     */
    private $ModifiedTime = 0;
    /**
     *支付时间
     *
     * Generated from protobuf field <code>int64 PayTime = 23;</code>
     */
    private $PayTime = 0;
    /**
     *交易完成时间
     *
     * Generated from protobuf field <code>int64 EndTime = 24;</code>
     */
    private $EndTime = 0;
    /**
     *是否货到付款
     *
     * Generated from protobuf field <code>bool IsCod = 25;</code>
     */
    private $IsCod = false;
    /**
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payment = 30;</code>
     */
    private $Payment;
    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipment = 31;</code>
     */
    private $Shipment;
    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 35;</code>
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
     *卖家ID
     *
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     * @return string
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     *卖家ID
     *
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BuyerId = $var;

        return $this;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     * @return string
     */
    public function getSellerId()
    {
        return $this->SellerId;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSellerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SellerId = $var;

        return $this;
    }

    /**
     *交易状态
     *
     * Generated from protobuf field <code>.luban.TradeStatus Status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *交易状态
     *
     * Generated from protobuf field <code>.luban.TradeStatus Status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\TradeStatus::class);
        $this->Status = $var;

        return $this;
    }

    /**
     *支付状态
     *
     * Generated from protobuf field <code>.luban.PayStatus PayStatus = 5;</code>
     * @return int
     */
    public function getPayStatus()
    {
        return $this->PayStatus;
    }

    /**
     *支付状态
     *
     * Generated from protobuf field <code>.luban.PayStatus PayStatus = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPayStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\PayStatus::class);
        $this->PayStatus = $var;

        return $this;
    }

    /**
     *配送状态
     *
     * Generated from protobuf field <code>.luban.ShipStatus ShipStatus = 6;</code>
     * @return int
     */
    public function getShipStatus()
    {
        return $this->ShipStatus;
    }

    /**
     *配送状态
     *
     * Generated from protobuf field <code>.luban.ShipStatus ShipStatus = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setShipStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\ShipStatus::class);
        $this->ShipStatus = $var;

        return $this;
    }

    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Order = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Order = 7;</code>
     * @param \Shopex\Luban\Sdf\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrder($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Order::class);
        $this->Order = $arr;

        return $this;
    }

    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 8;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->Currency = $var;

        return $this;
    }

    /**
     *商品总额  // Order1.Amount + Order2.Amount ...
     *
     * Generated from protobuf field <code>double GoodsAmount = 9;</code>
     * @return float
     */
    public function getGoodsAmount()
    {
        return $this->GoodsAmount;
    }

    /**
     *商品总额  // Order1.Amount + Order2.Amount ...
     *
     * Generated from protobuf field <code>double GoodsAmount = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setGoodsAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->GoodsAmount = $var;

        return $this;
    }

    /**
     *支付总额
     *
     * Generated from protobuf field <code>double PaidAmount = 10;</code>
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->PaidAmount;
    }

    /**
     *支付总额
     *
     * Generated from protobuf field <code>double PaidAmount = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setPaidAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->PaidAmount = $var;

        return $this;
    }

    /**
     *最终交易金额	
     *
     * Generated from protobuf field <code>double FinalAmount = 11;</code>
     * @return float
     */
    public function getFinalAmount()
    {
        return $this->FinalAmount;
    }

    /**
     *最终交易金额	
     *
     * Generated from protobuf field <code>double FinalAmount = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setFinalAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->FinalAmount = $var;

        return $this;
    }

    /**
     *税费
     *
     * Generated from protobuf field <code>double TaxFee = 12;</code>
     * @return float
     */
    public function getTaxFee()
    {
        return $this->TaxFee;
    }

    /**
     *税费
     *
     * Generated from protobuf field <code>double TaxFee = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setTaxFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->TaxFee = $var;

        return $this;
    }

    /**
     *物流费用
     *
     * Generated from protobuf field <code>double ShippingFee = 13;</code>
     * @return float
     */
    public function getShippingFee()
    {
        return $this->ShippingFee;
    }

    /**
     *物流费用
     *
     * Generated from protobuf field <code>double ShippingFee = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setShippingFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->ShippingFee = $var;

        return $this;
    }

    /**
     *优惠费用
     *
     * Generated from protobuf field <code>double DiscountFee = 14;</code>
     * @return float
     */
    public function getDiscountFee()
    {
        return $this->DiscountFee;
    }

    /**
     *优惠费用
     *
     * Generated from protobuf field <code>double DiscountFee = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setDiscountFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->DiscountFee = $var;

        return $this;
    }

    /**
     * FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double AdjustPrice = 15;</code>
     * @return float
     */
    public function getAdjustPrice()
    {
        return $this->AdjustPrice;
    }

    /**
     * FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double AdjustPrice = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setAdjustPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->AdjustPrice = $var;

        return $this;
    }

    /**
     *收货地址
     *
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 16;</code>
     * @return \Shopex\Luban\Sdf\Address
     */
    public function getBuyerAddress()
    {
        return $this->BuyerAddress;
    }

    /**
     *收货地址
     *
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 16;</code>
     * @param \Shopex\Luban\Sdf\Address $var
     * @return $this
     */
    public function setBuyerAddress($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Address::class);
        $this->BuyerAddress = $var;

        return $this;
    }

    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 17;</code>
     * @return string
     */
    public function getDiscountToken()
    {
        return $this->DiscountToken;
    }

    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscountToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->DiscountToken = $var;

        return $this;
    }

    /**
     *促销明细
     *
     * Generated from protobuf field <code>string DiscountMemo = 18;</code>
     * @return string
     */
    public function getDiscountMemo()
    {
        return $this->DiscountMemo;
    }

    /**
     *促销明细
     *
     * Generated from protobuf field <code>string DiscountMemo = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscountMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->DiscountMemo = $var;

        return $this;
    }

    /**
     *发票
     *
     * Generated from protobuf field <code>.luban.Invoice Invoice = 19;</code>
     * @return \Shopex\Luban\Sdf\Invoice
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     *发票
     *
     * Generated from protobuf field <code>.luban.Invoice Invoice = 19;</code>
     * @param \Shopex\Luban\Sdf\Invoice $var
     * @return $this
     */
    public function setInvoice($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Invoice::class);
        $this->Invoice = $var;

        return $this;
    }

    /**
     *买家信息
     *
     * Generated from protobuf field <code>string BuyerMessage = 20;</code>
     * @return string
     */
    public function getBuyerMessage()
    {
        return $this->BuyerMessage;
    }

    /**
     *买家信息
     *
     * Generated from protobuf field <code>string BuyerMessage = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->BuyerMessage = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 CreateTime = 21;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>int64 CreateTime = 21;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     *最后更新时间
     *
     * Generated from protobuf field <code>int64 ModifiedTime = 22;</code>
     * @return int|string
     */
    public function getModifiedTime()
    {
        return $this->ModifiedTime;
    }

    /**
     *最后更新时间
     *
     * Generated from protobuf field <code>int64 ModifiedTime = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModifiedTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->ModifiedTime = $var;

        return $this;
    }

    /**
     *支付时间
     *
     * Generated from protobuf field <code>int64 PayTime = 23;</code>
     * @return int|string
     */
    public function getPayTime()
    {
        return $this->PayTime;
    }

    /**
     *支付时间
     *
     * Generated from protobuf field <code>int64 PayTime = 23;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->PayTime = $var;

        return $this;
    }

    /**
     *交易完成时间
     *
     * Generated from protobuf field <code>int64 EndTime = 24;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     *交易完成时间
     *
     * Generated from protobuf field <code>int64 EndTime = 24;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->EndTime = $var;

        return $this;
    }

    /**
     *是否货到付款
     *
     * Generated from protobuf field <code>bool IsCod = 25;</code>
     * @return bool
     */
    public function getIsCod()
    {
        return $this->IsCod;
    }

    /**
     *是否货到付款
     *
     * Generated from protobuf field <code>bool IsCod = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCod($var)
    {
        GPBUtil::checkBool($var);
        $this->IsCod = $var;

        return $this;
    }

    /**
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payment = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payment = 30;</code>
     * @param \Shopex\Luban\Sdf\Payment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayment($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Payment::class);
        $this->Payment = $arr;

        return $this;
    }

    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipment = 31;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipment = 31;</code>
     * @param \Shopex\Luban\Sdf\Shipment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShipment($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Shipment::class);
        $this->Shipment = $arr;

        return $this;
    }

    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 35;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->Meta;
    }

    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 35;</code>
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

