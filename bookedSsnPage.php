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

    </head>
    <body>

    <div id="header">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/datepicker.css">
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    </div>

     <div class="topnav">
            <a href="students/logout.php"> Logout</a>
            <a href="studentbookappPage.php">Book Appointemnt</a>
             <a class="" href ="index.php">Home</a>
            
            
    </div> 
    <h4 style="float: left;">
        Booked sessions are:
    </h4>
    <br><br>
    <div>
    <form action="#" method="get">
        <input type="text" id= "datepicker" name="date" placeholder="Date">
        <?php include('include/datepicker.php');?>
        <button type="submit" name="getrecs"><span>Search <img src="images/search.png" title="" alt="" height="28" width="28" /></span></button>

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
        <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
    </body>

</HTML>

<?php }