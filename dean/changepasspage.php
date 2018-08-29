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
  <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">


    </head>
    <body id="login">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
     <p>
        <div style="font-size: 30px; color: lightgrey; text-align: center"> <i>Egerton University Counselling Department.</i></div>
    </p>
</nav>
    <div>
  <form action="changepasspage.php" method="POST">


<div class="container">
    <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <div class="panel panel-login">
                    <!--Reset password -->
    
                
                                <h2 class="form-signin-heading">Reset Password</h2><hr />
                  
                                <div class='alert alert-info'>
                                    please fill all the fields to reset your password.
                                </div>
                                      
                                <div class="row">
                                <input type="password" name="currentnewpass"  id="newp" class="input-block-level" placeholder="Current Password"  autocomplete="off" required/>
                                
                                <input type="password" name="newpass" id="Cnewp"class="input-block-level" placeholder="New  Password" autocomplete="off" required/>

                                <input type="password" name="cnewpass" class="input-block-level" placeholder="Confirm New  Password"  autocomplete="off" id="Cnewp" required/>

                                    <hr/>
                                <button class="btn btn-large btn-primary" type="submit" name="change">Change Password</button>
            

                                </div> <!--end form group div-->
                            

                        </div> <!--panel-->
                </div> <!-- /row -->
          </div> <!-- /col -->

    </div> <!-- /container -->
</form>
</div>

     </body>
       <br><br><br><br>
<br><br>
     
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p style=""> &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;</p>
        </div>
    </div>
</footer>
   
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