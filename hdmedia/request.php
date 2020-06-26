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
$org = $_POST['org'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];

$sql = 'INSERT into requests (name, email, org, phone, city, message) values
        ("'.$name.'", "'.$email.'","'.$org.'","'.$phone.'","'.$city.'","'.$message.'")';

if($conn->query($sql) === TRUE){
    header("Location: request.html");
    exit();
}

$conn->close();
?>