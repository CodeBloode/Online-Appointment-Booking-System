<?php
session_start();

    $name=$_POST['regno'];
    $U_pass=$_POST['pass'];

    include('includes/incld_login.php');
    $newStudent=new Login($name, $U_pass);
    echo $newStudent->authenticateStudent();


    if(isset($_SESSION['tempRegNo'])){

        echo "<script>alert('Username or Password correct, verified please proceed')</script>";
        header("location: ../../index.php");
    }else{

        echo "<script>alert('Username or Password Incorrect')</script>";
        header("location: ../../studentlogin.php");

    }
?>


	
	