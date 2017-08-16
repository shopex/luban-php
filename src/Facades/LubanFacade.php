<?php
namespace Shopex\Luban\Facades;

use Illuminate\Support\Facades\Facade;

class LubanFacade extends Facade{

    protected static function getFacadeAccessor() { 
    	return 'Luban';
    }

}