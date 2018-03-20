<?php
			echo "<div align='center'>";
		  	$_SESSION['user'] =$un;
			echo "You are login ".$re['Fname']." ".$re['Lname'];
			echo"<form method='post' action='login.php'>";
			echo "<input type='submit' value='logout'>";
			echo "</form>";
			echo "</div>";
			
?>		