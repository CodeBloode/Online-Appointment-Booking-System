<!Doctype HTML>
<!DOCTYPE HTML>

<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
<head>
    <title>Chat App</title>
    <link rel="stylesheet" type="text/css" href="../css/coverstyle.css">
    <script src="../jquery/jquery.min.js"></script>

</head>
    
<body>
<!---chat Text Area-->
<div class="row">
    <div class="container">
        <div class ="col-md-8 col-md-offset-2 display">
        	<form>
            <centre><h1>WELCOME TO CHAT </h1></center>
            <div class="message">log In</div>
            <form action="login.php" method="post">
            	<label><b>UserName</b></label>
                <input type="text" name="uName" placeholder="UserName">
                <label><b>PassWord</b></label>
                <input type="password" name="pWord" placeholder="PassWord">
                <button style="background-color: #0000FF:color: SteelBlue;" type="submit"<b>signup</b></button>
            </form>
            <form>
            <form action="signup.php" method="post">
            	<h2>Please Sign UP Here</h2>
            	<div class="col-md-4 mb-3">
            	<label>UserName</label>
            	<input type="text" name="uname" placeholder="UserName"><br>
            	<label>Email Add:</label>
            	<input type="text" name="email" placeholder="Email"><br>
            	<label>PassWord</label>
            	<input type="text" name="Password" placeholder="Password"><br><br>
            </form>
</div>


</body>
<div style="text-align: center;background-color: SteelBlue; color: white"  class="fixed-bottom">
        &copy;Copyright 2018. <i>CodeBloode Sons Systems. </i>&checkmark;
    <br><br>
    </div>
</html>





