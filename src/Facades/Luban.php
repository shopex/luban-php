<?php
namespace Shopex\Luban\Facades;

use Illuminate\Support\Facades\Facade;

class Luban extends Facade{

    protected static function getFacadeAccessor() { 
    	return 'luban';
    }

}