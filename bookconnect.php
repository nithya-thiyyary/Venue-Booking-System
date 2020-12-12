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

//reading data through html form.

$VenueName=$_POST['VenueName'];
$Venueid=$_POST['Venueid'];
$Bookingfor=$_POST['Bookingfor'];

$userid=$_POST['userid'];
$booking=uniqid();



//inserting data into database
$sql="INSERT INTO venue(VenueName,Venueid,Bookingfor,userid,booking) values('$VenueName','$Venueid','$Bookingfor','$userid','$booking')";

if(mysqli_query($conn,$sql))
{
	$message = "information accepted please wait for the confirmation and your booking id is $booking";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>