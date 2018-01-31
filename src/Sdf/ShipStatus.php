<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Shopex\Luban\Sdf;

/**
 * Protobuf enum <code>Luban\ShipStatus</code>
 */
class ShipStatus
{
    /**
     * 未发货
     *
     * Generated from protobuf enum <code>SHIP_NO = 0;</code>
     */
    const SHIP_NO = 0;
    /**
     * 配货中
     *
     * Generated from protobuf enum <code>SHIP_PREPARE = 1;</code>
     */
    const SHIP_PREPARE = 1;
    /**
     * 部分发货
     *
     * Generated from protobuf enum <code>SHIP_PART = 2;</code>
     */
    const SHIP_PART = 2;
    /**
     * 全部发货
     *
     * Generated from protobuf enum <code>SHIP_FINISH = 3;</code>
     */
    const SHIP_FINISH = 3;
    /**
     * 部分退货
     *
     * Generated from protobuf enum <code>RESHIP_PART = 4;</code>
     */
    const RESHIP_PART = 4;
    /**
     * 全部退货
     *
     * Generated from protobuf enum <code>RESHIP_ALL = 5;</code>
     */
    const RESHIP_ALL = 5;
}
