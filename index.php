<?php

include_once 'lib/autoload_register.php';

include_once 'application/lib/Dev.php';

use application\core\Router;



session_start();

$router = new Router;
$router->run();

