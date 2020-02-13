<?php


namespace Service;


abstract class Controller
{
    protected $model = null;
    protected $view = null;
    /*
     * метод парсит переданные GET параметры и возвращает массив формата ключ => значение
     */
    protected function getParams()
    {
        $params = explode('?',$_SERVER['REQUEST_URI']);
        $result = null;
        if (isset($params[1])){
          parse_str($params[1],$result);
        }
        return $result;
    }
}