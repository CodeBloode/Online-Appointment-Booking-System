<?php
include_once "../../include/dbconn.php";
class User extends DB_con{
//protected $db;

private $username;
private $pass;
private $con_pass;
private $email;
public function __construct($username,$pass,$con_pass,$email){
$this->username=$username;
$this->pass=$pass;
$this->con_pass= $con_pass;
$this->email=$email;

}

//check if reg no already in db

private function userExist($username,$email){

//$this->username=$username;
//alter your code on the line below according to your databasename.students

$query="SELECT * FROM appointments.admin WHERE userName= ? or email= ?";
$pre=$this->dbConnection()->prepare($query);
$pre->execute([$username,$email]);
$rows=$pre->rowCount();

if ($rows>0) {

return true;
}else{
return false;
}
}
/*** for registration process ***/

public function register($hashed_pwd){

$checkreg = new User($this->username,$this->pass,$this->con_pass,$this->email);

if($checkreg->userExist($this->username,$this->email)){

echo "<script>alert('User already Exists')</script>";
echo "<script>window.open('../adminSignupPage.php','_self')</script>";
}else
if($this->pass != $this->con_pass){
//check if the passwords match

echo "<script>alert('Password Do Not Match')</script>";
echo "<script>window.open('../adminSignupPage.php','_self')</script>";
exit();

}else{


//create a user
//alter all projects tests according to your databasename.students
$insert="INSERT INTO appointments.admin(userName,password,email) VALUES ('$this->username','$hashed_pwd','$this->email')";

//calls connect method in database connection class and execute the query
$insert_results=$this->dbConnection()->exec($insert);


// //notify success in account creation...and allow login
header("Location: ../adminlogin.php?msg=Account Created Successfully");

}


}
}

if(isset($_POST['submit'])){

$username= $_POST['username'];
$password=$_POST['upass'];
$confirmPass=$_POST['cupass'];
$email = $_POST['email'];


$hashed_pwd = password_hash($password,PASSWORD_DEFAULT);

$createUser = new User($username,$password,$confirmPass,$email);
$createUser->register($hashed_pwd);

}

