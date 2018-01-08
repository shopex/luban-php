<?php
namespace Shopex\Luban;

class Client{

	static private $cache = [];

    public static function __callStatic($name, $arguments){    	
    	if(!isset(self::$cache[$name]) ){
	    	$opts = $arguments[1];
	    	$channel = null;
	    	$host = $arguments[0];

	    	$class_name = 'Shopex\\Luban\\Sdf\\'.$name.'Client';
	    	$obj = new $class_name($host, $opts, $channel);

	    	self::$cache[$name] = $obj;
    	}

    	return self::$cache[$name];
    }

}