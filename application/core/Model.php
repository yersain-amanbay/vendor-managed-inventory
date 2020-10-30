<?php


namespace application\core;

use application\lib\DB;

abstract class Model extends DB
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

}