<?php

if (!function_exists('admin_path')) {

    /**
     * Get admin path.
     *
     * @param string $path
     *
     * @return string
     */
    function admin_path($path = '')
    {
        return ucfirst(config('admin.directory')) . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('admin_url')) {
    /**
     * Get admin url.
     *
     * @param string $url
     *
     * @return string
     */
    function admin_url($url = '')
    {
        $prefix = trim(config('admin.prefix'), '/');

        return url($prefix ? "/$prefix" : '') . '/' . trim($url, '/');
    }
}

if (!function_exists('admin_toastr')) {

    /**
     * Flash a toastr messaage bag to session.
     *
     * @param string $message
     * @param string $type
     * @param array $options
     *
     * @return string
     */
    function admin_toastr($message = '', $type = 'success', $options = [])
    {
        $toastr = new \Illuminate\Support\MessageBag(get_defined_vars());

        \Illuminate\Support\Facades\Session::flash('toastr', $toastr);
    }
}

if (!function_exists('resource')) {

    /**
     * Flash a toastr messaage bag to session.
     *
     * @param string $message
     * @param string $type
     * @param array $options
     *
     * @return string
     */
    function resource($router, $uri, $controller, $array = [])
    {
        $router->get($uri, $controller . '@index');

        $router->get($uri . '/create', $controller . '@create');

        $router->post($uri, $controller . '@store');

        $router->get($uri . '/{id}', $controller . '@show');

        $router->get($uri . '/{id}/edit', $controller . '@edit');

        $router->put($uri . '/{id}', $controller . '@update');

        $router->patch($uri . '/{id}', $controller . '@update');

        $router->delete($uri . '/{id}', $controller . '@destroy');

        return app();
    }
}
if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->make('path.config') . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('public_path')) {
    /**
     * @param string $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->basePath() . DIRECTORY_SEPARATOR . 'public' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('app_path')) {
    /**
     * @param string $path
     * @return string
     */
    function app_path($path = '')
    {
        return app()->basePath() . DIRECTORY_SEPARATOR . 'app' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
if (! function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    function csrf_token()
    {
        $session = app('session');

        if (isset($session)) {
            return $session->token();
        }

        throw new RuntimeException('Application session store not set.');
    }
}
if (!function_exists('bcrypt')) {
    /**
     * @param $str
     * @return string
     */
    function bcrypt($str){
        return crypt($str, $stat = null);
    }
}

if(!function_exists('asset')){
    function asset($path = ''){
        return URL::asset($path);
    }
}
if (! function_exists('old')) {
    /**
     * Retrieve an old input item.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function old($key = null, $default = null)
    {
        return app('request')->old($key, $default);
    }
}
if (!function_exists('request')) {
    /**
     * Get an instance of the current request or an input item from the request.
     *
     * @param  string $key
     * @param  mixed $default
     * @return \Illuminate\Http\Request|string|array
     */
    function request($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('request');
        }

        return app('request')->input($key, $default);
    }
}

