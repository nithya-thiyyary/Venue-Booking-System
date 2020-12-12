<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";
$db="venue_system";

//create connection
$conn = new mysqli($servername, $username, $password,$db) or die("Not connected");
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
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$email_id=$_POST['email_id'];
$phoneno=$_POST['phoneno'];


//inserting data into database
$sql="INSERT INTO user_details(Username,Password,email_id,phoneno) values ('$Username','$Password','$email_id','$phoneno')";


if(mysqli_query($conn,$sql))
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