<?php
namespace Shopex\Luban;

class EnvReslover implements ServiceReslover{

	public function reslove($service) {
		$str = getenv('SERVICE_'.$service);

		if(!$str){
			throw new Exception('service not found, use ENV: SERVICE_'.$service);
		}

		return $str;
	}
}