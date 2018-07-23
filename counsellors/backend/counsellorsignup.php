<?php
include_once "../../include/dbconn.php";
class User extends DB_con{
    //protected $db;

    private $usermail;
    private $phoneno;
    private $counsno;
    private $fulnm;
    private $pass;
    private $con_pass;
    public function __construct($usermail,$phoneno,$fulnm,$counsno,$pass,$con_pass){
        $this->usermail=$usermail;
        $this->pass=$pass;
        $this->con_pass= $con_pass;
        $this->fulnm=$fulnm;
        $this->phoneno=$phoneno;
        $this->counsno=$counsno;

    }

        //check if reg no already in db

    private function userExist($username,$cn){

    //$this->username=$username;
	//alter your code on the line below according to your databasename.students

    $query="SELECT * FROM appointments.counsellor WHERE email = ? and counsNo = ?";
    $pre=$this->dbConnection()->prepare($query);
    $pre->execute([$username, $cn]);
    $rows=$pre->rowCount();
 
    if ($rows>0) {
        
        return true;
    }else{
        return false;
    }
}
    /*** for registration process ***/

    public function register($hashed_pwd){

        $checkuser = new User($this->usermail,$this->phoneno,$this->fulnm,$this->counsno,$this->pass,$this->con_pass);

            if($checkuser->userExist($this->usermail,$this->counsno)){

                    echo "<script>alert('User already Exists')</script>";
                    echo "<script>window.open('../counsellorSignupPage.php','_self')</script>";
            }else
                if($this->pass != $this->con_pass){
                     //check if the passwords match

                        echo "<script>alert('Password Do Not Match')</script>";
                        echo "<script>window.open('../counsellorSignupPage.php','_self')</script>";
                        exit();

                }else{


                            //create a user
                    $counsellor = strtolower($this->counsno) ;
							//alter all projects tests according to your databasename.students
                        $insert="INSERT INTO appointments.counsellor(counsName,counsNo,phoneNo,email,password) VALUES ('$this->fulnm','$counsellor','$this->phoneno','$this->usermail','$hashed_pwd')";

                        //calls connect method in database connection class and execute the query
                        $insert_results=$this->dbConnection()->exec($insert);


                        // //notify success in account creation...and allow login
                        header("Location: ../counsellorSignupPage.php?msg=Account Created Successfully");

                }


    }
}

if(isset($_POST['submit'])){

    session_start();
    if(!isset($_SESSION['username'])) {

        header('location:../../dean/adminlogin.php?msg=please login');
    }
    else {


        $email = $_POST['usermail'];
        $names = $_POST['fnames'];
        $counselorNO = $_POST['counsno'];
        $phone = $_POST['pno'];
        $password = $_POST['upass'];
        $confirmPass = $_POST['cupass'];

        $couns = strtolower($counselorNO);
        $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

        $createUser = new User($email, $phone, $names, $couns, $password, $confirmPass);
        $createUser->register($hashed_pwd);
    }

}

