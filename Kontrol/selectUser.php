<?php
include_once 'Koneksi.php';
class M_user {
    private $link;   
    function __construct() {
        $objConn = new dbConnection();
        $this->link = $objConn->getConn();
    }
    public function cekLogin($usr, $pwd){
        $q = "SELECT * FROM login "
                . "WHERE username='$usr' "
                . "AND password='$pwd' "
                . "AND blokir='N'";
        $result = mysqli_query($this->link, $q);
        $data = mysqli_fetch_row($result);
        return $data;
    }
    
    public function updateBlokir($usr){
        $query = "UPDATE login SET blokir='Y' WHERE username='$usr'";
        //echo $query.'<br>';
        mysqli_query($this->link, $query);
    }
}