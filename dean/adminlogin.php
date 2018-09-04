
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Counselling Department" content="Homepage with signup/sign in and email verification">

    <title>admin login page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1c7430">
    <div class="container" style="background-color:; width: 100%; float: right;margin-right: -700px">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <div style="width: 150px; height: 50px; color:#FFFFFF; text-align: center;
                    padding: 15px 0px; margin-top: -17px;  margin-left:-700px;">Home <span class="glyphicon glyphicon-home"></span> </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <dibv class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../index.php"></a>
                </li>

            </ul>
        </dibv>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container" >
    <h1> Counselling Department <span id= "header_subtitle"> Service to All.</span></h1>
    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive img-rounded" src="css/girl.jpg" alt="">
        </div>
        <!-- /.col-md-8 -->
        <div class="col-md-4">


            <div id="login">
                <div class="container">
                    <!--form for sign in or sign up-->
                    <div class="col-md-4">
                        <form class="form-signin" method="post" action="backend/login.php">

                            <h3 class="form-signin-heading">Dean Login In.</h3><hr />
                            <input type="text" class="input-block-level" placeholder="User Name" name="emailusername" required/>
                            <input type="password" class="input-block-level" placeholder="Password" name="password"  required/>
                            <br><br>
                            <button class="btn btn-large btn-primary" type="submit" name="submit">Sign in</button>
                            <a href="adminSignupPage.php" button class="btn btn-large btn-primary" >Register a now</button> </a>
                            <!-- <a href="signup.php" class="btn btn-large">Register As A Volunteer</a><hr />-->
                            <br><br>
<!--                            <a href="../students/forgot_pw.php" style= "font-weight: bold; color: green">Forgot your Password ? </a>-->
                        </form>
                    </div>
                </div> <!-- /container -->
            </div>
        </div>

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <!-- /.col-md-3 -->
    <div class="row">
        <div class="col-md-3">
            <h3>Our Counsellors</h3>
            <p>Our counsellors are always committed ready to serve. Your participation as a student is highly regarded . Feel free and find help with us.</p>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <h3>Our Mission</h3>
            <p>To provide day to day services to all students<br>
                within Egerton-Njoro Campus and build a holistic and self drived citizens.
            </p>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <h3>Announcements</h3>
            <p>November 1 : Counsellor1 will not be available <br>
                December 10 : Counsellor meeting. No appointment booking <br>
                December 22 : Long holiday break</p> <br>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
            <h3>Dean Office</h3>
            <p>All students are free for consultation<br>
                between 8:00am to 4:30pm every day unless<br>
                or otherwise stated.
            </p>
            <a class="btn btn-default" href="#">More Info</a>
        </div>
        <!-- /.col-md-3 -->
    </div>
</div>

<!-- /.row -->

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p> &copy;Copyright <?php echo date('Y')?>. <i>CodeBloode Sons Systems. </i>&checkmark;</p>
        </div>
    </div>
</footer>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

