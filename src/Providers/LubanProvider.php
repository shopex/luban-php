<?php

namespace Shopex\Luban\Providers;

use Illuminate\Support\ServiceProvider;
use Shopex\Luban\Client;

class LubanProvider extends ServiceProvider{

	public function register(){
		$this->app->singleton('Luban',function(){
			return new Client(config('app.etcd_addr','http://127.0.0.1:2379'),
							  config('app.etcd_config_path'));
        });
	}

}