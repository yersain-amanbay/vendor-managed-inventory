<?php

include_once 'lib/autoload_register.php';

include_once 'application/lib/Dev.php';

include_once 'vendor/autoload.php';

use application\core\Router;


session_start();

$router = new Router;
$router->run();

