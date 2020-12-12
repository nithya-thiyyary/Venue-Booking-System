<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password) or die("Not connected");
if($conn)
{
	echo "connected";
	echo "<br>";
}
if(!mysqli_select_db($conn,'venue_system'))
{
	echo "Database not found";
	echo "<br>";
}

//reading data through html form
$username=$_POST['Username'];
$password=$_POST['Password'];
$email=$_POST['email_id'];
$phone=$_POST['phoneno'];


//inserting data into database
$sql="INSERT INTO user_detail(Username,Password,email_id,phoneno) values ('$username','$password','$email','$phone')";


if(!mysqli_query($conn,$sql))
{
	$message = "Your data is INSERTED";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>