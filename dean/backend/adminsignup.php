<?php
include_once "../../include/dbconn.php";
class User extends DB_con{
    //protected $db;

    private $username;
    private $pass;
    private $con_pass;
    public function __construct($username,$pass,$con_pass){
        $this->username=$username;
        $this->pass=$pass;
        $this->con_pass= $con_pass;

    }

        //check if reg no already in db

    private function userExist($username){

    //$this->username=$username;
	//alter your code on the line below according to your databasename.students

    $query="SELECT * FROM appointments.admin WHERE userName= ?";
    $pre=$this->dbConnection()->prepare($query);
    $pre->execute([$username]);
    $rows=$pre->rowCount();
 
    if ($rows>0) {
        
        return true;
    }else{
        return false;
    }
}
    /*** for registration process ***/

    public function register($hashed_pwd){

        $checkreg = new User($this->username,$this->pass,$this->con_pass);

            if($checkreg->userExist($this->username)){

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
                        $insert="INSERT INTO appointments.admin(userName,password) VALUES ('$this->username','$hashed_pwd')";

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


    $hashed_pwd = password_hash($password,PASSWORD_DEFAULT);

    $createUser = new User($username,$password,$confirmPass);
    $createUser->register($hashed_pwd);

}

