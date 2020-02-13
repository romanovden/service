<?php
/*
 * класс Router определяет маршрутизацию сайта
 */


namespace service;


class Router
{

    public static $route = ['model'=>'Main','method'=>'main'];

    public function __construct()
    {
        $this->getRoute();
        $this->followRoute();
    }


/*
 * определяем маршрут
 */
    private function getRoute()
    {
        $route = parse_url($_SERVER['QUERY_STRING']);
        $route = explode('/',$route['path']);
        if (isset($route[0]) && $route[0]!=''){
            self::$route['model'] = self::upperCamelCase($route[0]);
        }
        if (isset($route[1])&& $route[1]!=''){
            self::$route['method'] = self::lowerCamelCase($route[1]);
        }
    }


/*
 * следуем по маршруту
 */
    private function followRoute()
    {
        $model = 'App\controllers\\'. self::$route['model'];
        if (class_exists($model)){
            $app = new $model();
            if (method_exists($app, self::$route['method'].'Exec')){
                $app->{ self::$route['method'].'Exec'}();
            } else {
                echo 1;
                http_response_code(404);
                include('../app/views/404.html');
            }
        } else {
            http_response_code(404);
            include('../app/views/404.html');
        }

    }

    protected static function upperCamelCase($string)
    {
        return str_replace(' ','', ucwords(str_replace('-',' ' ,$string)));
    }

    protected static function lowerCamelCase($string)
    {
        return lcfirst(str_replace(' ','', ucwords(str_replace('-',' ' ,$string))));
    }

}