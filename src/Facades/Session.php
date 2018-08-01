<?php
namespace Encore\Admin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: renqiang
 * Date: 2018/8/1
 * Time: 上午11:11
 */
class Session extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
