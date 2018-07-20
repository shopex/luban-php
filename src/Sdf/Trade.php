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
     * Generated from protobuf field <code>.luban.ShippingStatus ShipStatus = 6;</code>
     */
    private $ShipStatus = 0;
    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Orders = 7;</code>
     */
    private $Orders;
    /**
     *赠品券
     *
     * Generated from protobuf field <code>repeated .luban.Gift Gifts = 8;</code>
     */
    private $Gifts;
    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 9;</code>
     */
    private $Currency = '';
    /**
     *商品总额  // Order1.Amount + Order2.Amount ...
     *
     * Generated from protobuf field <code>double GoodsAmount = 10;</code>
     */
    private $GoodsAmount = 0.0;
    /**
     *支付总额
     *
     * Generated from protobuf field <code>double PaidAmount = 11;</code>
     */
    private $PaidAmount = 0.0;
    /**
     *最终交易金额 FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double FinalAmount = 12;</code>
     */
    private $FinalAmount = 0.0;
    /**
     *税费
     *
     * Generated from protobuf field <code>double TaxFee = 13;</code>
     */
    private $TaxFee = 0.0;
    /**
     *物流费用
     *
     * Generated from protobuf field <code>double ShippingFee = 14;</code>
     */
    private $ShippingFee = 0.0;
    /**
     *优惠费用
     *
     * Generated from protobuf field <code>double DiscountFee = 15;</code>
     */
    private $DiscountFee = 0.0;
    /**
     *价格调整，+为增， -为减免
     *
     * Generated from protobuf field <code>double AdjustPrice = 16;</code>
     */
    private $AdjustPrice = 0.0;
    /**
     *收货地址
     *
     * Generated from protobuf field <code>.luban.Address ShippingAddress = 17;</code>
     */
    private $ShippingAddress = null;
    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 18;</code>
     */
    private $DiscountToken = '';
    /**
     *促销明细
     *
     * Generated from protobuf field <code>string DiscountMemo = 19;</code>
     */
    private $DiscountMemo = '';
    /**
     *发票
     *
     * Generated from protobuf field <code>.luban.Invoice Invoice = 20;</code>
     */
    private $Invoice = null;
    /**
     *买家备注
     *
     * Generated from protobuf field <code>string BuyerMemo = 21;</code>
     */
    private $BuyerMemo = '';
    /**
     *交易备注
     *
     * Generated from protobuf field <code>string TradeMemo = 22;</code>
     */
    private $TradeMemo = '';
    /**
     *创建时间 Status = TRADE_ACTIVE
     *
     * Generated from protobuf field <code>int64 CreateTime = 23;</code>
     */
    private $CreateTime = 0;
    /**
     *最后更新时间
     *
     * Generated from protobuf field <code>int64 ModifiedTime = 24;</code>
     */
    private $ModifiedTime = 0;
    /**
     *交易完成时间 Status = TRADE_FINISHED, TRADE_CLOSED
     *
     * Generated from protobuf field <code>int64 EndTime = 25;</code>
     */
    private $EndTime = 0;
    /**
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 30;</code>
     */
    private $Payments;
    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipments = 31;</code>
     */
    private $Shipments;
    /**
     * Generated from protobuf field <code>repeated .luban.Event Evnets = 35;</code>
     */
    private $Evnets;
    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 36;</code>
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
     * Generated from protobuf field <code>.luban.ShippingStatus ShipStatus = 6;</code>
     * @return int
     */
    public function getShipStatus()
    {
        return $this->ShipStatus;
    }

    /**
     *配送状态
     *
     * Generated from protobuf field <code>.luban.ShippingStatus ShipStatus = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setShipStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\ShippingStatus::class);
        $this->ShipStatus = $var;

        return $this;
    }

    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Orders = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrders()
    {
        return $this->Orders;
    }

    /**
     *子订单
     *
     * Generated from protobuf field <code>repeated .luban.Order Orders = 7;</code>
     * @param \Shopex\Luban\Sdf\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Order::class);
        $this->Orders = $arr;

        return $this;
    }

    /**
     *赠品券
     *
     * Generated from protobuf field <code>repeated .luban.Gift Gifts = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGifts()
    {
        return $this->Gifts;
    }

    /**
     *赠品券
     *
     * Generated from protobuf field <code>repeated .luban.Gift Gifts = 8;</code>
     * @param \Shopex\Luban\Sdf\Gift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGifts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Gift::class);
        $this->Gifts = $arr;

        return $this;
    }

    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 9;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     *货币类型  // https://www.currency-iso.org/en/home/tables/table-a1.html
     *
     * Generated from protobuf field <code>string Currency = 9;</code>
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
     * Generated from protobuf field <code>double GoodsAmount = 10;</code>
     * @return float
     */
    public function getGoodsAmount()
    {
        return $this->GoodsAmount;
    }

    /**
     *商品总额  // Order1.Amount + Order2.Amount ...
     *
     * Generated from protobuf field <code>double GoodsAmount = 10;</code>
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
     * Generated from protobuf field <code>double PaidAmount = 11;</code>
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->PaidAmount;
    }

    /**
     *支付总额
     *
     * Generated from protobuf field <code>double PaidAmount = 11;</code>
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
     *最终交易金额 FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double FinalAmount = 12;</code>
     * @return float
     */
    public function getFinalAmount()
    {
        return $this->FinalAmount;
    }

    /**
     *最终交易金额 FinalAmount = ItemAmount + TaxFee + ShippingFee - DiscountFee + AdjustPrice
     *
     * Generated from protobuf field <code>double FinalAmount = 12;</code>
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
     * Generated from protobuf field <code>double TaxFee = 13;</code>
     * @return float
     */
    public function getTaxFee()
    {
        return $this->TaxFee;
    }

    /**
     *税费
     *
     * Generated from protobuf field <code>double TaxFee = 13;</code>
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
     * Generated from protobuf field <code>double ShippingFee = 14;</code>
     * @return float
     */
    public function getShippingFee()
    {
        return $this->ShippingFee;
    }

    /**
     *物流费用
     *
     * Generated from protobuf field <code>double ShippingFee = 14;</code>
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
     * Generated from protobuf field <code>double DiscountFee = 15;</code>
     * @return float
     */
    public function getDiscountFee()
    {
        return $this->DiscountFee;
    }

    /**
     *优惠费用
     *
     * Generated from protobuf field <code>double DiscountFee = 15;</code>
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
     *价格调整，+为增， -为减免
     *
     * Generated from protobuf field <code>double AdjustPrice = 16;</code>
     * @return float
     */
    public function getAdjustPrice()
    {
        return $this->AdjustPrice;
    }

    /**
     *价格调整，+为增， -为减免
     *
     * Generated from protobuf field <code>double AdjustPrice = 16;</code>
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
     * Generated from protobuf field <code>.luban.Address ShippingAddress = 17;</code>
     * @return \Shopex\Luban\Sdf\Address
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     *收货地址
     *
     * Generated from protobuf field <code>.luban.Address ShippingAddress = 17;</code>
     * @param \Shopex\Luban\Sdf\Address $var
     * @return $this
     */
    public function setShippingAddress($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Address::class);
        $this->ShippingAddress = $var;

        return $this;
    }

    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 18;</code>
     * @return string
     */
    public function getDiscountToken()
    {
        return $this->DiscountToken;
    }

    /**
     *促销token
     *
     * Generated from protobuf field <code>string DiscountToken = 18;</code>
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
     * Generated from protobuf field <code>string DiscountMemo = 19;</code>
     * @return string
     */
    public function getDiscountMemo()
    {
        return $this->DiscountMemo;
    }

    /**
     *促销明细
     *
     * Generated from protobuf field <code>string DiscountMemo = 19;</code>
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
     * Generated from protobuf field <code>.luban.Invoice Invoice = 20;</code>
     * @return \Shopex\Luban\Sdf\Invoice
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     *发票
     *
     * Generated from protobuf field <code>.luban.Invoice Invoice = 20;</code>
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
     *买家备注
     *
     * Generated from protobuf field <code>string BuyerMemo = 21;</code>
     * @return string
     */
    public function getBuyerMemo()
    {
        return $this->BuyerMemo;
    }

    /**
     *买家备注
     *
     * Generated from protobuf field <code>string BuyerMemo = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->BuyerMemo = $var;

        return $this;
    }

    /**
     *交易备注
     *
     * Generated from protobuf field <code>string TradeMemo = 22;</code>
     * @return string
     */
    public function getTradeMemo()
    {
        return $this->TradeMemo;
    }

    /**
     *交易备注
     *
     * Generated from protobuf field <code>string TradeMemo = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->TradeMemo = $var;

        return $this;
    }

    /**
     *创建时间 Status = TRADE_ACTIVE
     *
     * Generated from protobuf field <code>int64 CreateTime = 23;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间 Status = TRADE_ACTIVE
     *
     * Generated from protobuf field <code>int64 CreateTime = 23;</code>
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
     * Generated from protobuf field <code>int64 ModifiedTime = 24;</code>
     * @return int|string
     */
    public function getModifiedTime()
    {
        return $this->ModifiedTime;
    }

    /**
     *最后更新时间
     *
     * Generated from protobuf field <code>int64 ModifiedTime = 24;</code>
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
     *交易完成时间 Status = TRADE_FINISHED, TRADE_CLOSED
     *
     * Generated from protobuf field <code>int64 EndTime = 25;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     *交易完成时间 Status = TRADE_FINISHED, TRADE_CLOSED
     *
     * Generated from protobuf field <code>int64 EndTime = 25;</code>
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
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     *支付信息
     *
     * Generated from protobuf field <code>repeated .luban.Payment Payments = 30;</code>
     * @param \Shopex\Luban\Sdf\Payment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Payment::class);
        $this->Payments = $arr;

        return $this;
    }

    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipments = 31;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     *发货信息
     *
     * Generated from protobuf field <code>repeated .luban.Shipment Shipments = 31;</code>
     * @param \Shopex\Luban\Sdf\Shipment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShipments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Shipment::class);
        $this->Shipments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Event Evnets = 35;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvnets()
    {
        return $this->Evnets;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Event Evnets = 35;</code>
     * @param \Shopex\Luban\Sdf\Event[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvnets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Event::class);
        $this->Evnets = $arr;

        return $this;
    }

    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 36;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->Meta;
    }

    /**
     *扩展字段
     *
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 36;</code>
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

