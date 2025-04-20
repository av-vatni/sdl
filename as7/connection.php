<?php 
$conn = mysqli_connect("localhost", "root", "", "cookie");

if($conn->connect_error){
    die("Connection failed!".$conn->connect_error);
}
?>