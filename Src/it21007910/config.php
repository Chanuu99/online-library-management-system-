<?php
$host="localhost";
$userName="root";
$password="";
$db="online_libaray";



$conn=mysqli_connect($host,$userName,$password,$db);
if($conn)
{
/*echo "Connection Successfull";*/
}else
{
echo"Connection unsuccessful";
}
?>