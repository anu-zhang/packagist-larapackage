<?php

namespace Shebao\LaraPackage;

use Illuminate\Support\Facades\Facade;

class LaraPackageFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        //return 的字符串会在相应的provider中使用
        return 'larapackage';
    }
}