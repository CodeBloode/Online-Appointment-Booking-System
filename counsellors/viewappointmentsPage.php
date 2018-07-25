<?php
session_start();

if (!isset($_SESSION['counsellorName'])){

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

    </head>
    <body>

    <div id="header">
        <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="../css/datepicker.css">
        <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    </div>

   <div class="" >
      <a href="backend/logout.php">Logout</a>
       <a href ="counsellor.php">Home</a>
       <a href="setschedulePage.php">Set Schedule</a
   </div>
<div style="margin-top: 50px">
    <h4 style="float: left;">
        Booked sessions are:
    </h4>
</div>
    <br>
    <div style="margin-top: 70px">
        <form action="#" method="get">
            <input type="text" id= "datepicker" name="date" placeholder="Date" autocomplete="off">
            <?php include('../include/datepicker.php');?>
            <button type="submit" name="getrecs"><span>Search <img src="../images/search.png" title="" alt="" height="17" width="17" /></span></button>

        </form>
    </div>
        <?php
        include_once "backend/viewappointments.php";

        if(isset($_GET['getrecs'])){
            $date= $_GET['date'];

            $sessions= new Sessions($date);
            $sessions->getAvailableSessions();
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