<?php
// include_once 'include/backsignin.php';
// $user = new User();
// // Checking for user logged in or not
// /*if (!$user->get_session())
// {
//    header("location:index.php");
// }*/
// if (isset($_POST['submit'])){
//     extract($_POST);
//     $register = $user->reg_user($regno, $username, $phone,$uemail, $upass);
//     if ($register) {
//         // Registration Success
//         echo "<div style='text-align:center'>Registration successful <a href='studentlogin.php'>Click here</a> to login</div>";
//     } else {
//         // Registration Failed
//         echo "<div style='text-align:center'>Registration failed! Email or Username already exits please try again.</div>";
//     }
// }
session_start();
?>
<!DOCTYPE HTML>

<div xmlns="http://www.w3.org/1999/html">

    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>log in</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">
        <link rel="stylesheet" href="css/signup.css">
        <style>
            .error {color: #FF0000;}
        </style>
        <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
        <script src="jquery/jquery.min.js"></script>
    </head>

    <body id="signupbody" color="blue">

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

    <marquee  behavior="scroll" scrolldelay="10" scrollamount="2" bgcolor="#1c7430" hspace="2" vspace="2" truespeeed="50">
        <h3 alingn="center" style="color: LightGrey"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>
    </marquee>
    <div style="background-color: #FFFFFF; margin-left: 150px; margin-right: 100px; margin-top: -20px; padding-bottom: 15%;height: 300%">
        <form method="post" action="students/studentsignUp.php" name="reg">
        <div id="legend">
        <fieldset>
        <legend align=center> <i> <b> <h3> please fill in all the fields </h3></b></i></legend>

            <div class="maindiv" style="margin-left: 95px">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h3>Register Here. </h3>
                </div>

                <!-- This has been arranged according to the way fields are in the database
                Above all the signup form should capture all the students details in our database
                -->
                <div id="container" >
                    <p><span class = "error">* required fields.</span></p><br>
                    <p> Registration Number <span class = "error"> *</span></p>
                    <input type="text" name="regno" maxlength="18" autocomplete="off" required><br><br>

                   <p> Full Name <span class = "error"> *</span></p>
                    <input type="text" name="username" maxlength="40" autocomplete="off" required><br><br>

                   <p> Phone No. <span class = "error"> *</span></p>
                    <input type="tel" name="phone" maxlength="10" autocomplete="off" required> <br><br>

                    <p> Email <span class = "error"> *</span></p>
                    <input type="text" name="uemail" maxlength="30" autocomplete="off" required> <br><br>
                    
                    <p>Password <span class = "error"> *</span></p>
                    <input type="password" name="upass" maxlength="40" autocomplete="off" required ><br/><br>

                    <p>Confirm Password <span class = "error"> *</span></p>
                    <input type="password" name="cupass" maxlength="40" autocomplete="off" required ><br/><br>

                    <br>

                    <input type="submit" name="submit" value="Register" onclick="return(submitreg());">
                    <input type="reset" name="clr" value="Clear"><br/>

                    <p> Already registered?<a id="loglink" style="color: green; text-decoration: underline" href="studentloginPage.php"> Click Here!</a></p>
                <br>
                </div>
            </div>
            </fieldset>
           
        </form>
        <script>
            function submitreg() {
                var form = document.reg;
                if (form.regno.value == "") {
                    alert("Enter Registration No.");
                    return false;
                }
                else if(form.username.value == "") {
                    alert("Enter fullname.");
                    return false;
                }  else if (form.upass.value == "") {
                    alert("Enter password.");
                    return false;
                } else if(form.upass.value == ""){
                    alert("Enter password.");
                    return false;
                }
                else if (form.phone.value == "") {
                    alert("Enter phone Number.");
                    return false;
                } else if (form.uemail.value == "") {
                    alert("Enter email.");
                    return false;
                }
            }
        </script>
    </body>
</div>
<footer class="fixed-bottom text-center footer-copyright py-3" style="background-color: SteelBlue; color: white">
    &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;
</footer>
    </html>

