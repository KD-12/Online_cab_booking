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
$query="SELECT * FROM driver";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
if($_POST['login']=="")
{
	echo"Please Enter the required details...<a href='http://localhost/login.html'>Go back</a>";
	exit();
}
if($row["Driver_ID"]!=$_POST['login'])
{
	echo"Invalid Driver Id.....<a href='http://localhost/login.html'>Go back</a>";
}
if($_POST["driverpass"]=="")
{
	echo"Enter the required Details...<a href='http://localhost/login.html'>Go back</a>";
}
if($row["Password"]!=$_POST["driverpass"])
{
	echo"Invalid Password...<a href='http://localhost/login.html'>Go back</a>";
}

else
{
	header("Location:http://localhost/driver.html");
}
mysqli_close($conn);
?>