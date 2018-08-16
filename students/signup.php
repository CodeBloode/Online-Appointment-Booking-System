<?php
/**
 * FILE TITLE: SIGNUP.PHP
 * PURPOSE OF THIS FILE: Takes and validates user info in signup requests and generates verification email to requesting user.
 * name:     Required. Must only contain letters and whitespace.
 * email:    Required. Must contain a valid email address.
 * password: Required. Must be 6 characters or longer. 
 */
session_start();
				require_once 'class.user.php';
				
								// define a user
								$reg_user = new USER();
								/**/

											$display = array( /*an array to hold user input to the form so that upon submission the form does not go blank*/
												'txtuname' => '',
												'txtemail' => '',
												'txtpass' => '',
                                                'txtregno' => '',
                                                'txtfname' => '',
                                                'txtphone' => '',
											);

											
					if($_SERVER['REQUEST_METHOD'] == 'POST'){ /*supports the array that keeps the form from going blank upon submission*/

								foreach($_POST as $key => $value){
									if(isset($display[$key])){
										$display[$key] = htmlentities($value);
									}
								}
}

					if($reg_user->is_logged_in()!="") /*if the user is logged in, they are redirected automatically to the home page*/
					{
						$reg_user->redirect('home.php');
					}


									if(isset($_POST['btn-signup']))/*if the signup button is clicked, go through the selection structure below*/ {

                                        include_once('mailer/class.phpmailer.php');

                                        require_once('mailer/class.smtp.php');
                                        $uname = trim($_POST['txtuname']);
                                        $email = trim($_POST['txtemail']);
                                        $upass = $_POST['txtpass'];
                                        $code = md5(uniqid(rand()));
                                        $regno = $_POST['txtregno'];
                                        $name = $_POST['txtfname'];
                                        $phone = $_POST['txtphone'];


                                        if ($uname == "") { /*if name is empty give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button> 
														<strong>Please!</strong> Provide a user name that does not contain symbols or white spaces. 
												   </div>";
                                        } else if (!(ctype_alnum($uname))) { /*if name is not only letters or numbers give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													 <strong>Sorry!</strong> User names may only contain letters or numbers. 
													 They may not contain symbols or empty spaces. 
												 </div>";
                                        } else if ($email == "") { /*if email is empty give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Please!</strong> Provide a valid email address. 
												  </div>";
                                        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { /*sanitize and validate email address input*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Please!</strong> Provide a valid email address.
												   </div>";
                                        } else if ($upass == "") { /*does not accept an empty password */
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													   <strong>Please!</strong> Provide a password at least 6 characters long.
													</div>";
                                        } else if (strlen($upass) < 6) /*does not accept a password less than 6 characters long*/ {
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
														Passwords must be at least <strong>6</strong> characters long.
													</div>";
                                        } else if ($regno == "") { /*if registration number is empty give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Please!</strong> Provide a valid registration number. 
												  </div>";
                                        }
//                                               else if(strlen($regno) < 12) /*does not accept a registration number less than 12 characters long*/
//                                               {
//                                                   $msg = "
//													<div class='alert alert-danger'>
//														<button class='close' data-dismiss='alert'>&times;</button>
//														Registration numbers must be at least <strong>12</strong> characters long.
//													</div>";
//                                               }
                                        else if ($name =="") { /*if full name is empty give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Please!</strong> Check your names clearly. 
												  </div>";
                                        } else if ($phone == "") { /*if registration number is empty give specific message*/
                                            $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Please!</strong> Provide a valid phone number. 
												  </div>";
                                        }
//                                               else if(strlen($phone) < 10) /*does not accept a registration number less than 12 characters long*/
//                                               {
//                                                   $msg = "
//													<div class='alert alert-danger'>
//														<button class='close' data-dismiss='alert'>&times;</button>
//														Phone numbers must be at least <strong>10</strong> characters long.
//													</div>";
//                                               }

                                        else /*if no errors in user input, run query to see if email already exists in database*/ {

                                            $stmt = $reg_user->runQuery("SELECT * FROM student WHERE userEmail=:email_id OR regNo=:reg_id");//OR regNo=:reg_id
                                            $stmt->execute(array(":email_id" => $email, ":reg_id"=>$regno));
                                            //$stmt->execute(array(":reg_id"=>$regno));
                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                            if ($stmt->rowCount() > 0) /*if the email is already in the database, already registered, give message to sign in*/ {
                                                $msg = "
													<div class='alert alert-danger'>
														<button class='close' data-dismiss='alert'>&times;</button>
													<strong>Sorry!</strong> We already have that email address or registration number on our account. Please sign in. 
													</div>";
                                            } /*if there are no errors and the email is not already in the database, a validation email	   goes out and user information is stored with an 'N' status for not confirmed*/

                                            else {
                                                if ($reg_user->register($uname, $email, $upass, $code, $regno, $name, $phone)) {
                                                    $id = $reg_user->lasdID();
                                                    $key = base64_encode($id);
                                                    $id = $key;

                                                    $message = "     
													  Hello $uname,
													  <br />
													  <h2>Thank you for signing up with the Counselling Department!</h2> <br/>
													  When you click the link below you will activate your account as a student. <br>
													  You will have access to our online services as a student and receive notifications on</br>
													  information about your appointment details via email. 
													  <br/></br>
													  <a href='https://localhost/Online-Appointment-Booking-System/student-account-verification-via-email/verify.php?id=$id&code=$code'> Click HERE to Activate</a>
													  <br/><br/>
													  Thanks, <br>
													  Counselling Department.";

                                                    $subject = "Confirm Registration";

                                                    $reg_user->send_mail($email, $message, $subject);
                                                    $msg = "
													 <div class='alert alert-success'>
													  <button class='close' data-dismiss='alert'>&times;</button>
													  <strong>Success!</strong>  We've sent an email to $email.
																	Please click on the confirmation link in the email to create your account. 
													   </div>
													 ";
                                                } else {
                                                    echo "sorry, we could not process your registration...";
                                                }
                                            }
                                        }

                                    }
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
    
                 <form class="form-signin" method="post">
                                <h2 class="form-signin-heading">Sign Up</h2><hr />
                   <?php
							if(isset($msg))
							{
								echo $msg;
							}
							else
							{
								?>
								<div class='alert alert-info'>
									Any information Entered is highly safeguarded. Please enter your information.
								</div>
								<?php
							}
							?>             
                                <div class="row">
                                <input type="text" class="input-block-level" placeholder="Username" name="txtuname" value="<?php echo  $display['txtuname']; ?>" autocomplete="off" required/>
                                
                                <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" value="<?php  echo  $display['txtemail']; ?>" autocomplete="off" required/>

                                <input type="password" class="input-block-level" placeholder="Password" name="txtpass" value="<?php echo $display['txtpass']; ?>" autocomplete="off" required/>

                                    <input type="text" class="input-block-level" placeholder="Reg No." name="txtregno" value="<?php echo $display['txtregno']; ?>"autocomplete="off" required/>

                                    <input type="text" class="input-block-level" placeholder="Full Name" name="txtfname" value="<?php echo $display['txtfname']; ?>" autocomplete="off" required/>

                                    <input type="text" class="input-block-level" placeholder="Phone" name="txtphone" value="<?php echo $display['txtphone']; ?>" autocomplete="off" required/>
                                <br><br>

                                    <hr/>
                                <button class="btn btn-large btn-primary" type="submit" name="btn-signup">Sign Up</button>
                                 <a href="index.php" button class="btn btn-large btn-primary" >Sign In</button></a>

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