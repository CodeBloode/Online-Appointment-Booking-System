<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location:adminlogin.php');

}

else{
?>

<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<HTML lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/datepicker.css">
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <title>Sessions</title>


     <!-- SCRIPTS -->
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.js"></script>

   <!--This bootstrap jquery disaples the date picker.let it remain commented please-->
<!-- <script type="text/javascript" src="../bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="../bootstrap/bootstrapjs/mdb.min.js"></script>
<script type="text/javascript" src="../bootstrap/bootstrapjs/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">
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

<nav class=" navbar nav-pills navbar-default fixed-top justify-content-end" style="background-color:forestgreen">

    <nav class=" navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto nav-justified-right ">
            <li class="nav-item">
                <a class="nav-link" href="dean.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="viewsessionsPage.php"> Views Session</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="approveschedulePage.php">Approve Schedules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="backend/logout.php">Logout</a>
                   </li>
        </ul>
    </nav>
</nav>


        <div style="height:auto; width: auto; margin-top: 120px" class=" text-center;">
        <div class="flex-center flex-column"  >
<!-- <div class="container" style="margin-top: 120px "> -->

<h4 style="float: left;">
    Booked sessions are:
</h4>
<br><br>
<div>
    <form action="viewsessionsPage.php" method="get">
        <input type="text" id= "datepicker" class="btn btn-outline-info btn-sm" name="from" placeholder="From" autocomplete="off">
        <?php include('../include/datepicker.php');?>
        <input type="text" class="btn btn-outline-info btn-sm" name="to" placeholder="To" id="to" autocomplete="off">
    <script type="text/javascript">

$(document).ready(function(){


    $("#to").datepicker({
        numberOfMonth:1,
        format: 'yyyy/mm/dd',
        todayHighlight:true,
        autoclose:true,

    });

})
    </script>
        <button type="submit" class="btn btn-outline-success btn-sm" name="get"><span>Search <img src="../images/search.png" title="" alt="" height="17" width="17" /></span></button> <br><br><br>
    </form>
    <?php
        include_once "backend/viewsessions.php";
        if(isset($_GET['get'])){

            $from=$_GET['from'];
            $to=$_GET['to'];

            $view= new ViewSessions($from,$to);
            $view->getSessions();
        }
    ?>
    <br><br>
</div>


   <h4>
       Select Date Below And Print The Booked Sessions
   </h4>
</br></br>

    <form action="backend/sessionspdfreport.php" method="get">
        <input type="text" class="btn btn-outline-secondary btn-sm" id= "from1" name="from" placeholder="From" autocomplete="off">
        <script type="text/javascript">

            $(document).ready(function(){


                $("#from1").datepicker({
                    numberOfMonth:1,
                    format: 'yyyy/mm/dd',
                    todayHighlight:true,
                    autoclose:true,

                });

            })
        </script>
        <input type="text" class="btn btn-outline-secondary btn-sm"  name="to" placeholder="To" id="to1" autocomplete="off">
        <script type="text/javascript">

            $(document).ready(function(){


                $("#to1").datepicker({
                    numberOfMonth:1,
                    format: 'yyyy/mm/dd',
                    todayHighlight:true,
                    autoclose:true,

                });

            })
        </script>

        <button type="submit" class="btn btn-outline-dark btn-sm " name="print">Print</button>
    </form>
    </div>
    </div>
</body>

<div class="footer">
       <?php include "../include/footer.html"?>
    </div>

<?php }
?>
</body>
</HTML>

