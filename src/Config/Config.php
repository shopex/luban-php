<?php
namespace Shopex\Luban\Config;

interface Config
{
	public function set($key, $value);
	public function get($key, $default=null);
	public function all();
}