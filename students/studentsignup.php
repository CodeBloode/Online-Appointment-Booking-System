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

        $query="SELECT * FROM appointments.student WHERE regNo=? or userEmail=?";
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
        }

        else
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
                }else
                    if(!preg_match('/^[0-9]{0,10}$/',$this->phone)){

                        echo "<script>alert('Use Numbers For phonenumber')</script>";
                        echo "<script>window.open('../studentsignupPage.php','_self')</script>";
                    }


                else{

                    //Random token code generated here.
                    $code = md5(uniqid(rand()));


                    //create a user
                    //alter all projects tests according to your databasename.students
                    $insert="INSERT INTO appointments.student(userEmail,userPass,regNo,name,phoneNo,tokencode) VALUES 
                              ('$this->email','$hashed_pwd','$this->regno','$this->username','$this->phone','$code')";


                    //calls connect method in database connection class and execute the query
                    $insert_results=$this->dbConnection()->exec($insert);


                    // //notify success in account creation...and allow login
                    header("Location: index.php?msg=Account Created Successfully");

                }

    }
}

if(isset($_POST['btn-signup'])){

    $reg= $_POST['txtregno'];
    $email=$_POST['txtemail'];
    $phone=$_POST['txtphone'];
    $user=$_POST['txtfname'];
    $pass=$_POST['txtpass'];
    $con_pass=$_POST['txtcpass'];

    $hashed_pwd = password_hash($pass,PASSWORD_DEFAULT);

    $createUser = new User($reg,$user,$phone,$email,$pass,$con_pass,$code);
    $createUser->reg_user($hashed_pwd);

}
