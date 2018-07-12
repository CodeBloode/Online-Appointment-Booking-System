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

    $query="SELECT * FROM all_project_tests.students WHERE regno=? or email=?";
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

    public function reg_user($regno,$username,$phone,$email,$pass,$con_pass,$hashed_pwd){

        $checkreg = new User($regno,$username,$phone,$email,$pass,$con_pass);



        //for valid email
        $pattern="/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        //$password = md5($pass);

            if($checkreg->regNoExists($regno,$email)){

                    echo "<script>alert('Registration Number or Email Already exists')</script>";
                    echo "<script>window.open('../studentsignupPage.php','_self')</script>";
            }else
                if($pass != $con_pass){
                     //check if the passwords match

                        echo "<script>alert('Password Do Not Match')</script>";
                        echo "<script>window.open('../studentsignupPage.php','_self')</script>";
                        exit();

                }else
                    if(!preg_match($pattern, $email)){

                        //check the pattern of the email is correct
                        echo "<script>alert('Invalid Email Address')</script>";
                        echo "<script>window.open('../studentsignupPage.php','_self')</script>";
                        exit();
                }else{


                            //create a user
							//alter all projects tests according to your databasename.students
                        $insert="INSERT INTO appointmentsystem.students(regno,username,email,phoneNo,pwd) VALUES ('$regno','$username','$email','$phone','$hashed_pwd')";

                        //calls connect method in database connection class and execute the query
                        $insert_results=$this->dbConnection()->exec($insert);


                        // //notify success in account creation...and allow login
                        header("Location: ../studentloginPage.php?msg=Account Created Successfully");

                }

        // //checking if the username or email is available in db
        // $query = "SELECT * FROM students WHERE regNo =? OR uemail=?";

        // $result = $this->db->query($query) or die($this->db->error);

        // $count_row = $result->num_rows;

        // //if the username is not in db then insert to the table

        // if($count_row == 0){
        //     $query = "INSERT INTO students SET regNo='$regno',  fullname='$username',upass='$password', phone='$phone',uemail='$email'";

        //     $result = $this->db->query($query) or die($this->db->error);

        //     return true;
        // }
        // else{return false;}


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
    $createUser->reg_user($reg,$user,$phone,$email,$pass,$con_pass,$hashed_pwd);


}