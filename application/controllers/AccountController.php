<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
	
	public function loginAction(){
	    $this->view->layout = "login";
	    $this->view->render(main_title);
	}

	public function profileAction(){
		echo "profile seite";
		var_dump($this->route);
	}
}

?>