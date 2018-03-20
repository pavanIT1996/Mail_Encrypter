<?php
$host = "localhost";
$user = "root";
$pass= "pavan";
$db ="login";

$con=mysqli_connect($host,$user,$pass);

if(!$con || !mysqli_select_db($con,$db))
	{
		die(mysqli_error());
	}
else
	//echo "sucessful";
?>