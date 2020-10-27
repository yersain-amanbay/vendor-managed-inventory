<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
	
	public function loginAction(){
	    $this->view->layout = "custom";
	    $this->view->render("Login");
		echo "Login seite";
	}

	public function profileAction(){
		echo "profile seite";
		var_dump($this->route);
	}
}

?>