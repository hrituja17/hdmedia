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
$address = $_POST['address'];
$date = $_POST['date'];
$college = $_POST['college'];
$qual = $_POST['qual'];
$spec = $_POST['spec'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];


$qualarray = array("Under Graduate" => "Under Graduate", "Graduate" => "Graduate", "Post Graduate" => "Post Graduate");
$specarray = array("Advertising" => "Advertising", "Content Writing"=>"Content Writing", "Events"=>"Events", "Finance"=>"Finance", "HR"=>"HR", "IT" => "IT", "Journalism"=>"Journalism", "Marketing"=>"Marketing", "Operations"=>"Operations", "Public Relation" => "Public Relation", "Social Media"=>"Social Media");

$sql = 'INSERT into internships (name, address,city, phone, email, date, college, qual, spec) values
        ("'.$name.'","'.$address.'","'.$city.'","'.$phone.'","'.$email.'", "'.$date.'", "'.$college.'", "'.$qualarray[$qual].'","'.$specarray[$spec].'")';

if($conn->query($sql) === TRUE){
    header("Location: intern.html");
    exit();
}

$conn->close();
?>