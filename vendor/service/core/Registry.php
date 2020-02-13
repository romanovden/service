<?php


namespace Service;


class Registry
{
    public static $params = [];

    public static function get($key)
    {
        if (in_array($key,self::$params)) return $params[$key];
        else return null;
    }

    public static function set($key, $value)
    {
        if (!in_array($key,self::$params))
        self::$params[$key] = $value;
    }

}