<?php

namespace application\controllers;

use application\core\Controller;

class VerwaltungController extends Controller{
	
	public function benutzerAction(){
		echo "Benutzer seite";
	}

    public function kundenAction(){
        echo "Kunden seite";
    }


    public function artikelAction(){
        echo "Artikel seite";
    }

    public function orderAction(){
        echo "Order seite";
    }

    public function rechteAction(){
        echo "Rechte seite";
    }
}

?>