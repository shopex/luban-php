<?php
namespace Shopex\Luban;

use ActiveCollab\Etcd;
use Shopex\Luban\Exceptions\BackendException;
use Shopex\Luban\Config\EtcdConfig;
use Shopex\Luban\Config\PhpConfig;
class Client {

	public $conns = array();
	private $srvs = array();
	private $etcd_client;
	private $_config;
	private $configClass;

	function __construct($etcd_urls, $etcd_config_dir) {
		if (strpos($etcd_urls, "http") !== false) {	
			$this->configClass = EtcdConfig::class;
			$this->etcd_config_dir = $etcd_config_dir;
			$this->etcd_client = new Etcd\Client($etcd_urls);
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
		}else{
			$this->configClass     = PhpConfig::class;
			$this->etcd_config_dir = $etcd_config_dir;
			$this->etcd_client     = $etcd_urls;
		}
	}

	public function bus(){
		return $this->etcd_client;
	}


	public function services(){
		$srvs = array_keys($this->srvs);
		sort($srvs);
		return $srvs;
	}

	public function nodes(){
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

	public function has($name){
		return array_key_exists($name, $this->srvs);
	}

	public function available($name){
		return $this->has($name) && count($this->srvs[$name]) > 0;
	}

	public function s($name){
		if(!array_key_exists($name, $this->conns)){
			if($this->srvs[$name]){
				if($this->srvs[$name]){
					$addr = 'tcp://'.implode(',tcp://', ($this->srvs[$name]));
					$this->conns[$name] = Caller::create($addr, false);
				}
			}
		}		
		if(isset($this->conns[$name])){
			return $this->conns[$name];
		}else{
			throw new BackendException('no available servers for service "'.$name.'"');
		}
	}

	public function config(){
		if(!$this->_config){
			$config = $this->configClass;
			$this->_config = new $config($this->etcd_client, $this->etcd_config_dir);
		}
		return $this->_config;
	}

}

