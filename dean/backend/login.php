<?php
session_start();
include_once "../../include/dbconn.php";

class AdminLogin extends DB_con{


    private $user_id;
    private $user_pass;

    public function __construct($userNm, $userPass){

        $this->user_id=$userNm;
        $this->user_pass=$userPass;
    }

    public function authenticateAdmin(){

        //alter your code on the line below according to your databasename.students
        $query ="SELECT * FROM appointments.admin WHERE userName=?";
        $run_query=$this->dbConnection()->prepare($query);
        $run_query->execute([$this->user_id]);

        //if no administarator is found
        if($run_query->rowCount()<1){

            echo "<script>alert('User name does not exist')</script>";
            echo "<script>window.open('../adminlogin.php','_self')</script>";

        }else{

            if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

                //get the password from db
                $pass=password_verify($this->user_pass,$row['password']);


                if($pass==false){

                    //echo some error and open the login window
                    echo "<script>alert('Password Incorrect')</script>";
                    echo "<script>window.open('../adminlogin.php','_self')</script>";
                }elseif($pass==true){

                    $_SESSION['username']=$row['userName'];

                    header("Location: ../dean.php?msg=logged in Successfully");
                }
            }

        }

    }
}

if(isset($_POST['submit'])){


    $userName=$_POST['emailusername'];
    $userPass=$_POST['password'];

    $StudentSession = new AdminLogin($userName,$userPass);

    $StudentSession->authenticateAdmin();

}
