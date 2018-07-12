<?php
session_start();
include_once '../include/dbconn.php';

class CounsellorLogin extends DB_con{


	private $user_nm;
	private $user_pwd;

	public function __construct($userNm, $userPass){

		$this->user_nm=$userNm;
		$this->user_pwd=$userPass;
	}

	public function AuthenticateCounsellor(){
		
		//alter your code on the line below according to your databasename.counsellors
		$query ="SELECT * FROM appointmentsystem.counsellors WHERE usrnm=? or email=?";
		$run_query=$this->dbConnection()->prepare($query);
		$run_query->execute([$this->user_nm,$this->user_nm]);

		//if no counsellor is found
		if($run_query->rowCount()<1){

			echo "<script>alert('User Name or password was wrong')</script>";
			echo "<script>window.open('../counsellorloginPage.php','_self')</script>";

			}else{

					if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

						//get the password from db
						$pass=password_verify($this->user_pwd,$row['pwd']);


						if($pass==false){

										//echo some error and open the login window
									echo "<script>alert('Password Incorrect')</script>";
									echo "<script>window.open('../counsellorloginPage.php','_self')</script>";
							}elseif($pass==true){

								$_SESSION['username']=$row['usrnm'];
								
							header("Location: ../counsellorindexPage.php?msg=logged in Successfully");
							}
					}

			}

	}

}

if(isset($_POST['submit'])){


	$userNm=$_POST['username'];
	$userPass=$_POST['password'];

	$CounsellorSession = new CounsellorLogin($userNm,$userPass);

	$CounsellorSession->AuthenticateCounsellor();

}