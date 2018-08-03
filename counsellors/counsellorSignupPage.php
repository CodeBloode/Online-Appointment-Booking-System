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
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
             <!-- MDB core JavaScript -->
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">


       <link  rel="stylesheet" href="../css/stylelogin.css" type="text/css" media="all">
       <link rel="stylesheet" href="../css/signup.css">

            <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">


    </head>

    <body id="signupbody" color="blue">

</div> -->


 <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md ">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="../dean/dean.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../dean/viewsessionsPage.php"> Views Session </a>
            </li>
            <li class="nav-item">
            <a href="../dean/approveschedulePage.php"> Approve Schedules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="../dean/backend/logout.php"> Logout </a>
            </li>
        </ul>
    </nav>
    </div>




    <div style="margin-left: 150px; margin-right: 100px; margin-top: -20px; padding-bottom: 15%;height: 300%">
        <form method="post" action="backend/counsellorsignup.php" name="reg">

        <div id="legend"><br>
        <fieldset>
        <legend align=center style="margin-top: 10px;margin-left: 110px;" > <i> <b> <h4> Fill in the Fields To Register A Counsellor </h4></b></i></legend>

            <div class="maindiv" style="margin-left: auto;">
                <img class="logo" src="../images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head" style="margin-left:auto; margin-right: auto; text-align: center; margin-top: 60px;">
                    <h3 style="padding-left: -70px; margin-top: 20px"> Register Here. </h3>
                </div>

                <!-- This has been arranged according to the way fields are in the database
                Above all the signup form should capture all the students details in our database
                -->
                <div id="container" >
                    <p><span class = "error">* required field.</span></p><br>
                    <p> Full Names <span class = "error"> *</span></p>
                    <input type="text" name="fnames" maxlength="30" autocomplete="off" required><br><br>

                    <p> Counsellor's Number <span class = "error"> *</span></p>


                    <select name="counsno">
                        <option value="">-- NONE --</option>
                        <option value="counsellor 1"> counsellor 1 </option>
                        <option value="counsellor 2"> counsellor 2 </option>
                        <option value="counsellor 3"> counsellor 3 </option>
                        <option value="counsellor 4"> counsellor 4 </option>
                        <option value="counsellor 5"> counsellor 5 </option>
                        <option value="counsellor 6"> counsellor 6 </option>
                        <option value="counsellor 7"> counsellor 7 </option>
                        <option value="counsellor 8"> counsellor 8 </option>
                    </select>
                    <br><br>

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
                    alert("Enter Counsellor's email.");
                    return false;
                }else if (form.fnames.value == "") {
                    alert("Enter Counsellor's full names.");
                    return false;
                }
                else if (form.counsno.value == "") {
                    alert("Assigned Counsellor Number.");
                    return false;
                }

                else if (form.pno.value == "") {
                    alert("Enter Counsellor's Phone number.");
                    return false;
                }
                else if (form.upass.value == "") {
                    alert("Enter  Default password.");
                    return false;
                } else if(form.cupass.value == ""){
                    alert("Confirm Default Password.");
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