<?php
session_start();
include_once '../include/dbconn.php';

class StudentLodin extends DB_con{


	private $user_id;
	private $user_pass;

	public function __construct($userNm, $userPass){

		$this->user_id=$userNm;
		$this->user_pass=$userPass;
	}

	public function AuthenticateStudent(){
		
		//alter your code on the line below according to your databasename.students
		$query ="SELECT * FROM all_project_tests.students WHERE regno=? or email=?";
		$run_query=$this->dbConnection()->prepare($query);
		$run_query->execute([$this->user_id,$this->user_id]);

		//if no student is found
		if($run_query->rowCount()<1){

			echo "<script>alert('RegNo or Email Not Found')</script>";
			echo "<script>window.open('../studentloginPage.php','_self')</script>";

			}else{

					if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

						//get the password from db
						$pass=password_verify($this->user_pass,$row['pwd']);


						if($pass==false){

										//echo some error and open the login window
									echo "<script>alert('Password Incorrect')</script>";
									echo "<script>window.open('../studentloginPage.php','_self')</script>";
							}elseif($pass==true){

								$_SESSION['StudentName']=$row['username'];
								$_SESSION['regNo']=$row['regno'];
								$_SESSION['email']=$row['email'];
								
							header("Location: ../studentindexPage.php?msg=logged in Successfully");
							}
					}

			}

	}
}

if(isset($_POST['submit'])){


	$userName=$_POST['emailusername'];
	$userPass=$_POST['password'];

	$StudentSession = new StudentLodin($userName,$userPass);

	$StudentSession->AuthenticateStudent();

}