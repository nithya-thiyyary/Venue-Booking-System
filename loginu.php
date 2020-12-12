<?php
$error=''; //Variable to Store error message;
if(isset($_POST['Submit'])){
 if(empty($_POST['Username']) || empty($_POST['Password'])){
echo "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "venue_system");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM user_details WHERE Password='$Password' AND Username='$Username'");
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: userpage.html"); // Redirecting to other page
 }
 else
 {
echo "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>