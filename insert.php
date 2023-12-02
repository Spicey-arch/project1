<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

 
// Create connection
$connection = new mysqli($servername, 
    $username, $password, $dbname);
 
// Check connection
if ($connection->connect_error) {
    die("Connection failed: "
        . $connection->connect_error);
}
 
$sql = "INSERT INTO user(username,password) VALUES 
    ('$uname', '$pwd')";
 
if ($connection->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>