<?php


namespace Service;

use PDO;

class Db
{
    static $link;
    protected $config;

    function __construct($config)
    {
        $this->config = $config;
        $this->connect();

    }

    protected function connect()
    {
            self::$link = new PDO("mysql:host=".$this->config->host.";
                                        dbname=".$this->config->dbname,
                                        $this->config->user,
                                        $this->config->pass
                                 );

    }

}