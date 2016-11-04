<?php
/**
 * @author Ryan <yuansir@live.cn|yuansir-web.com>
 */
namespace Learn\Facades;

use Illuminate\Support\Facades\Facade;

class  TestClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}