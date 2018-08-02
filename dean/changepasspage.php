<?php

session_start();

if (!isset($_SESSION['username'])){

    header('location:adminlogin.php');

}else

{

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
    </head>
    <body>

    <div>

        <form action="changepasspage.php" method="POST">
            <label> Current Password</label><br>
            <input type="password" name="currentnewpass" autocomplete="off" id="newp">
            <br><br>
            <label>New  Password</label><br>
            <input type="password" name="newpass" autocomplete="off" id="Cnewp"><br><br>

            <label> Confirm New  Password</label><br>
            <input type="password" name="cnewpass" autocomplete="off" id="Cnewp"><br>
            <input type="submit" name="change" value="Change Password">
        </form>
    </div>

    </body>
    </html>


<?php }

if(isset($_POST['change'])){

    include("backend/changepass.php");

    $newpass = $_POST['newpass'];
    $c_newpass = $_POST['cnewpass'];
    $current_pass=$_POST['currentnewpass'];

    $changePwdobj = new ChangePwd($newpass,$c_newpass,$current_pass);

    $changePwdobj->changePassword($_SESSION['username']);

}


?>