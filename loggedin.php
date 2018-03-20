<!doctype html>
<html>
	
	<head>
		
		<link rel="stylesheet" href="page1.css" type="text/css" />
		<script src="functions.js"></script>
		
		
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
			</nav>
		</div>
		
		<br/><br/>
		
		<?php
		  require 'DB_connect.php';
		  
		  session_start();
		  $un = $_POST['email'];
		  $sql1= "select * from users where Email='$un'";
		  $res = mysqli_query($con,$sql1);
		  $re = mysqli_fetch_array($res);
			
		  
		
		 if($_POST['pass'] == $re['password'])
		  {
		  	echo "<div align='center'>";
		  	$_SESSION['user'] =$un;
			echo "You are login ".$re['Fname']." ".$re['Lname'];
			echo"<form method='post' action='login.php'>";
			echo "<input type='submit' value='logout'>";
			echo "</form>";
			echo "</div>";
		  }
		  else if($_POST['pass'] != $re['password'])
		  {
		  		
				header('location:Error.php'); //
		  }
		?>
		
		<br/><br/>
		
		<div align="center">
			<form method="post" action="Encrypt()">
			<table>
				<tr><td>To:</td><td><input type="email" name="Remail" /></td></tr>
				<tr><td>From:</td><td><input type="email" name="Semail" /></td></tr>
				<tr><td>Subject:</td></tr>
				<tr><td></td><td><input type="text" name="Subject" /></td></tr>
				<tr><td>Message:</td></tr>
				<tr><td></td><td><textarea id="plainText" rows="5" cols="40"></textarea></td></tr>
			</table> 
			</form>
		</div>
		
		<br/><br/>

		<table align="center" >
			<tr style="float:left">
				<td>Ciphertext:</td>
				<td>The ciphertext should appear here:<br><textarea id="cipherText" rows="5"> </textarea></td>
			</tr>
		
			<tr style="float:right">
				<td>PlainText:</td>
				<td>The plain text should appear here:<br><textarea id="plainText2" rows="5"> </textarea></td>
			</tr>
		</table>
		
		<br/><br/>

		<div align="center">
			<input id="but1" type="button" value="Encipher" onclick="Encrypt()">
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			shift: <select id="key" name="key" size="1"> 
				  <option value="-1" selected="selected">Select Key</option> 	
				  <option value="0">0</option> 
				  <option value="1">1</option> 
				  <option value="2">2</option> 
				  <option value="3">3</option> 
				  <option value="4">4</option> 
				  <option value="5">5</option> 
				  <option value="6">6</option> 
				  <option value="7">7</option> 
				  <option value="8">8</option> 
				  <option value="9">9</option> 
				  <option value="10">10</option> 
				  <option value="11">11</option> 
				  <option value="12">12</option> 
				  <option value="13">13</option> 
				  <option value="14">14</option> 
				  <option value="15">15</option> 
				  <option value="16">16</option> 
				  <option value="17">17</option> 
				  <option value="18">18</option> 
				  <option value="19">19</option> 
				  <option value="20">20</option> 
				  <option value="21">21</option> 
				  <option value="22">22</option> 
				  <option value="23">23</option> 
				  <option value="24">24</option> 
				  <option value="25">25</option> 
			</select>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input id="but2" type="button" value="Decipher" onclick="Decrypt()">
		
		</div>

				
		<br/><br/><br/><br/>

		<div align="center" id="footer">
				&copy; 2015 Batch2
		</div>
				

</body>
</html>