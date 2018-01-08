<?php
namespace Shopex\Luban;

use Shopex\Luban\Interfaces\ServiceReslover;

class Client{

	static private $cache = [];
	static private $reslover = null;

    public static function __callStatic($name, $arguments){
    	if(!isset(self::$cache[$name]) ){
	    	$opts = [
	    		'credentials' => \Grpc\ChannelCredentials::createInsecure()
	    	];
	    	$channel = null;

	    	if(!self::$reslover){
				self::$reslover = new EnvReslover;
	    	}

	    	if(!(self::$reslover instanceof ServiceReslover)){
	    		throw new \Exception(get_class(self::$reslover).
	    			' is not instance of '.
	    			ServiceReslover::class);
	    	}
	    	$host = self::$reslover->reslove($name);

	    	$class_name = 'Shopex\\Luban\\Sdf\\'.str_replace('/','\\',$name).'Client';
	    	$obj = new $class_name($host, $opts, $channel);

	    	self::$cache[$name] = $obj;
    	}

    	return self::$cache[$name];
    }

    public static function setReslover($reslover){
		self::$reslover = $reslover;
    }

	public static function getReslover($reslover){
		return self::$reslover;
	}

}