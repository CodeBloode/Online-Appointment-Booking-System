<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
	<title> Welcome </title>
</head>
<body>

<?php include("../include/adminhead.php"); ?>
		
		<form method="post" action="login.php">
			<div class="maindiv">
			<img class="logo" src="../images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
					<div class="head"> 
					<h1>Counsellor Log in</h1></div>
					
				 <div id="container">
				<p> User Name</p>
				 <input type ="text" name="username" required> 
				 
				<p>Password </p>
				<input type="password" name="userpass" required><br/>
		
				<input type="submit" name="login" value="Login"><br/>
				<a id="forgotpass" href="#">Forgot password?</a>
				</div>
				</div>
		</form>

</body>
</html>