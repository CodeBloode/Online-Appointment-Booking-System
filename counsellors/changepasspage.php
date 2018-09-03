<?php

session_start();

if ((!isset($_SESSION['counsellorName'])) && (!isset($_SESSION['counsellorNumber']))){

    header('location:counsellorloginPage.php');

}else

{

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

                        <form class="form-signin" method="post" action="changepasspage.php">
                            <h2 class="form-signin-heading">Change Password</h2><hr />

                            <div class="row">


                                <input type="password" class="input-block-level" placeholder="Current Password" name="currentnewpass"  autocomplete="off" required/>


                                <input type="password" class="input-block-level" placeholder=" New Password" name="newpass"  autocomplete="off" required/>


                                <input type="password" class="input-block-level" placeholder="Confirm New Password" name="cnewpass"  autocomplete="off" required/>


                                <br><br>

                                <hr/>
                                <button class="btn btn-large btn-primary" type="submit" name="change">Change Password</button>
                                <a href="counsellor.php" button class="btn btn-large btn-primary" > <span class="glyphicon glyphicon-hand-left"></span> Back </button></a>

                            </div> <!--end form group div-->
                        </form>


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

if(isset($_POST['change'])){

    include("backend/changepass.php");

        $newpass = $_POST['newpass'];
        $c_newpass = $_POST['cnewpass'];
        $current_pass=$_POST['currentnewpass'];

        $changePwdobj = new ChangePwd($newpass,$c_newpass,$current_pass);

    $changePwdobj->changePassword($_SESSION['counsellorName'],$_SESSION['counsellorNumber']);

}


?>