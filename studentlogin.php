<!DOCTYPE HTML>
<?php
session_start();
include_once 'include/backsignin.php';

$user = new User();
if (isset($_POST['submit'])) {
    extract($_POST);
    $login = $user->check_login($emailusername, $password);
    if ($login) {
        // Registration Success
        header("location:index.php");
    } else {
        // Registration Failed
        echo 'Wrong username or password';
    }
}

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
        <p style="margin-right: 30px; margin-top: -10px; float: right">
    </p>
    <style>
</style>
       <h2 align="center" style="margin-top: 50px"> <i> Welcome to Egerton University Online Appointment Booking System </i> </h2>
<marquee behavior="alternate" scrollamount="5">
    <h3 alingn="center"> <strong><i>Transforming Lives Through Quality Education</i></strong></h3>
   </marquee>

        <form method="post" action="#" name="login">
            <div class="maindiv">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h1> Student Log in </h1>
                </div>

                <div id="container">
                    <p> Registration Number or Email</p>
                    <input type="text" name="emailusername" maxlength="70" autocomplete="off" required>

                    <p>Password </p>
                    <input type="password" name="password" minlength="6" required><br/>

                    <input type="submit" name="submit" value="Login" onclick="return(submitlogin());"> <br/>
                    <a id="forgotpass" href="studentsignup.php"> <i> Register new user? </i></a>
                </div>
            </div>
        </form>
        <script>
            function submitlogin() {
                var form = document.login;
                if (form.emailusername.value == "") {
                    alert("Enter email or username.");
                    return false;
                } else if (form.pass.value == "") {
                    alert("Enter password.");
                    return false;
                }
            }
        </script>
    </body>

    </html>

