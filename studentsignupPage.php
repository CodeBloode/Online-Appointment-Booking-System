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
//         echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
//     }
// }
session_start();
?>
<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/html">

    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>log in</title>
        <link rel="stylesheet" href="css/signup.css">
    </head>

    <body id="signupbody" color="blue">
            

        <form method="post" action="students/studentsignUp.php" name="reg">
        <div id="legend">
        <fieldset>
        <legend align=center> <i> <b> <h3> please fill in all the fields </h3></b></i></legend>

            <div class="maindiv">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h3>Register Here. </h3>
                </div>

                <!-- This has been arranged according to the way fields are in the database
                Above all the signup form should capture all the students details in our database
                -->
                <div id="container">
                    <p> Registration Number</p>
                    <input type="text" name="regno" maxlength="18" autocomplete="off" required><br><br>

                   <p> Full Name </p>
                    <input type="text" name="username" maxlength="40" autocomplete="off" required><br><br>

                   <p> Phone No. </p>
                    <input type="text" name="phone" maxlength="10" autocomplete="off" required> <br><br>

                    <p> Email </p>
                    <input type="text" name="uemail" maxlength="30" autocomplete="off" required> <br><br>
                    
                    <p>Password </p>
                    <input type="password" name="upass" maxlength="40" required ><br/><br>
                    <p>Confirm Password </p>
                    <input type="password" name="cupass" maxlength="40" required ><br/><br>
                    <br><br>
                    <input type="submit" name="submit" value="Register" onclick="return(submitreg());">
                    <input type="reset" value="Clear"><br/>
                    <p> Already registered?<a id="loglink" style="color: black" href="studentloginPage.php"> Click Here!</a></p>
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

    </html>

