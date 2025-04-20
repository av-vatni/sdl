<?php 
session_start();
if(!isset($_SESSION['id']) || trim($_SESSION['id']) == ''){
    header('location:index.php');
    exit();
}

include('connection.php');
$query = mysqli_query($conn, "SELECT * FROM user WHERE userid='".$_SESSION['id']."'");
$row = mysqli_fetch_assoc($query);
?>

<!DOCKTYPE html>
<html>
    <head>
        <title>Sucess</title>
    </head>
    <body>
        <h2>Login success</h2>
        <p>Welcome, <?php echo htmlspecialchars($row['username'])?></p>
        <a href="logout.php">Logout</a>
    </body>
</html>