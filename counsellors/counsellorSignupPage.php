<?php
session_start();
if(!isset($_SESSION['username'])) {

    header('location:../dean/adminlogin.php?msg=please login');
}
else {
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Counselling Department</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body id="login">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
        <p>
        <div style="font-size: 30px; color: lightgrey; text-align: center"> <i>Egerton University Counselling Department.</i></div>
        </p>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-login">
                    <!--Sign up form -->

                    <form class="form-signin" method="post" action="backend/counsellorsignup.php" name="reg">
                        <h2 class="form-signin-heading">Register Counsellor </h2><hr />

                        <div class="row">

                            <input type="text" class="input-block-level" placeholder="Full Names" name="fnames" autocomplete="off" required/>
                            <br>
                            <select name="counsno" style="margin-left: 93px; height:30px; width: 180px; margin-bottom: -12px; margin-top: 5px;" class="form-control">
                                <option value="" disabled selected>Counsellor Number</option>
                                <option value="counsellor 1"> counsellor 1 </option>
                                <option value="counsellor 2"> counsellor 2 </option>
                                <option value="counsellor 3"> counsellor 3 </option>
                                <option value="counsellor 4"> counsellor 4 </option>
                                <option value="counsellor 5"> counsellor 5 </option>
                                <option value="counsellor 6"> counsellor 6 </option>
                                <option value="counsellor 7"> counsellor 7 </option>
                                <option value="counsellor 8"> counsellor 8 </option>
                            </select>
                            <br>

                            <input type="email" class="input-block-level" placeholder="Email address" name="usermail"  autocomplete="off" required/>

                            <input type="text" class="input-block-level" placeholder="Phonenumber" name="pno" autocomplete="off" required/>

                            <input type="password" class="input-block-level" placeholder="Password" name="upass"  autocomplete="off" required/>


                            <input type="password" class="input-block-level" placeholder="Confirm Password" name="cupass"  autocomplete="off" required/>


                            <br><br>

                            <hr/>
                            <button class="btn btn-large btn-primary" type="submit" name="submit" onclick="return(submitreg());">Save</button>
                            <a href="../dean/dean.php" button class="btn btn-large btn-primary" > <span class="glyphicon glyphicon-hand-left"></span> Back </button></a>

                        </div> <!--end form group div-->
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

                </div> <!--panel-->
            </div> <!-- /row -->
        </div> <!-- /col -->

    </div> <!-- /container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    <br><br><br><br>
    <br><br>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p style=""> &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;</p>
            </div>
        </div>
    </footer>
    </html>

<?php }

