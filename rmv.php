<php
$server="localhost"
$venuename="root;
$venueid="";
$db="venue system";

$venuename=$_POST['VenueName'];
$venueid=$_POST['Venueid'];

$conn=new mysqli($server,$venuename,$venueid,$db);

$sql="DELETE FROM venuelist where VenueName='$venuename" AND Venueid="$venueid";
if(!mysql_query($query,$conn))
{
die("error in coonecting records")
}
else
{
echo "VENUE ADDED SUCCESSULLY";
}
?>


?>