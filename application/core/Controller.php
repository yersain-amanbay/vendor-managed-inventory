<?php

namespace application\core;

use application\core\View;

abstract class Controller{
	
	public $route;
    public $view;
    public $model;

	public function __construct($route){
		$this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

        require_once 'application/config/conf.main.php';

        if($route['action'] != 'login'){
            if(empty($_SESSION['ok']) && !$_SESSION['ok']){
                header("Location: ".subdomain."/account/login");
            }
        }


	}

	public function loadModel($name){
	    $path = 'application\models\\'.ucfirst($name);
	    if(class_exists($path)){
	        return new $path;
        }
    }

}


