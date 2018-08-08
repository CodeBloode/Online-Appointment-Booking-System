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
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">
        <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
        <script src="jquery/jquery.min.js"></script>
    </head>


    <body id="loginbody" color="blue">
    <!--    This code purpose is for ajax animations only during page load-->
    <div class="se-pre-con"></div>
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/submitting.gif) center no-repeat #fff;
        }
    </style>
    <!--    This is used to load the animation during fetching the data from the database to display for the records that are available-->
    <script type="text/javascript">
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

    <!--   The ajax animation page load ends here -->
        <p style="margin-right: 30px; margin-top: -10px; float: right">
    </p>
<marquee  behavior="scroll" scrolldelay="10" scrollamount="2" bgcolor="#1c7430" hspace="2" vspace="2" truespeeed="50">
    <h3 alingn="center" style="color: LightGrey"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>
   </marquee>
        <div style="margin-left: 150px; margin-right: 150px; margin-top: -20px; padding-bottom: 20%;height: ">
   <h2 align="center" style="margin-top: 50px"> <i> Welcome to Egerton University Appointment Booking System
           <?php
           echo date('  Y');
           ?>
       </i> </h2>
	   <div>
	   <a href="index.php" style="text-decoration: underline; color: steelblue; float: right;margin-top: -40px;margin-right: -35px; font-size: 20px">Home</a>
	   </div>
   <br>

        <form method="post" action="students/studentlogin.php" name="login">
            <div class="maindiv" style="alignment: center; margin-left: 260px; padding-bottom: 20px">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h1> Student Log in </h1>
                </div>
                <div class=".container">

                <div id="container">
                    <p> Registration Number or Email</p>
                    <img src="images/admin.png" alt="logo" height="40" width="40" style="margin-left: -30px"/><input type="text" name="emailusername" maxlength="70" autocomplete="off" required>

                    <p>Password </p>
                    <img src="images/lock.png" alt="logo" height="40" width="40" style="margin-left: -30px"/> <input type="password" name="password" minlength="8" autocomplete="off" required><br/>

                    <input type="submit" name="submit" value="Login" onclick="return(submitlogin());">
                    <input type="signup" name="submit" value="signup" onclick="window.location.href='studentsignupPage.php'">
                    <br>
                

                    
                    <a id="forgotpass" href="students/forgot_pw.php"> <i> Forgot Password? </i></a>
                </div>
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
<footer class="fixed-bottom text-center footer-copyright py-3" style="background-color: SteelBlue; color: white">
    &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;
</footer>
    </html>

