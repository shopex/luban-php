<?php
namespace Shopex\Luban;

class Caller {

	private $core;

	static public function create($uriList, $async = true){
		$obj = new Caller($uriList, $async);
		$obj->setTimeout(10000);
		return $obj;
	}

	function setTimeout($time){
		$this->core->setTimeout($time);
		return $this;
	}

	function __construct($uriList, $async = true){
		$this->core = \Hprose\Client::create($uriList, $async);
	}

	function __call($name, $arguments){
		$rsp = call_user_func_array([$this->core, $name], $arguments);
		$rsp = new Response($rsp);
		return $rsp->result();
	}

}