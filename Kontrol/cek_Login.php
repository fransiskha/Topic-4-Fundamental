<?php
session_start();
include_once 'selectUser.php';
$usr = $_POST['username'];
$pwd = $_POST['pass'];

$objUsr = new M_user();
$data = $objUsr->cekLogin($usr, $pwd);

if (count($data) > 0) {
    $_SESSION['jmlgagal']=0;
    $_SESSION['logedin']=1;
    header('location:../beranda.php');
} else {
    
    if($usr=="" || $usr==""){
    $_SESSION['jmlgagal']=0;    
    header('Location:../index.php');
    }else{
    $_SESSION['jmlgagal']++;
   
    if($_SESSION['jmlgagal'] < 3 ){        
        header('Location:../index.php');
        
    } else {
        $objUsr->updateBlokir($usr);
        header('location:../blokir.php');
    }
    }
}
?>