<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
	
	public function loginAction(){
		echo "Login seite";

	}


	public function registerAction(){
		echo "registeration seite";
		var_dump($this->route);
	}
}

?>