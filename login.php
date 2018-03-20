<!doctype html>
<html>
	
	<head>
		
			<link rel="stylesheet" href="page1.css" type="text/css" />
			
	</head>
	<body>
	
		<div style="float:left">
			<img src="pictures/mailencrypter.jpg" width="300" height="100"/> &nbsp;
		</div>
		<div style="float:none">
		<nav id="nav">
			
			<div style="float:left">		
			<a href="page1.html" >Home</a>
			<a href="aboutus.html">AboutUs</a>
			<a href="contactus.html">ContactUs</a>
			<a href="faq.html">FAQ</a>
			</div>
			<div style="float:right">
			<a href="" class="active">LogIn</a>
			<a href="signup.html">SignUp</a>
			</div>
		</nav>
		</div>
		
		</br></br>
		
		<?php	
		session_start();
		echo "<div align='center'>";
		echo "<form method='post' action='loggedin.php' >";
		echo "<h1>Login</h1>";
		echo "<table align='center'>";
		echo "<tr>";
		echo "<td><b>Email: </b></td>";
		echo "<td><input type='email' name='email'></td>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td><b>Password : </b></td>";			
		echo "<td><input type='password' name='pass'></td>";			
		echo "</tr>";
		echo "</table>";
		echo "<br/><br/>";				
		echo "<input type='submit' value='Login'>";				
		echo "</form>";
		echo "</div>";
		?>
		
		</br></br></br></br>
		
			<div align="center" id="footer">
					&copy; 2015 Batch2
			</div>

	</body>
</html>

