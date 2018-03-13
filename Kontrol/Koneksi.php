<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tugas1');

class dbConnection {
    private $conn;
    
    function __construct() {
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$link){
            echo 'ERROR:<br>'. mysqli_error($link);
        } else {  
            $this->conn = $link;
        }
    }

    function getConn() {
        return $this->conn;
    }

    function setConn($conn) {
        $this->conn = $conn;
    }
}