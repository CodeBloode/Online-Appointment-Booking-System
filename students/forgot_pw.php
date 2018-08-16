<?php
/**
 * FILE TITLE: FORGOT_PW.PHP
 * PURPOSE OF THIS FILE: Prepares a reset password email with link for the user if they
 * click the 'lost your password' link on index.php. The link in this email goes to reset_pw.php
 * 
 */
						session_start();
						require_once 'class.user.php';
						$user = new USER();

										if($user->is_logged_in()!="")
										{
											$user->redirect('../student.php');
										}

												if(isset($_POST['btn-submit']))
												{
													$email = $_POST['txtemail'];

													$stmt = $user->runQuery("SELECT userID FROM student WHERE userEmail=:email LIMIT 1");
													$stmt->execute(array(":email"=>$email));
													$row = $stmt->fetch(PDO::FETCH_ASSOC);
													if($stmt->rowCount() == 1)
													{
														$id = base64_encode($row['userID']);
														$code = md5(uniqid(rand()));

														$stmt = $user->runQuery("UPDATE student SET tokenCode=:token WHERE userEmail=:email");
														$stmt->execute(array(":token"=>$code,"email"=>$email));

														$message= "
													   Hello  $email,
													   <br /><br />
													   We received a request to reset your password. If you requested this change, then click the following link to reset your password. If you did not request a password change, please ignore this email.
													   <br /><br />
													   <a href='http://localhost/Online-Appointment-Booking-System/students/reset_pw.php?id=$id&code=$code'>Click here to reset your password.</a>
													   <br /><br />
													   Thank you, <br>
													   Counselling Department.
													   ";
														$subject = "Password Reset";

														$user->send_mail($email,$message,$subject);

														$msg = "<div class='alert alert-success'>
													 <button class='close' data-dismiss='alert'>&times;</button>
													 We've sent an email to $email.
																	Please click on the password reset link in the email to reset your password. 
													  </div>";
													}
													else
													{
														$msg = "<div class='alert alert-danger'>
													 <button class='close' data-dismiss='alert'>&times;</button>
													 <strong>Sorry!</strong>  this email not found. 
													   </div>";
													}
												}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title> 
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
<body id="login"> <!--THE FORGOT PASSWORD FORM-->
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
    <p>
    <div style="font-size: 30px; color: lightgrey; text-align: center"> <i>Egerton University Counselling Department.</i></div>
    </p>
</nav>
<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">

                    <form class="form-signin" method="post">
                        <h2 class="form-signin-heading">Forgot Password</h2><hr />
                
                        <?php
                        if(isset($msg))
                        {
                            echo $msg;
                        }
                        else
                        {
                            ?>
                            <div class='alert alert-info'>
                                Please enter your email address. You will receive a link to create a new password via email.
                            </div>
                            <?php
                        }
                        ?>
                
                        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
                        <hr />
                        <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Reset Password</button>
                        <label class="btn btn-danger btn-primary" type="" name="btn-submit" ><a href="index.php" style="color: #FFFFFF; text-decoration: none">Back to Sign In</a></label>
                    </form>
			   </div>
            </div>
       </div>
</div> <!-- /container -->
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>      

</body>
<br><br><br><br>
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