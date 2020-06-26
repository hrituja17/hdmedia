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
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = 'INSERT into socialmedia (name, phone, email) values
        ("'.$name.'", "'.$phone.'", "'.$email.'")';

if($conn->query($sql) === TRUE){
    header("Location: social.html");
    exit();
}

$conn->close();
?>