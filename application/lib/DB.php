<?php

namespace application\lib;

use PDO;

class DB {
    private $conn;

	
	function __construct(){
		echo 'Class DB';
	}

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }


}

?>