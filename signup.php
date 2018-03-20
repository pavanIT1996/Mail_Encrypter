<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" href="page1.css" type="text/css" />
	</head>

	<body>
	
		<div id="pageFrame1" >
		<div style="float:left"><img src="pictures/mailencrypter.jpg" width="300" height="100"/> &nbsp;</div>
		<div style="float:none">
		<nav id="nav">
			
			<div style="float:left">		
			<a href="page1.html" >Home</a>
			<a href="aboutus.html">AboutUs</a>
			<a href="contactus.html">ContactUs</a>
			<a href="faq.html">FAQ</a>
			</div>
			<div style="float:right">
			<a href="login.php">LogIn</a>
			<a href="" class="active">SignUp</a>
			</div>
		</nav>
		</div>
		
		<?php
			// define variables and set to empty values
			$fnameErr =""; 
			$lnameErr ="";  
			$emailErr = "";
			
			$fname =""; 
			$email =""; 
			$lname ="";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			   if (empty($_POST["fname"])) {
			     $nameErr = "First name is required";
			   } else {
			     $name = test_input($_POST["fname"]);
			     // check if name only contains letters and whitespace
			     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			       $nameErr = "Only letters and white space allowed"; 
			     }
			   }
			   
			     if (empty($_POST["lname"])) {
			     $nameErr = "Last name is required";
			   } else {
			     $name = test_input($_POST["lname"]);
			     // check if name only contains letters and whitespace
			     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			       $nameErr = "Only letters and white space allowed"; 
			     }
			   }
			   
			   
			   
			   if (empty($_POST["email"])) {
			     $emailErr = "Email is required";
			   } else {
			     $email = test_input($_POST["email"]);
			     // check if e-mail address is well-formed
			     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			       $emailErr = "Invalid email format"; 
			     }
			   }
			     
			}
			
			function test_input($data) {
			   $data = trim($data);
			   $data = stripslashes($data);
			   $data = htmlspecialchars($data);
			   return $data;
			}
		?>
		
		
		<div align="center">
			
		<p><span class="error">* required field.</span></p>	
		<form method="post" action="DB_store.php">
		<h1>Sign Up</h1>
		<table>
			<tr>
				<td><b>Email</b></td>
				<td><input type="email" name="email"></td>
				<span class="error">* <?php echo $emailErr;?></span>
   				<br><br>
			</tr>
			<tr>
				<td><b>First name</b></td>
				<td><input type="text" name="fname"></td>
				<span class="error">* <?php echo $fnameErr;?></span>
  				<br><br>
			</tr>
			<tr>
				<td><b>Last name</b></td>
				<td><input type="text" name="lname"></td>
				<span class="error">* <?php echo $fnameErr;?></span>
  				<br><br>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><b>Confirm-Password</b></td>
				<td><input type="password" name="cpass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"  value="submit"><td>
			</tr>
		</table>
		</form>
		</div>
			<footer>
				<p>
					2015 Batch2
				</p>
			</footer>
	</div>
	</body>
</html>
