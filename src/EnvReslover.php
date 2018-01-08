<?php
namespace Shopex\Luban;

use Shopex\Luban\Interfaces\ServiceReslover;

// class EnvReslover implements ServiceReslover{
class EnvReslover{

	public function reslove($service) {
		$str = getenv('SERVICE_'.$service);

		if(!$str){
			throw new \Exception('service not found, Please define ENV: SERVICE_'.$service);
		}

		return $str;
	}
}