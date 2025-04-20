<?php 
session_start();
session_destroy();

if(isset($_SESSION["user"]) && isset($_SESSION['password'])){
    setcookie('user','',time()-3600);
    setcookie('password', '', time()-3600);
}
header('location:index.php');
?>