<!DOCTYPE HTML>
<?php
session_start();
?>
    <html>
    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>log in</title>
       <link rel="stylesheet" href="../css/counslogin.css">
    </head>


    <body id="logbody" color="black">
        <p style="margin-right: 30px; margin-top: -10px; float: right">
    </p>
    <style>
</style>
        <!--<div style="background-color: #FFFFFF; margin-left: 150px; margin-right: 150px; margin-top: -30px; padding-bottom: 20%;height: 30%"> -->
   <h2 align="center" style="margin-top: 100px"> <i> Egerton University Appointment Booking System </i> </h2>
   <br>

        <form method="post" action="backend/counsellorlogin.php" name="clogin">
            <div class="maindiv" style="alignment: center; padding-bottom: 20px">
                <img class="logo" src="../images/logo.jpg" alt="logo" height=80px" width="80px" align="center">
                <div class="head">
                    <h1> Counsellor Log in </h1>
                </div>

                <div id="container">
                    <p> Email or Counsellor Number</p>
                    <img src="../images/admin.png" alt="logo" height="40" width="40" style="margin-left: -30px"/><input type="text" name="username" maxlength="20" autocomplete="off" required>

                    <p>Password </p>
                    <img src="../images/lock.png" alt="logo" height="40" width="40" style="margin-left: -30px"/> <input type="password" name="password" minlength="" maxlength="30" autocomplete="off" ><br/>

                    <input type="submit" name="submit" value="Login"> <br/>
					
<<<<<<< HEAD
					<p>Forgot Password? Click <span><a href="counselloresetpwdPage.php"><i>here</i></a> to reset.</p>
                  
=======
                    <a style="text-decoration: none " href="counsellorSignupPage.php"> Create Account</a>
                    <br>
					<p>Forgot Password? Click <span><a href="counselloresetpwdPage.php"><i>here</i></a> to reset.</p>

>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c

                </div>
            </div>
        </div>
        </form>

    </body>

    </html>

