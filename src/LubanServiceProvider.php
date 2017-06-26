<?php

namespace Shopex\Luban;

use Illuminate\Support\ServiceProvider;

class LubanServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->singleton('Luban',function(){
			$l = new Loader();
			$l->etcd(config('app.etcd_addr','http://127.0.0.1:2379'));
            return $l;
        });
	}

}