<?php
/**
 * FILE TITLE: INDEX.PHP
 * This program is a website demo for a fictitious charity 'Students Page', featuring a volunteer registration with email verification app. PHP mailer is used.  TO INVOKE THE WORKING PORTION OF THIS APP PLEASE REGISTER AS A VOLUNTEER to test the registration, validation, verification, reset, signin and signout files. You will need a valid email address and may need to check the junk folder for a verification email from 'Community Cupboard.' Just follow the links and instructions provided. 
 * 
 *
 *
 */
				session_start();
				require_once 'class.user.php';
				$user_login = new USER();

						// include phpmailer class
						require_once '../PHPMAILER/mailer/class.phpmailer.php';
						// creates object
						$mail = new PHPMailer(true);

						//if the user is logged in already go straight to the home page
						if($user_login->is_logged_in()!="")
						{
							$user_login->redirect('../student.php');
						}

								if(isset($_POST['btn-login']))
								{
									$email = trim($_POST['txtemail']);
									$upass = trim($_POST['txtupass']);
                                   // $regno = trim($_POST['txtregno']);

									if($user_login->login($email,$upass))//,$regno
									{
										$user_login->redirect('../student.php');
									}
								}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Counselling Department" content="Homepage with signup/sign in and email verification">

    <title>Student's home page</title>

    <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
        <div class="container" style="background-color:; width: 100%; float: right;margin-right: -700px">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>    
                <a class="navbar-brand" href="#">
                    <div style="width: 150px; height: 50px; color:#FFFFFF; background: #1dc116; text-align: center;
                    padding: 15px 0px; margin-top: -17px">Home </div>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <dibv class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="../index.php">Back</a>
                    </li>

                </ul>
            </dibv>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" >
<h1> Counselling Department <span id= "header_subtitle"> Service to All.</span></h1>
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="css/girl.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
               

<div id="login">
<div class="container">
<!--form for sign in or sign up-->
    <div class="col-md-4">
    <form class="form-signin" method="post">
    <?php
    if(isset($_GET['inactive']))
    {
        ?>
        <div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Sorry!</strong> This Account is not Activated. <br> Go to your Inbox and Activate it.
        </div>
        <?php
    }
    ?>
        <?php
        if(isset($_GET['error']))
        {
            ?>
            <div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Sorry, we can't find that account.<br> Try again.</strong>
            </div>
            <?php
        }
        ?>
        <h3 class="form-signin-heading">Student Sign In.</h3><hr />
        <input type="text" class="input-block-level" placeholder="Email or RegNo" name="txtemail" required/>
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass"  required/>
     <br><br>
        <button class="btn btn-large btn-primary" type="submit" name="btn-login">Sign in</button>
        <a href="signup.php" button class="btn btn-large btn-primary" >Register a now</button> </a>  
       <!-- <a href="signup.php" class="btn btn-large">Register As A Volunteer</a><hr />-->
     <br><br>
        <a href="forgot_pw.php" style= "font-weight: bold; color: green">Forgot your Password ? </a>
     </form>
   </div>
 </div> <!-- /container -->
</div>  
</div>      

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
              <hr> 
                </div>
            </div>
         </div>
        <!-- /.row -->

        <!-- Content Row -->
        <!-- /.col-md-3 -->
        <div class="row">
            <div class="col-md-3">
                <h3>Our Counsellors</h3>
                <p>Our counsellors are always committed ready to serve. Your participation as a student is highly regarded . Feel free and find help with us.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Our Mission</h3>
                <p>To provide day to day services to all students<br>
                within Egerton-Njoro Campus and build a holistic and self drived citizens.
                </p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Announcements</h3>
                <p>November 1 : Counsellor1 will not be available <br>
                   December 10 : Counsellor meeting. No appointment booking <br>
                   December 22 : Long holiday break</p> <br>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3">
                <h3>Dean Office</h3>
                <p>All students are free for consultation<br>
                between 8:00am to 4:30pm every day unless<br>
                    or otherwise stated.
                </p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-3 -->
        </div>
        </div>
        
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;</p>
                </div>
            </div>
        </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
