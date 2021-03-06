<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: support.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.SearchFilter</code>
 */
class SearchFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Column = 1;</code>
     */
    private $Column = '';
    /**
     * Generated from protobuf field <code>.luban.SearchFilter.Op Operator = 2;</code>
     */
    private $Operator = 0;
    /**
     * Generated from protobuf field <code>string Value = 3;</code>
     */
    private $Value = '';
    /**
     * Generated from protobuf field <code>string Option = 4;</code>
     */
    private $Option = '';

    public function __construct() {
        \GPBMetadata\Support::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string Column = 1;</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->Column;
    }

    /**
     * Generated from protobuf field <code>string Column = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->Column = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.SearchFilter.Op Operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * Generated from protobuf field <code>.luban.SearchFilter.Op Operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\SearchFilter_Op::class);
        $this->Operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Generated from protobuf field <code>string Value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->Value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Option = 4;</code>
     * @return string
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Generated from protobuf field <code>string Option = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOption($var)
    {
        GPBUtil::checkString($var, True);
        $this->Option = $var;

        return $this;
    }

}

