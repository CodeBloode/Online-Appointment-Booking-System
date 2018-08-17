<?php
/**
 * FILE TITLE: RESET_PW.PHP
 * This program in invoked when the user clicks the link to reset password in their forgot_pw.php delivered email
 */
				require_once 'stude.php';
				$user = new Reset();


				//I will add this functionality in the below code.
					if(empty($_GET['id']) && empty($_GET['code'])) /*if a user tries to access this page directly they are redirected to index.php*/
						{
						$user->redirect('../index.php');
						}

										if(isset($_GET['id']) && isset($_GET['code'])) /*code must match the password reset request*/
										{
											$id = base64_decode($_GET['id']);
											$code = $_GET['code'];

											$stmt = $user->runQuery("SELECT * FROM student WHERE userID=:uid AND tokenCode=:token");
											$stmt->execute(array(":uid"=>$id,":token"=>$code));
											$rows = $stmt->fetch(PDO::FETCH_ASSOC);

											if($stmt->rowCount() == 1)
											{
												if(isset($_POST['btn-reset-pass'])) /*passwords must be the same*/
												{
													$pass = $_POST['pass'];
													$cpass = $_POST['confirm-pass'];

													if($cpass!==$pass)
													{
														$msg = "
														<div class='alert alert-danger'>
														  <button class='close' data-dismiss='alert'>&times;</button>
														  <strong>Sorry!</strong> Password doesn't match. </span>
														</div>";
													}
												else if($pass=="") { /*does not accept an empty password */
														$msg = "
														<div class='alert alert-danger'>
															<button class='close' data-dismiss='alert'>&times;</button>
														   <strong>Please!</strong> Provide a password at least 6 characters long. </span>
														</div>"; 
												   }
												   else if(strlen($pass) < 6) /*does not accept a password less than 6 characters long*/
												   {
														$msg = "
														<div class='alert alert-danger'>
															<button class='close' data-dismiss='alert'>&times;</button>
															Passwords must be at least <strong>6</strong>  characters long.</span>
														</div>"; 
												   }	
												
													else /*acceptable password is updated in the database and the user is redirected to the index page for sign in.*/ 
													{
														$cpass = password_hash($cpass, PASSWORD_DEFAULT);
														$stmt = $user->runQuery("UPDATE student SET password=:upass WHERE userID=:uid");
														$stmt->execute(array(":upass"=>$cpass,":uid"=>$rows['userID']));
														$msg = "
															<div class='alert alert-success'>
															   <button class='close' data-dismiss='alert'>&times;</button>
															   Password changed. You will be redirected to the sign in page.
															</div>";
														header("refresh:5;../studentloginPage.php");
													}
												}
											}
											else
											{
												exit;
											}
										}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="../PHPMAILER/css/bootstrap.min.css" rel="stylesheet">
     <link href="../PHPMAILER/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../PHPMAILER/css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="../PHPMAILER/js/html5shiv.js"></script>
        <script src="../PHPMAILER/js/respond.min.js"></script>
    <![endif]-->
    <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
    <script src="../jquery/jquery.min.js"></script>

    
</head>
<body id="login"> <!--THE RESET FORM-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
    <p>
    <div style="font-size: 30px; color: lightgrey; text-align: center"> <i>Egerton University Counselling Department.</i></div>
    </p>
</nav>

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
        background: url(../images/submitting.gif) center no-repeat #fff;
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



<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
                    <div class='alert alert-success'>
                        <strong>Hello </strong>  <?php echo $rows['name'] ?>.  Reset your password here.
                    </div>
                    <form class="form-signin" method="post">
                        <h3 class="form-signin-heading">Password Reset.</h3><hr />
                        <?php
                        if(isset($msg))
                        {
                            echo $msg;
                        }
                        ?>
                        <input type="password" class="input-block-level" placeholder="New Password" name="pass"/>
                        <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirm-pass"/>
                        <hr />
                        <button class="btn btn-large btn-primary" type="submit" name="btn-reset-pass">Reset Your Password</button>
                    </form>
            </div>
          </div>
        </div>
    </div> <!-- /container -->

	 <!-- jQuery -->
    <script src="../PHPMAILER/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../PHPMAILER/js/bootstrap.min.js"></script>
</body>
<br><br><br><br>
<br><br><br><br>
<br><br><br>
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p style=""> &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;</p>
        </div>
    </div>
</footer>
</html>