<?php 
session_start();
include("connection.php");
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = $username AND password = $password ");

    if($query->num_rows > 0){
        $row = mysqli_fetch_array($query);
        $_SESSION['id'] = $row['id'];
        header('location:success.php');
        exit();
    }
}
?>

<!DOCKTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <form method="post" action="login.php">
            Username: <input type="text" name="username" required value="<?php echo $_COOKIE['username']?? ''; ?>" ><br>
            Password: <input type="text" name="password" required value="<?php echo $_COOKIE['password'] ?? '';?>"><br>
            <input type="submit" name="login" value="Login">
        </form>
        <?php 
        if(isset($_SESSION['message'])){
            echo "<p>".$_SESSION['message']."</p>";
            unset($_SESSION['message']);
        }
        ?>
    </body>
</html>