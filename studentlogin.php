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
        <link rel="stylesheet" href="stylelogin.css">
    </head>


    <body id="loginbody" color="blue">
        <header id=signup><a href="studentsignup.php"> Sign Up</a></header>
        <h2 align="center"> <i> Welcome to Egerton University Online Appointment Booking System </i> </h2>

        <form method="post" action="backend/students/login.php">
            <div class="maindiv">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h1> Student Log in </h1>
                </div>

                <div id="container">
                    <p> Registration Number</p>
                    <input type="text" name="regno" maxlength="18" required>

                    <p>Password </p>
                    <input type="password" name="pass" minlength="6" required><br/>

                    <input type="submit" name="login" value="Login" > <br/>
                    <a id="forgotpass" href="#"> <i> Forgot password? </i></a>
                </div>
            </div>
        </form>
    </body>

    </html>

