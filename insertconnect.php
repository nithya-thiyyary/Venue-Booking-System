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
$VenueName=$_POST['VenueName'];
$Venueid=$_POST['Venueid'];

//inserting data into database
$sql="INSERT INTO venuelist(VenueName,Venueid) values('$VenueName','$Venueid')";
if(mysqli_query($conn,$sql))
{
	$message = "Your data is inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>