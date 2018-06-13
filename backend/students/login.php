<?php

$name=$_POST['regno'];
$U_pass=$_POST['pass'];

include ('includes/incld_login.php');
$newStudent=new Login($name,$U_pass);
echo $newStudent->authenticateStudent();
?>