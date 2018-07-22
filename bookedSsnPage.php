<?php
session_start();

if (!isset($_SESSION['StudentName'])){

    header('location:studentloginPage.php');

}else{

    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->
    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
        <title>Sessions</title>

        <link rel="stylesheet" href="css/stylebook.css" type="text/css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/timepicker.css">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/timepicker.js"></script>

        <!--<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all"> -->
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
    <script type="text/javascript" src="bootsrap/bootstrapjs/mdb.min.js"></script>

    <!-- Your custom styles (optional) -->

    </head>
    <body style="background-color: lightgrey">

    <div id="header">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/datepicker.css">
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    </div>

     <div class="topnav" style="background-color: forestgreen">
            <a href="students/logout.php"> Logout</a>
            <a href="studentbookappPage.php">Book Appointemnt</a>
             <a class="" href ="index.php">Home</a>
             <a class="active" href="#">Booked Sessions</a>
            
            
    </div> 
    <h4 style="float: center;">
        Booked sessions are:
    </h4>
    <br><br>
    <div>
    <form action="#" method="get">
    <div class=".container">
        <input type="text" id= "datepicker" name="date" placeholder="Date">
        <?php include('include/datepicker.php');?>
        <button type="submit" name="getrecs"><span>Search <img src="images/search.png" title="" alt="" height="28" width="28" /></span></button>
        </div>
    </form>

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
        <div class="footer" style="background-color: steelblue; color: skyblue" > <p> &copy;Copyright CodeBloode Sons Systems 2018. &checkmark;</p></div>
    </body>

</HTML>

<?php }