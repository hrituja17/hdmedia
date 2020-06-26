<?php
    
$server = "localhost";
$username = "root";
$password = "";
$db = "mediasite";

$conn = new mysqli($server, $username, $password, $db);

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

$name = $_POST['name'];
$college = $_POST['college'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = 'INSERT into placements (name, college, phone, email) values
        ("'.$name.'", "'.$college.'", "'.$phone.'", "'.$email.'")';

if($conn->query($sql) === TRUE){
    header("Location: final.html");
    exit();
}

$conn->close();
?>