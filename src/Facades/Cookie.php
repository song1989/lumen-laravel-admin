<?php
/**
 * Created by PhpStorm.
 * User: renqiang
 * Date: 2018/8/1
 * Time: 上午11:25
 */

namespace Encore\Admin\Facades;


use Illuminate\Support\Facades\Facade;

class Cookie extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cookie';
    }
}