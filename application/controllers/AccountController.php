<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{
	
	public function loginAction(){

        if(isset($_SESSION['ok']) && $_SESSION['ok']){
            header("Location: ".subdomain);
        }

        $this->model->login();

	    $this->view->layout = "login";
	    $this->view->render(main_title);
	}

    public function logoutAction(){
        session_destroy();
        header("Location: ".subdomain);
    }


	public function profileAction(){
		echo "profile seite";
		var_dump($this->route);
	}
}

