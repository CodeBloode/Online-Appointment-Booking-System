<?php
/**
 * FILE TITLE: CLASS.USER.PHP
 * PURPOSE OF THIS FILE: Here is the user object: functions for database connection, login, logout, registration and email verification.
 */


require_once '../include/studb.php';

			class USER
					{

								private $conn; //create database connection

								public function __construct()
								{
									$database = new Database();
									$db = $database->dbConnection();
									$this->conn = $db;
								}

								public function runQuery($sql)
								{
									$stmt = $this->conn->prepare($sql);
									return $stmt;
								}

								public function lasdID() //find the last id number to determine the current id number
								{
									$stmt = $this->conn->lastInsertId();
									return $stmt;
								}

								public function register($uname,$email,$upass,$code,$regno,$name,$phone) //preparing and inserting registration
								{
									try
									{
										$password = password_hash($upass, PASSWORD_DEFAULT);
										$stmt = $this->conn->prepare("INSERT INTO student(userName,userEmail,userPass,tokenCode,regNo,name,phoneNo) 
																			VALUES(:user_name, :user_mail, :user_pass, :active_code, :reg_no, :f_name, :ph_no)");
										$stmt->bindparam(":user_name",$uname);
										$stmt->bindparam(":user_mail",$email);
										$stmt->bindparam(":user_pass",$password);
										$stmt->bindparam(":active_code",$code);
                                        $stmt->bindparam(":reg_no",$regno);
                                        $stmt->bindparam(":f_name",$name);
                                        $stmt->bindparam(":ph_no",$phone);
										$stmt->execute();

//										echo var_dump($uname,$email,$upass,$code,$regno,$fname,$phone);
										return $stmt;
									}
									catch(PDOException $ex)
									{
										echo $ex->getMessage();
									}
								}

								public function login($email,$password) //the login $regno
								{
									try
									{
										$stmt = $this->conn->prepare("SELECT * FROM student WHERE userEmail=:email_id "); //OR regNo=:reg_id
										$stmt->execute(array(":email_id"=>$email));

                                       // $stmt->execute(array(":reg_id"=>$regno));
										$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

										if($stmt->rowCount() == 1)
										{
											if($userRow['userStatus']=="Y")
											{
												if(password_verify($password, $userRow['userPass']))
												{
													$_SESSION['userSession'] = $userRow['userID'];
                                                    $_SESSION['StudentName']=$userRow['name'];
													$_SESSION['regNo'] =$userRow['regNo'];
													return true;
												}
												else
												{
													header("Location: index.php?error");
													exit;
												}
											}
											else
											{
												header("Location: index.php?inactive");
												exit;
											}
										}
										else
										{
											header("Location: index.php?error");
											exit;
										}
									}
									catch(PDOException $ex)
									{
										echo $ex->getMessage();
									}
								}


								public function is_logged_in() //logged in
								{
									if(isset($_SESSION['userSession']) && isset($_SESSION['StudentName']) && isset($_SESSION['regNo']))
									{
										return true;
									}
								}

								public function redirect($url) //redirection function used throughout app
								{
									header("Location: $url");
								}

								public function logout() //the logout
								{
									session_destroy();
									$_SESSION['userSession'] = false;
                                    $_SESSION['StudentName']= false;
									$_SESSION['regNo'] = false;
								}

								function send_mail($email,$message,$subject)  //all the mail settings for verification emails
								{
									require '../PHPMAILER/mailer/PHPMailerAutoload.php';
									$mail = new PHPMailer(); //create a new object
									$mail->IsSMTP(); //enable SMTP
									$mail->SMTPDebug  =0; //debugging: 0 errors and messages, 2 messages only. Made 0 for production
									$mail->SMTPAuth   = true; //authentication enabled
								   // $mail->SMTPSecure = "ssl"; //secure transfer enabled required for gmail. Do not uncommet this due to gmail security options.
									$mail->Host       = "smtp.gmail.com";
									$mail->Port       = 25; //or try 587
									$mail->IsHTML(true);
									$mail->AddAddress($email);
									$mail->Username="counsellingdepartmentegerton@gmail.com";
									$mail->Password="codebloode2015";
									$mail->SetFrom('counsellingdepartmentegerton@gmail.com','Counselling Department');
									$mail->AddReplyTo("counsellingdepartmentegerton@gmail.com","Counselling Department");
									$mail->Subject    = $subject;
									$mail->MsgHTML($message);
									$mail->Send();


								}
							}