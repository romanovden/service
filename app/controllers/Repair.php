<?php


namespace app\controllers;


use Service\Controller;
use Service\Db;
use PDO;
use service\Router;

class Repair extends Controller
{
    public function mainExec()
    {
        $this->getParams();
    }
    public function listOrders()
    {
        Router::$route['model'];
    }



}

/*
 * SELECT orders.defect, orders.id, orders.received, model.title as model, manufacturer.title as manufacturer, users.name, users.surname, users.patronymic, users.phone FROM `orders`, `model`, `manufacturer`, `users` WHERE orders.id = 1 AND model.id = orders.model_id AND manufacturer.id = model.manufacturer_id AND users.id = orders.client_id
 */