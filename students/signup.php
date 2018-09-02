<?php
/**
 * FILE TITLE: SIGNUP.PHP
 * PURPOSE OF THIS FILE: Takes and validates user info in signup requests and generates verification email to requesting user.
 * name:     Required. Must only contain letters and whitespace.
 * email:    Required. Must contain a valid email address.
 * password: Required. Must be 6 characters or longer. 
 */
?>
<!DOCTYPE html> <!--BEGIN HTML REGISTRATION FORM-->
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
    
                 <form class="form-signin" method="post" action ="studentsignup.php">
                        <h2 class="form-signin-heading">Sign Up</h2><hr />

                        <div class="row">

                            <input type="text" class="input-block-level" placeholder="Full Name" name="txtfname" autocomplete="off" required/>

                            <input type="text" class="input-block-level" placeholder="Reg No." name="txtregno" autocomplete="off" required/>


                            <input type="email" class="input-block-level" placeholder="Email address" name="txtemail"  autocomplete="off" required/>

                            <input type="text" class="input-block-level" placeholder="Phone" name="txtphone" autocomplete="off" required/>

                            <input type="password" class="input-block-level" placeholder="Password" name="txtpass"  autocomplete="off" required/>


                            <input type="password" class="input-block-level" placeholder="Confirm Password" name="txtcpass"  autocomplete="off" required/>


                        <br><br>

                            <hr/>
                        <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
                         <a href="index.php" button class="btn btn-large btn-primary" >Login</button></a>

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