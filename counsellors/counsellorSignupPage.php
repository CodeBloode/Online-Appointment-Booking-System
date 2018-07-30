<?php
session_start();
if(!isset($_SESSION['username'])) {

    header('location:../dean/adminlogin.php?msg=please login');
}
else {
?>
<!DOCTYPE HTML>

<div xmlns="http://www.w3.org/1999/html">

    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Admin Account</title>
        <link rel="stylesheet" href="../css/signup.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
        <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
        <style>
            .error {color: #FF0000;}
        </style>




        <!-- SCRIPTS -->
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/mdb.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
             <!-- MDB core JavaScript -->
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">


       <link  rel="stylesheet" href="../css/stylelogin.css" type="text/css" media="all">

            <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">




   <!--<link rel="stylesheet" type="text/css" href="../css/style.css"> 


    </head>

    <body id="signupbody" color="blue">

<!--    <marquee  behavior="scroll" scrolldelay="10" scrollamount="1" bgcolor="#64b5f6" hspace="5" vspace="8" truespeeed="50">-->
<!--        <h3 alingn="center"> <strong><i>Transforming Lives Through Quality Education.</i></strong></h3>-->
<!--    </marquee>-->
<!--  <div class="topnav">
    <a href="../dean/backend/logout.php"> Logout </a>
    <a href="../dean/viewsessionsPage.php"> Views Session </a>
    <a href="../dean/approveschedulePage.php"> Approve Schedules</a>
    <a href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
    <a href="../dean/dean.php"">Home</a>

</div> -->


 <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md ">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../dean/viewsessionsPage.php"> Views Session </a>
            </li>
            <li class="nav-item">
            <a href="../dean/approveschedulePage.php"> Approve Schedules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="../dean/backend/logout.php"> Logout </a>
            </li>
        </ul>
    </nav>
    </div>



    <div style="margin-left: 150px; margin-right: 100px; margin-top: -20px; padding-bottom: 15%;height: 300%">
        <form method="post" action="backend/counsellorsignup.php" name="reg">
        <div id="legend">
        <fieldset>
        <legend align=center> <i> <b> <h3> Fill In the Following Field To Register A Counsellor </h3></b></i></legend>

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
                    <p> Full Names <span class = "error"> *</span></p>
                    <input type="text" name="fnames" maxlength="30" autocomplete="off" required><br><br>

                    <p> Counsellor's Number <span class = "error"> *</span></p>
                    <input type="text" name="counsno" minlength="12" maxlength="12" autocomplete="off" placeholder="counsellor 1" required><br><br>

                    <p> Email <span class = "error"> *</span></p>
                    <input type="text" name="usermail" maxlength="50" autocomplete="off" required><br><br>

                    <p> Phone No <span class = "error"> *</span></p>
                    <input type="tel" name="pno" maxlength="10" autocomplete="off" required><br><br>

                    <p>Password <span class = "error"> *</span></p>
                    <input type="password" name="upass" maxlength="40" autocomplete="off" required ><br/><br>

                    <p>Confirm Password <span class = "error"> *</span></p>
                    <input type="password" name="cupass" maxlength="40" autocomplete="off" required ><br/><br>

                    <br>

                    <input type="submit" name="submit" value="Register" onclick="return(submitreg());">
                    <input type="reset" name="clr" value="Clear"><br/>

<!--                    <p> Already registered?<a id="loglink" style="color: blue; text-decoration: none" href="counsellorloginPage.php"> Click Here!</a></p>-->
                <br>
                </div>
            </div>
            </fieldset>
           
        </form>
        <script>
            function submitreg() {
                var form = document.reg;
                if(form.usermail.value == "") {
                    alert("Enter email.");
                    return false;
                }else if (form.fnames.value == "") {
                    alert("Enter full names.");
                    return false;
                }
                else if (form.counsno.value == "") {
                    alert("Enter your number as assigned.");
                    return false;
                }

                else if (form.pno.value == "") {
                    alert("Enter Phone number.");
                    return false;
                }
                else if (form.upass.value == "") {
                    alert("Enter password.");
                    return false;
                } else if(form.cupass.value == ""){
                    alert("Enter password.");
                    return false;
                }

            }
        </script>
<div class="footer">
       <?php include "../include/footer.html"?>
    </div>
        
    </body>
</div>
    </html>

<?php }