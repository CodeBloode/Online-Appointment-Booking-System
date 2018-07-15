<?php

session_start();
?>
<!DOCTYPE HTML>

<div xmlns="http://www.w3.org/1999/html">

    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Admin Account</title>
        <link rel="stylesheet" href="../css/signup.css">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body id="signupbody" color="blue">

    <marquee  behavior="scroll" scrolldelay="10" scrollamount="1" bgcolor="#64b5f6" hspace="5" vspace="8" truespeeed="50">
        <h3 alingn="center"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>
    </marquee>
    <div style="margin-left: 150px; margin-right: 100px; margin-top: -20px; padding-bottom: 15%;height: 300%">
        <form method="post" action="backend/adminsignup.php" name="reg">
        <div id="legend">
        <fieldset>
        <legend align=center> <i> <b> <h3> please fill in all the fields </h3></b></i></legend>

            <div class="maindiv" style="margin-left: 95px">
                <img class="logo" src="../images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h3>Register Here. </h3>
                </div>

                <!-- This has been arranged according to the way fields are in the database
                Above all the signup form should capture all the students details in our database
                -->
                <div id="container" >
                    <p><span class = "error">* required field.</span></p><br>
                    <p> User Name <span class = "error"> *</span></p>
                    <input type="text" name="username" maxlength="18" autocomplete="off" required><br><br>

                    <p>Password <span class = "error"> *</span></p>
                    <input type="password" name="upass" maxlength="40" autocomplete="off" required ><br/><br>

                    <p>Confirm Password <span class = "error"> *</span></p>
                    <input type="password" name="cupass" maxlength="40" autocomplete="off" required ><br/><br>

                    <br>

                    <input type="submit" name="submit" value="Register" onclick="return(submitreg());">
                    <input type="reset" name="clr" value="Clear"><br/>

                    <p> Already registered?<a id="loglink" style="color: green; text-decoration: underline" href="adminlogin.php"> Click Here!</a></p>
                <br>
                </div>
            </div>
            </fieldset>
           
        </form>
        <script>
            function submitreg() {
                var form = document.reg;
                if(form.username.value == "") {
                    alert("Enter user name.");
                    return false;
                }  else if (form.upass.value == "") {
                    alert("Enter password.");
                    return false;
                } else if(form.cupass.value == ""){
                    alert("Enter password.");
                    return false;
                }

            }
        </script>
    </body>
</div>
    </html>

