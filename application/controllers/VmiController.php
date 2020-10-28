<?php

namespace application\controllers;

use application\core\Controller;

class VmiController extends Controller{
	
	public function kundenAction(){
	    $this->model->getKunden();
		$this->view->render("Kunden");
	}

    public function artikelAction(){
        $this->view->render("Artikel");
    }

    public function redirectAction(){
        header("Location: vmi/kunden");
    }
}
