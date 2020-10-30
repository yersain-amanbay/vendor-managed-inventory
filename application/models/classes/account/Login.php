<?php

namespace application\models\classes\account;

use application\lib\DB;


class Login extends DB
{
    private $email;
    private $pass;


    public function __construct()
    {
        if(!empty($_POST['loguser']) && !empty($_POST['logpass'])){
            $this->email = $_POST['loguser'];
            $this->pass = $_POST['logpass'];

            if($this->checkValues($this->email, $this->pass)){
                return $this->signIn($this->email, $this->pass);
            }

        }
    }



    private function signIn($email, $pass){

        $logoutput = "Die Zugangsdaten sind leider ung&uuml;ltig!";


        @session_start();
        $_SESSION["ok"] = true;
        $_SESSION["userid"] = 35;
        $_SESSION["starttime"] = time();
        $_SESSION["ckid"] = "DWM23DJOI233DNWJ2";
        header("Location: ".subdomain);

        //return $_POST['logout'] = $logoutput;
    }


    private function checkValues($email, $pass){
        $email_str = strlen(preg_replace("/\s+/", " ", htmlentities($email, ENT_QUOTES)));
        if(strlen($email) >= 6 && $email_str >= 6 && strlen($email) == $email_str && isset($pass) && strlen($pass) >= 8){
            return true;
        }
        return false;
    }



}