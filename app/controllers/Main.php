<?php


namespace app\controllers;

use Service\Controller;
use service\Router;

class Main extends Controller
{
/*
    public function __construct()
    {
        echo 'я конструктор контроллера Main';
    }
*/

    public function mainExec()
    {
        echo 'я метод main в контроллере Main';
       // print_r (Router::$route);
    }

}


