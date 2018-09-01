<?php
session_start();

if (!isset($_SESSION['StudentName'])){

    header('location:students/index.php');

}else{

    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->
    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">
        <link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
        <title>Session</title>

<!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
		<script src="jquery/jquery.min.js"></script>

        <link rel="stylesheet" href="css/stylebook.css" type="text/css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/timepicker.css">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/timepicker.js"></script>

        <link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/font-awesome.min.css">
         <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrapcss/bootstrap.min.css" rel="stylesheet">

            <!-- Material Design Bootstrap -->
    <link href="bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.css">
     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.min.css">



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
   <!--  Bootstrap tooltips -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>
   <!--  Bootstrap core JavaScript -->
   <script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/mdb.min.js"></script>

    <!-- Your custom styles (optional) -->

    </head>
   <body style="background-color: lightgrey">
<!--    This code purpose is for ajax animations only during page load -->
<!--	<div class="se-pre-con"></div>-->
<!--	<style>-->
<!--	.no-js #loader { display: none;  }-->
<!--.js #loader { display: block; position: absolute; left: 100px; top: 0; }-->
<!--.se-pre-con {-->
<!--	position: fixed;-->
<!--	left: 0px;-->
<!--	top: 0px;-->
<!--	width: 100%;-->
<!--	height: 100%;-->
<!--	z-index: 9999;-->
<!--	background: url(images/submitting.gif) center no-repeat #fff;-->
<!--}-->
<!--	</style>-->
<!--    This is used to load the animation during fetching the data from the database to display for the records that are available -->
<!--    <script type="text/javascript">-->
<!--        $(window).load(function() {-->
<!--            // Animate loader off screen-->
<!--            $(".se-pre-con").fadeOut("slow");;-->
<!--        });-->
<!--    </script>-->

<!--   The ajax animation page load ends here -->

    <div id="header">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/datepicker.css">
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    </div>

      <nav class=" navbar nav-pills navbar-default fixed-top justify-content-end" style="background-color:forestgreen">

    <nav class=" navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto nav-justified-right ">
            <li class="nav-item">
                <a class="nav-link" href="student.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studentbookappPage.php">Book Appointment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="bookedSsnPage.php">Booked Sessions</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="students/logout.php">Logout</a>
            </li>
        </ul>
    </nav>
</nav>

<br><br>
<div class="container" style="margin-top: 30px ">
    <h4>
        Booked sessions are:
    </h4>
    <br>
    <div>
    <form action="#" method="get">
    <div class=".container">
        <input type="text" class="btn btn-secondary btn-outline-info" id= "datepicker" name="date" value="Enter Date" autocomplete="off">
        <?php include('include/datepicker.php');?>
        <button type="submit" class="btn btn-outline-success btn-sm" name="getrecs"><span>Search <img src="images/search.png" title="" alt="" height="28" width="28" /></span></button>
        </div>
    </form>
  </div>
    <?php
include_once "students/bookedSsn.php";

    if(isset($_GET['getrecs'])){
        $date= $_GET['date'];
         
        $sessions= new Sessions($date);
        $sessions->getAvailableSessions();
    }
    ?>

        </table>
    </div>
<div>
    <?php include "include/footer.html"?>
</div>
    </body>

</HTML>

<?php }