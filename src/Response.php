<?php
namespace Shopex\Luban;

use Shopex\Luban\Exceptions\ClientException;

class Response {

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
			throw ClientException($this->error_msg);
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