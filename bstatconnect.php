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

$book=$_POST['booking'];

?>
