<?php
include_once "../include/dbconn.php";
class User extends DB_con{
    //protected $db;

    private $regno;
    private $username;
    private $phone;
    private $email;
    private $pass;
    private $con_pass;
    public function __construct($regno,$username,$phone,$email,$pass,$con_pass){
        // $this->db = new DB_con();
        // $this->db = $this->db->ret_obj();

        $this->regno=$regno;
        $this->username=$username;
        $this->phone=$phone;
        $this->email=$email;
        $this->pass=$pass;
        $this->con_pass=$con_pass;

    }


        //check if reg no already in db

    private function regNoExists($regno,$email){

    //$this->username=$username;
	//alter your code on the line below according to your databasename.students

    $query="SELECT * FROM appointments.student WHERE regNo=? or email=?";
    $pre=$this->dbConnection()->prepare($query);
    $pre->execute([$regno,$email]);
    $rows=$pre->rowCount();
 
    if ($rows>0) {
        
        return true;
    }else{
        return false;
    }
}
    /*** for registration process ***/

    public function reg_user($hashed_pwd){

        $checkreg = new User($this->regno,$this->username,$this->phone,$this->email,$this->pass,$this->con_pass);



        //for valid email
        $pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        //$password = md5($pass);

            if($checkreg->regNoExists($this->regno,$this->email)){

                    echo "<script>alert('Registration Number or Email Already exists')</script>";
                    echo "<script>window.open('../studentsignupPage.php','_self')</script>";
            }else
                if($this->pass != $this->con_pass){
                     //check if the passwords match

                        echo "<script>alert('Password Do Not Match')</script>";
                        echo "<script>window.open('../studentsignupPage.php','_self')</script>";
                        exit();

                }else
                    if(!preg_match($pattern, $this->email)){

                        //check the pattern of the email is correct
                        echo "<script>alert('Invalid Email Address')</script>";
                        echo "<script>window.open('../studentsignupPage.php','_self')</script>";
                        exit();
                }else{


                            //create a user
							//alter all projects tests according to your databasename.students
                        $insert="INSERT INTO all_project_tests.students(regno,username,email,phoneNo,pwd) VALUES ('$regno','$username','$email','$phone','$hashed_pwd')";
                        $insert="INSERT INTO appointments.student(regNo,name,password,phoneNo,email) VALUES ('$this->regno','$this->username','$hashed_pwd','$this->phone','$this->email')";


                        //calls connect method in database connection class and execute the query
                        $insert_results=$this->dbConnection()->exec($insert);


                        // //notify success in account creation...and allow login
                        header("Location: ../studentloginPage.php?msg=Account Created Successfully");

                }

    }
}

if(isset($_POST['submit'])){

    $reg= $_POST['regno'];
    $email=$_POST['uemail'];
    $phone=$_POST['phone'];
    $user=$_POST['username'];
    $pass=$_POST['upass'];
    $con_pass=$_POST['cupass'];

    $hashed_pwd = password_hash($pass,PASSWORD_DEFAULT);

    $createUser = new User($reg,$user,$phone,$email,$pass,$con_pass);
    $createUser->reg_user($hashed_pwd);

}
