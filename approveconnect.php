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

$booking=$_POST['Booking'];
 if(isset($_POST['Confirm'])){
  $sql = "UPDATE venue SET AdminAprroval='1' WHERE booking='$booking';
}
 if(isset($_POST['Cancel'])){
  $sql = "UPDATE venue SET AdminAprroval='2' WHERE booking='$booking';
}
?>