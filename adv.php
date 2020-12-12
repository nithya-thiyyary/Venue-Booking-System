<?php
$server="localhost";
$venuename="root";
$venueid="";
$db="venue_system";
$conn=new mysqli($server,$venuename,$venueid,$db);
$venuename=$_POST['VenueName'];
$venueid=$_POST['Venueid'];
$sql="INSERT INTO venuelist (VenueName,Venueid) values('$venuename','$venueid');
if(mysqli_query($query,$conn))
{
}
?>






