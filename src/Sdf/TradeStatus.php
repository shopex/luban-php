<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Shopex\Luban\Sdf;

/**
 * Protobuf enum <code>Luban\TradeStatus</code>
 */
class TradeStatus
{
    /**
     *交易处理中
     *
     * Generated from protobuf enum <code>TRADE_ACTIVE = 0;</code>
     */
    const TRADE_ACTIVE = 0;
    /**
     *交易成功
     *
     * Generated from protobuf enum <code>TRADE_FINISHED = 1;</code>
     */
    const TRADE_FINISHED = 1;
    /**
     *交易作废即交易关闭
     *
     * Generated from protobuf enum <code>TRADE_CLOSED = 2;</code>
     */
    const TRADE_CLOSED = 2;
    /**
     *交易售后中
     *
     * Generated from protobuf enum <code>TRADE_AFTERSALE = 3;</code>
     */
    const TRADE_AFTERSALE = 3;
    /**
     *to be confirm 待确认，主要用在拼团，预售等场景
     *
     * Generated from protobuf enum <code>TRADE_TBC = 4;</code>
     */
    const TRADE_TBC = 4;
    /**
     *退款中
     *
     * Generated from protobuf enum <code>TRADE_REFUND = 5;</code>
     */
    const TRADE_REFUND = 5;
}

