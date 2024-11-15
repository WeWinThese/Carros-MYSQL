<?php
namespace app;
use app\Database;


class ControllerCarros {

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

//Aqui vai levar o métodos do api
   
}

?>