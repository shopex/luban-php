<?php
namespace Shopex\Luban;

use ActiveCollab\Etcd;

class Loader {

	public $conns = array();
	private $srvs = array();
	private $etcd_client;

	function etcd($etcd_url) {
		$this->etcd_client = new Etcd\Client($etcd_url);
		$n = $this->etcd_client->dirInfo('/luban/nodes');
		foreach($n['node']['nodes'] as $srv){
			if($srv['dir']){
				$srvname = basename($srv['key']);
				$l = $this->etcd_client->dirInfo($srv['key']);
				$nodes = [];
				if(isset($l['node']['nodes'])){
					foreach($l['node']['nodes'] as $node){
						$nodes[] = basename($node['key']);
					}
				}
				$this->srvs[$srvname] = $nodes;
			}
		}
	}

	function bus(){
		return $this->etcd_client;
	}


	function services(){
		$srvs = array_keys($this->srvs);
		sort($srvs);
		return $srvs;
	}

	function nodes(){
		$nodes = [];
		$n = $this->etcd_client->dirInfo('/luban/nodes');
		foreach($n['node']['nodes'] as $srv){
			if($srv['dir']){
				$srvname = basename($srv['key']);
				$l = $this->etcd_client->dirInfo($srv['key']);
				if(isset($l['node']['nodes'])){
					foreach($l['node']['nodes'] as $node){
						$addr = basename($node['key']);
						$host = explode(':', $addr)[0];
						$nodes[$host][] = $srvname;
					}
					sort($nodes[$host]);
				}
			}
		}
		ksort($nodes);
		return $nodes;
	}

	function s($name){
		if(!array_key_exists($name, $this->conns)){
			if($this->srvs[$name]){
				if($this->srvs[$name]){
					$addr = 'tcp://'.$this->srvs[$name][array_rand($this->srvs[$name], 1)];
					$this->conns[$name] = Proxy::create($addr, false);
				}
			}
		}
		if(isset($this->conns[$name])){
			return $this->conns[$name];
		}else{
			throw new BackendException('no available servers for service "'.$name.'"');
		}
	}

}

class Exception extends \Exception{

}

class BackendException extends Exception{
	
}

class Result {

	private $data;
	private $error_code;
	private $error_msg;
	private $is_succ;

	function __construct($var){
		$this->data = $var->data;
		$this->error_code = $var->error_code;
		$this->error_msg = $var->error_msg;
		$this->is_succ = $var->status == 'succ';
	}

	function result(){
		if(!$this->is_succ){
			throw Exception($this->error_msg);
			return;
		}
		return $this->data;
	}

	function error(){
		return $this->error;
	}

	function error_code(){
		return $this->error_code;
	}

	function is_succ(){
		return $this->is_succ;
	}

}

class Proxy {

	static public function create($uriList, $async = true){
		$obj = new Proxy($uriList, $async);
		return $obj;
	}

	function __construct($uriList, $async = true){
		$this->core = \Hprose\Client::create($uriList, $async);
	}

	function __call($name, $arguments){
		$rst = call_user_func_array([$this->core, $name], $arguments);
		$rst = new Result($rst);
		return $rst->result();
	}

}

