<?php

namespace application\controllers;

use application\core\Controller;

class AuswertungenController extends Controller{
	
	public function allgemeinAction(){
		echo "Allgemein seite";
	}

    public function abrechnungAction(){
        echo "Abrechnung seite";
    }

    public function statistikAction(){
        echo "Statistik seite";
    }
}

?>