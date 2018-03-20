<?php
	require "DB_connect.php";
	
	$email=$_POST['email'];
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];
	
	
	if(isset($_POST['submit']))
	{
		$sqlstore="insert into users values('$email','$fname','$lname','$pass')";
		if(mysqli_query($con,$sqlstore))
		{
			echo "successful added to the database";
		}
		else 
		{
			echo "
			<script>alert ('your username already got it')</script>";	
		}
	}	
?>