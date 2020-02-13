<?php
ini_set('display_errors','on');

require_once ('../vendor/autoload.php');


new Service\Db(new Config\Db());
new Service\Router();
