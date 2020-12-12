<!DOCTYPE html>
<head>
<title>aa
</title>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<table id="customers">
<tr>
<th>VenueName</th>
<th>Venueid</th>
<th>Bookingfor</th>
<th>AdminApproval</th>
<th>userid</th>
<th>Bookingid</th>
</tr>
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
$sql= "SELECT VenueName,Venueid,Bookingfor,AdminAprroval,userid,booking FROM venue";
$result=$conn->query($sql);

if($result->num_rows  >  0 )  {
   while($row=$result->fetch_assoc())  {
     echo "<tr><td>".$row["VenueName"]."</td><td>".$row["Venueid"]."</td><td>".$row["Bookingfor"]."</td><td>".$row["AdminAprroval"]."</td><td>".$row["userid"]."</td><td>".$row["booking"]."</td></tr>";
}
echo "</table>";
}
else {
echo "0 result";
}
$conn->close();
?>
</table>

</body>
</html>