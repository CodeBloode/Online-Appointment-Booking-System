<!DOCTYPE html>
<html>
<head>

		<link rel="text/css" href="style.css"/>
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>counsellor log in</title>
	
</head>
<body id="loginbody">

		
		<form method="post" action="login.php">
			<div class="maindiv" style="alignment: center; margin-left: 300px; padding-bottom: 20px">
			<img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
					<div class="head"> 
					<h1>Counsellor Log in</h1></div>
					</div>
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
		</div>

</body>
</html>
