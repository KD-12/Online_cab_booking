<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
$servername="localhost";
$username="root";
$dbname="test";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
mysqli_select_db($conn,"test");
$name = mysqli_real_escape_string($conn, $_POST['name']);
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$email_address = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['mob_no']);

$city = mysqli_real_escape_string($conn, $_POST['city']);

$sql = "INSERT INTO Customer (name, user, pass, email_address, number, city)VALUES ('$name', '$user', '$pass', '$email_address', '$number', '$city')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
