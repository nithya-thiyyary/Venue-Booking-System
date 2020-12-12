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
$b=2;
  $sql = "UPDATE venue SET AdminAprroval='$b' WHERE booking='$book'";
if(mysqli_query($conn,$sql))
{
	$message = "Your data is updated";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not updated";
	echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
