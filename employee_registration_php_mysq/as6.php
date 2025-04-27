<?php 

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

// Inserting values
$stmt = $conn->prepare("INSERT INTO registration (fname, mname, lname, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$fname, $mname, $lname, $pass);

if($stmt->execute()){
    echo "Record inserted<br><br>";
}else{
    echo "Error".$stmt->error;
}

$stmt->close();

// Display
$result = $conn->query("SELECT * FROM registration");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID ". $row["ID"]."|";
        echo "Name: ".$row["fname"]." ".$row["mname"]." ".$row["lname"]." ";
        echo "Password: ".$row["password"];
    }
}else{
    echo "No records";
}

$conn->close();
?>