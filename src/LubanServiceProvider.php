<?php

namespace Shopex\Luban;

use Illuminate\Support\ServiceProvider;

class LubanServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->singleton('Luban',function(){
			$l = new Loader();
			$l->etcd(App::environment('ETCD_ADDR'));
            return $l;
        });
	}

}