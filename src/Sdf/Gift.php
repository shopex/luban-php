<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *赠品券
 *
 * Generated from protobuf message <code>luban.Gift</code>
 */
class Gift extends \Google\Protobuf\Internal\Message
{
    /**
     *券 id
     *
     * Generated from protobuf field <code>int64 Id = 1;</code>
     */
    private $Id = 0;
    /**
     *券类型 id
     *
     * Generated from protobuf field <code>string CouponId = 2;</code>
     */
    private $CouponId = '';
    /**
     *seckill 中的券 id
     *
     * Generated from protobuf field <code>int64 ItemId = 3;</code>
     */
    private $ItemId = 0;
    /**
     *券名称
     *
     * Generated from protobuf field <code>string Name = 4;</code>
     */
    private $Name = '';
    /**
     *券图标
     *
     * Generated from protobuf field <code>string Logo = 5;</code>
     */
    private $Logo = '';
    /**
     *券代码
     *
     * Generated from protobuf field <code>string Token = 6;</code>
     */
    private $Token = '';
    /**
     *描述信息
     *
     * Generated from protobuf field <code>string Memo = 7;</code>
     */
    private $Memo = '';
    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 8;</code>
     */
    private $Meta;

    public function __construct() {
        \GPBMetadata\Trade::initOnce();
        parent::__construct();
    }

    /**
     *券 id
     *
     * Generated from protobuf field <code>int64 Id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     *券 id
     *
     * Generated from protobuf field <code>int64 Id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->Id = $var;

        return $this;
    }

    /**
     *券类型 id
     *
     * Generated from protobuf field <code>string CouponId = 2;</code>
     * @return string
     */
    public function getCouponId()
    {
        return $this->CouponId;
    }

    /**
     *券类型 id
     *
     * Generated from protobuf field <code>string CouponId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCouponId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CouponId = $var;

        return $this;
    }

    /**
     *seckill 中的券 id
     *
     * Generated from protobuf field <code>int64 ItemId = 3;</code>
     * @return int|string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     *seckill 中的券 id
     *
     * Generated from protobuf field <code>int64 ItemId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ItemId = $var;

        return $this;
    }

    /**
     *券名称
     *
     * Generated from protobuf field <code>string Name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     *券名称
     *
     * Generated from protobuf field <code>string Name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     *券图标
     *
     * Generated from protobuf field <code>string Logo = 5;</code>
     * @return string
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     *券图标
     *
     * Generated from protobuf field <code>string Logo = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLogo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Logo = $var;

        return $this;
    }

    /**
     *券代码
     *
     * Generated from protobuf field <code>string Token = 6;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     *券代码
     *
     * Generated from protobuf field <code>string Token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->Token = $var;

        return $this;
    }

    /**
     *描述信息
     *
     * Generated from protobuf field <code>string Memo = 7;</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     *描述信息
     *
     * Generated from protobuf field <code>string Memo = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Memo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->Meta;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 8;</code>
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

