<!DOCTYPE HTML>
<?php
session_start();

?>
    <html>
<!--Nothing changed yet-->
    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>log in</title>
       <link rel="stylesheet" href="css/stylelogin.css">
    </head>


    <body id="loginbody" color="blue">
        <p style="margin-right: 30px; margin-top: -10px; float: right">
    </p>
    <style>
</style>
<marquee  behavior="scroll" scrolldelay="10" scrollamount="2" bgcolor="#64b5f6" hspace="5" vspace="8" truespeeed="50">
    <h3 alingn="center"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>
   </marquee>
        <div style="margin-left: 150px; margin-right: 150px; margin-top: -20px; padding-bottom: 20%;height: ">
   <h2 align="center" style="margin-top: 50px"> <i> Welcome to Egerton University Appointment Booking System
           <?php
           echo date('  Y');
           ?>
       </i> </h2>
   <br>

        <form method="post" action="students/studentlogin.php" name="login">
            <div class="maindiv" style="alignment: center; margin-left: 260px; padding-bottom: 20px">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h1> Student Log in </h1>
                </div>

                <div id="container">
                    <p> Registration Number or Email</p>
                    <img src="images/admin.png" alt="logo" height="40" width="40" style="margin-left: -30px"/><input type="text" name="emailusername" maxlength="70" autocomplete="off" required>

                    <p>Password </p>
                    <img src="images/lock.png" alt="logo" height="40" width="40" style="margin-left: -30px"/> <input type="password" name="password" minlength="6" autocomplete="off" required><br/>

                    <input type="submit" name="submit" value="Login" onclick="return(submitlogin());"> <br/>
                    <a id="forgotpass" href="studentsignupPage.php"> <i> Register new user? </i></a>
                </div>
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

