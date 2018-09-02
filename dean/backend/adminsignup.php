<?php
include_once "../../include/dbconn.php";
class User extends DB_con{
//protected $db;

private $username;
private $pass;
private $con_pass;
private $email;
private $accountid;
public function __construct($username,$pass,$con_pass,$email,$accountid){
$this->username=$username;
$this->pass=$pass;
$this->con_pass= $con_pass;
$this->email=$email;
$this->accountid=$accountid;

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
private function verifyID($id){
    $query="SELECT * FROM appointments.admin WHERE staticID= ?";
    $pre=$this->dbConnection()->prepare($query);
    $pre->execute([$id]);
    $rows=$pre->rowCount();

    if ($rows<1) {

        return true;
    }
    else{
        return false;
    }

}

public function register($hashed_pwd){

$checkreg = new User($this->username,$this->pass,$this->con_pass,$this->email,$this->accountid);

if($checkreg->userExist($this->username,$this->email)){

echo "<script>alert('User already Exists')</script>";
echo "<script>window.open('../adminSignupPage.php','_self')</script>";
}else
if($this->pass != $this->con_pass){
//check if the passwords match

echo "<script>alert('Password Do Not Match')</script>";
echo "<script>window.open('../adminSignupPage.php','_self')</script>";
exit();

}else
    if($checkreg->verifyID($this->accountid)==true){

        echo "<script>alert('Invalid account ID please retry')</script>";
        echo "<script>window.open('../adminSignupPage.php','_self')</script>";
        exit();
    }

else{

//create a user
//alter all projects tests according to your databasename.students

$insert2="UPDATE appointments.admin SET userName=?, password=?, email=? WHERE staticID=?";
$exec_data= $this->dbConnection()->prepare($insert2);
    if($exec_data->execute([$this->username,$hashed_pwd,$this->email,$this->accountid])){

        header("Location: ../adminlogin.php?msg=Account Created Successfully");
    }else{

        echo "<script>alert('Unable to create account')</script>";
        echo "<script>window.open('../adminSignupPage.php','_self')</script>";
        exit();

    }


}


}
}

if(isset($_POST['submit'])){

$username= $_POST['username'];
$password=$_POST['upass'];
$confirmPass=$_POST['cupass'];
$email = $_POST['email'];
$accountid=$_POST['staticid'];


$hashed_pwd = password_hash($password,PASSWORD_DEFAULT);

$createUser = new User($username,$password,$confirmPass,$email,$accountid);
$createUser->register($hashed_pwd);

}

