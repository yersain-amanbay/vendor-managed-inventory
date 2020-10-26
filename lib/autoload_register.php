<?php

spl_autoload_register("inc_once");

function inc_once($class){
    $path = str_replace('\\', '/', $class.'.php');
    include_once $path;
}