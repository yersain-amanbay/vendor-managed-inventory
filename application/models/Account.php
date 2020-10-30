<?php


namespace application\models;
use application\lib\DB;
use application\models\classes\account\Login;

class Account extends DB
{
    protected $username;
    protected $surname;
    protected $userid;
    protected $checkid;
    protected $mandant;

    protected $conn;

    /**
     * Account constructorÁ
     */
    public function __construct()
    {
        //echo "Account constructor.";
        //var_dump($_POST);

        $this->conn = $this->getConn();
    }

    public function login(){
        if(isset($_POST['loguser']) && isset($_POST['logpass']) && !empty($_POST)){
            return new Login();
        }
    }


    public function palo(){

    }

    public function userEdit(){

    }

}