<?php

session_start();
?>
<!DOCTYPE html> <!--BEGIN HTML REGISTRATION FORM-->
<html>
<head>
    <title>Dean SignUp</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="login">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
    <p>
    <div style="font-size: 30px; color: lightgrey; text-align: center"> <i>Egerton University Counselling Department.</i></div>
    </p>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-login">
                <!--Sign up form -->

                <form class="form-signin" method="post" action="backend/adminsignup.php" name="reg">
                    <h2 class="form-signin-heading">Sign Up</h2><hr/>

                    <div class="row">

                        <input type="text" class="input-block-level" placeholder="User Name" name="username" autocomplete="off" required/>

                        <input type="email" class="input-block-level" placeholder="email" name="email" autocomplete="off" required/>


                        <input type="password" class="input-block-level" placeholder="Password" name="upass"  autocomplete="off" required/>

                        <input type="password" class="input-block-level" placeholder="Confirm Password" name="cupass" autocomplete="off" required/>

                        <br><br>

                        <hr/>
                        <button class="btn btn-large btn-primary" type="submit" name="submit" onclick="return(submitreg());">Sign Up</button>
                        <a href="adminlogin.php" button class="btn btn-large btn-primary" >Login</button></a>

                    </div> <!--end form group div-->
                </form>

                <script>
                    function submitreg() {
                        var form = document.reg;
                        if(form.username.value == "") {
                            alert("Enter user name.");
                            return false;
                        }  else if (form.upass.value == "") {
                            alert("Enter password.");
                            return false;
                        } else if(form.cupass.value == ""){
                            alert("Enter password.");
                            return false;
                        }

                    }
                </script>

            </div> <!--panel-->
        </div> <!-- /row -->
    </div> <!-- /col -->

</div> <!-- /container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
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

