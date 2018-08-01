本人lumen版本为5.4.6

1.拷贝admin 到项目下
2. composer
```
"psr-4": {
    		"Encore\\Admin\\": "admin/src/"
},
"files": [
"admin/src/helpers.php"
]
```
3.执行 composer install，将admin项目引入到生产项目中
4.添加门面、注册admin、cookic
```
  $app->withFacades(
     true,
     [
        \Encore\Admin\Facades\Admin::class => 'Admin',
        \Encore\Admin\Facades\Session::class=>'Session',
        \Encore\Admin\Facades\Cookie::class=>'Cookie'
     ]
 );

$app->register(\Encore\Admin\Providers\AdminServiceProvider::class);
$app->register(\Illuminate\Cookie\CookieServiceProvider::class);
```
5.如果没有cookic, composer require illuminate/cookie  // 如果需要特别版本   composer require illuminate/cookie:v5.4.6
6.执行php artisan admin:install   生成后台表，app下生成admin文件

