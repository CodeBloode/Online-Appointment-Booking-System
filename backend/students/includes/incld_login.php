<?php

    class Login{

        public   $name;
       public  $U_pass;
       

        public function __construct($name,$U_pass)
        {
            $this->U_pass = $U_pass;
            $this->name = $name;

       }

       public function authenticateStudent(){

        $tempPass="student";
        $tempRegNo="student1234";

        if($this->U_pass==$tempPass && $this->name==$tempRegNo){

            $_SESSION['tempRegNo']=$regno;
            echo "<script>window.open('../index.php','_self)</script>";

        }else{

            echo "<script>alert('Username or Password Incorrect')</script>";
            echo "<script>window.open('../../studentlogin.php','_self')</script>";
        }
       }

    }


?>
