<?php
session_start();

if (!isset($_SESSION['username'])){

    header('location:adminlogin.php');

}else{
    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->
    <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
        <title>Home</title>
    </head>
    <body>

    <!--include other php code extension-->


    <div class="topnav">
        <a href="backend/logout.php"> Logout </a>
        <a href="viewsessionsPage.php"> Views Session </a>
        <a href="approveschedulePage.php"> Approve Schedules</a>

    </div>
    <h4>
        Welcome: <?php echo $_SESSION['username']; ?>
    </h4>
    </body>

    </HTML>


<?php }

?>

