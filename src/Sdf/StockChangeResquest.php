<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: svc_stocker.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.StockChangeResquest</code>
 */
class StockChangeResquest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     */
    private $RequestId = '';
    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff Items = 2;</code>
     */
    private $Items;

    public function __construct() {
        \GPBMetadata\SvcStocker::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RequestId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff Items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff Items = 2;</code>
     * @param \Shopex\Luban\Sdf\StockDiff[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\StockDiff::class);
        $this->Items = $arr;

        return $this;
    }

}

