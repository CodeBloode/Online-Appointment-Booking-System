<!DOCTYPE HTML>
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
        <marquee  behavior="scroll" scrolldelay="10" scrollamount="2" bgcolor="#1c7430" hspace="2" vspace="2" truespeeed="50">
            <h3 alingn="center" style="color: LightGrey"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>
        </marquee>
        <!--<div style="background-color: #FFFFFF; margin-left: 150px; margin-right: 150px; margin-top: -30px; padding-bottom: 20%;height: 30%"> -->
        <h2 align="center" style="margin-top: 100px"> <i> Egerton University Appointment Booking System
                <?php
                echo date('  Y');
                ?>
            </i> </h2>
        <div>
            <a href="index.php" style="text-decoration: underline; color: steelblue; float: right;margin-top: -40px;margin-right: 25px; font-size: 20px">Home</a>
        </div>
        <br>
    <style>
</style>
        <div style=" margin-left: 150px; margin-right: 150px; margin-top: -30px; padding-bottom: 20%;height: 30%">


        <form method="post" action="backend/login.php">
            <div class="maindiv" style="alignment: center; margin-left: 260px; padding-bottom: 20px">
                <img class="logo" src="../images/logo.jpg" alt="logo" height=80px" width="80px" align="center">
                <div class="head">
                    <h1> Dean Log in </h1>
                </div>

                <div id="container">
                    <p> User Name</p>
                    <img src="../images/admin.png" alt="logo" height="40" width="40" style="margin-left: -30px"/><input type="text" name="emailusername" maxlength="70" autocomplete="off" required>

                    <p>Password </p>
                    <img src="../images/lock.png" alt="logo" height="40" width="40" style="margin-left: -30px"/> <input type="password" name="password" minlength="6" maxlength="13" autocomplete="off" required><br/>

                    <input type="submit" name="submit" value="Login"> <br/>

                    <a id="forgotpass" href="adminSignupPage.php"> <i> Register new user? </i></a>
                </div>
            </div>
        </div>
        </form>

    </body>
    <div style="text-align: center;background-color: SteelBlue; color: white;padding-bottom: 20px">
        &copy;Copyright 2018 <i>CodeBloode Sons Systems. </i>&checkmark;
    </div>

    </html>

