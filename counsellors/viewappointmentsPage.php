<?php
session_start();

if ((!isset($_SESSION['counsellorName'])) && (!isset($_SESSION['counsellorNumber']))){

    header('location:counsellorloginPage.php');

}else{

    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->
    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
        <title>Sessions</title>

        <script src="../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
      <script type="text/javascript" src="../js/timepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
       <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">

    </head>
    <body style="background-color: lightgrey">

    <div id="header">
        <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="../css/datepicker.css">
        <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    </div>
        <div style="height:auto; width: auto;" class=" text-center">
        <div class="flex-center flex-column"  >
      <nav class=" navbar nav-pills navbar-default fixed-top justify-content-end" style="background-color:forestgreen">
    <nav class=" navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto nav-justified-right ">
            <li class="nav-item">
                <a class="nav-link" href="counsellor.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">View Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="setschedulePage.php">Set Shedule</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="backend/logout.php">Logout</a>
                  </li>
        </ul>
    </nav>
</nav>




<div class="container" style="margin-top: 150px "> 
    <h4 >
        Booked sessions are:
    </h4>
    <br>
    
        <form action="#" method="get">
            <input type="text" id= "datepicker" class="btn btn-outline-info btn-sm" name="date" placeholder="Date" autocomplete="off">
            <?php include('../include/datepicker.php');?>
            <button type="submit" class="btn btn-outline-success btn-sm" name="getrecs"><span>Search <img src="../images/search.png" title="" alt="" height="17" width="17" /></span></button>

        </form>
    </div>
        <?php
        include_once "backend/viewappointments.php";
        //require_once"backend/counsellorlogin.php";

        if(isset($_GET['getrecs'])){
            $date= $_GET['date'];


            $sessions= new Sessions($date);
            $sessions->getAvailableSessions($_SESSION['counsellorNumber']);
        }
        ?>

        </table>
    </div>
    <div class="footer">
       <?php include "../include/footer.html"?>
    </div>
    </body>

    </HTML>

<?php }