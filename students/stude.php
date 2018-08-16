<?php

require_once '../include/studb.php';

			class Reset
					{
 //Updates
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





								public function is_logged_in() //logged in
								{
									if(isset($_SESSION['userSession']))
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
								}

								function send_mail($email,$message,$subject)  //all the mail settings for verification emails
								{
									require '../PHPMAILER/mailer/PHPMailerAutoload.php';
									$mail = new PHPMailer(); //create a new object
									$mail->IsSMTP(); //enable SMTP
									$mail->SMTPDebug  =0; //debugging: 0 errors and messages, 0 messages only. Made 0 for production
									$mail->SMTPAuth   = true; //authentication enabled
								   // $mail->SMTPSecure = "ssl"; //secure transfer enabled required for gmail. Do not uncommet this due to gmail security options.
									$mail->Host       = "smtp.gmail.com";
									$mail->Port       = 25; //or try 587
									$mail->IsHTML(true);
									$mail->AddAddress($email);
									$mail->Username="codebloodesons@gmail.com";
									$mail->Password="codebloode2015";
									$mail->SetFrom('codebloodesons@gmail.com','Counselling Department');
									$mail->AddReplyTo("codebloodesons@gmail.com","Counselling Department");
									$mail->Subject    = $subject;
									$mail->MsgHTML($message);
									$mail->Send();


								}
							}