<?php 
session_start();
include("connection.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = $username AND password = $password");

    if(mysqli_num_rows($query) == 0){
        $_SESSION['message'] = 'Login failed!';
        header("location:index.php");
    }else{
        $row = mysqli_fetch_array($query);
        if(isset($_POST['remember'])){
            setcookie('user', $row['username'], time() + (86400 * 30));
            setcookie('password', $row['password'], time() + (863400*30));
        }
        $_SESSION['id'] = $row['userid'];
        header('location:success.php');
    }
}else{
    $_SESSION['message'] = "please login";
    header("location:index.php");
}
?>