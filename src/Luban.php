<?php
namespace Shopex\Luban;

use Illuminate\Support\Facades\Facade;

class Luban extends Facade{

    protected static function getFacadeAccessor() { 
    	return 'Luban';
    }

}