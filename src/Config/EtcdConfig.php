<?php
namespace Shopex\Luban\Config;
use ActiveCollab\Etcd\Exception\KeyNotFoundException;

class EtcdConfig implements Config {

	private $etcd_client;
	private $path;

	function __construct($etcd_client, $path){
		$this->etcd_client = $etcd_client;
		$this->path = $path;
	}

	public function get_path(){
		return $this->path;
	}

	public function set_path($path){
		return $this->path = $path;
	}

	private function ensure_path($path){
		if(!$this->etcd_client->dirExists($path)){
			$this->etcd_client->createDir($path);
		}
	}

	public function set($key, $value){
		$this->ensure_path($this->path);
		$bus->create($this->path.'/'.$key, $value);
	}

	public function get($key, $default=null){
		try{
			return $this->etcd_client->get($this->path.'/'.$key);
		}catch (KeyNotFoundException $e){
			return $default;
		}
	}

	public function all(){
		$cfg_map = $this->etcd_client->getKeyValueMap($this->path);
		foreach($cfg_map as $k=>$v){
			$k = substr($k, strlen($this->path)+1);
			$config[$k] = $v;
		}
	}

}