<?php
namespace Shopex\Luban\Config;
use ActiveCollab\Etcd\Exception\KeyNotFoundException;

class PhpConfig implements Config {

	private $etcd_client;
	private $path;

	function __construct($etcd_client, $path){
		$this->etcd_client = $etcd_client;
		$this->path = $path;
	}


	public function set($key, $value){
		
	}

	public function get($key, $default=null){
		return config($this->getKey().'.'.$key);
	}

	public function all(){
		return config($this->getKey());
	}
	public function  getKey(){
		$filename = pathinfo($this->etcd_client)['filename'];
		if ($this->path) {
			$path = str_replace('/','.',$this->path);
			return $filename.'.'.$path;
		}
		return $filename;
	}

}
