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

$book=$_POST['booking'];
$sql1="SELECT FROM venue WHERE booking='$book' AND AdminAprroval=1 ";
$sql2="SELECT FROM venue WHERE booking='$book' AND AdminAprroval=2 ";
$sql0="SELECT FROM venue WHERE booking='$book' AND AdminAprroval=0 ";

if(mysqli_query($conn,$sql1))
{
$message="Your Venue is booked";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else if(mysqli_query($conn,$sql2))
{
echo "Your Venue is cancelled";
}
else
{
echo "Your Venue is Pending";
}

?>
