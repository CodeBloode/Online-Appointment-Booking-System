<?php
session_start();

if (!isset($_SESSION['username'])){

    header('location:adminlogin.php');

}else{
    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->
    
    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
        <title>Home</title>

        <!-- SCRIPTS -->
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/mdb.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
             <!-- MDB core JavaScript -->
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">


        <link  rel="stylesheet" href="../css/stylelogin.css" type="text/css" media="all">

            <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">




    <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    <body>

    <!--include other php code extension-->


        <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md ">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewsessionsPage.php"> Views Session </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="approveschedulePage.php">Approve Schedules</a>
            </li>
            <li class="nav-item">
                <a href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="backend/logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    </div>



        <div style="height:auto; width: auto;" class=" text-center">
        <div class="flex-center flex-column"  >
    <h4 class="animated fadeIn mb-4" style="margin-top:250px; "> Welcome: <?php echo $_SESSION['username']; ?>

    </h4>
    </div>
    </div>

     <div class="footer">
       <?php include "../include/footer.html"?>
    </div>

    </body>

    </HTML>


<?php }

?>

