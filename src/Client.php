<?php
namespace Shopex\Luban;

class Client{

	static private $cache = [];

    public static function __callStatic($name, $arguments){    	
    	if(self::$cache[$name]){
	    	$opts = [];
	    	$channel = null;
	    	$host = $arguments[0];

	    	$class_name = 'Shopex\\Luban\\'.$name.'Client';
	    	$obj = new $class_name($host, $opts, $channel);

	    	self::$cache[$obj] = $obj;
    	}

    	return self::$cache[$obj];
    }

}