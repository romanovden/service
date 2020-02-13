<?php


namespace App\models;


use Service\Db;
use Service\Model;

class RepairModel extends Model
{
    public function getOrders()
    {

    }
    public static function listOrders()
    {
        $result = Db::$link->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $r){
            //print_r($r);
        }

    }
}