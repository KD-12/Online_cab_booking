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
$select=$_GET['status'];
if(isset($_GET['submit'])
{
	if($result['Status']=='Free')
{
  echo"You shall get a customer";
}
}
?>