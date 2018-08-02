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
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/datepicker.css">
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <title>Schedules</title>

    <!-- SCRIPTS -->
    <script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.min.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrapjs/bootstrap.js"></script>
<!--    <script type="text/javascript" src="../bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>-->
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
<div class="topnav" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md ">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="dean.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="viewsessionsPage.php"> Views Session </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="approveschedulePage.php">Approve Schedules</a>

            <li class="nav-item">
                <a href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="backend/logout.php">Logout</a>
            </li>
        </ul>
    </nav>

</div>
<h4 style="float: left;">
    Counsellors who will be away
</h4>
<br><br>
<div>
    <form action="#" method="get">
        <input type="text" id= "datepicker" name="from" placeholder="From" autocomplete="off">
        <?php include('../include/datepicker.php');?>
        <input type="text" name="to" placeholder="To" id="to" autocomplete="off">
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
        <button type="submit" name="get"><span>Search <img src="../images/search.png" title="" alt="" height="17" width="17" /></span></button>
    </form>
    <?php
include_once ("backend/approveschedule.php");
        if(isset($_GET['get'])){

            $from=$_GET['from'];
            $to=$_GET['to'];

           $view= new ApproveSchedule($from,$to);
            $view->getSchedules();
        }
    ?>
    </table>
</div>


<br><br>
<div>
    <form action="backend/printapprovedschedule.php" method="get">
        <h4>Print Schedule for counsellors Who will be away</h4>

    <input type="text" id= "from1" name="from" placeholder="From" autocomplete="off">
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
    <input type="text"  name="to" placeholder="To" id="to1" autocomplete="off">
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

        <button type="submit" name="print">Print</button>
    </form>

    <br><br>
    <div>
        <h4>Approve schedule of counsellors</h4>
        <form action="backend/approvecounsellorschedule.php" method="POST">

        <lable > Counsellor Number</lable>
            <br>
            <select name="counsellor">
                <option value="">-- NONE --</option>
                <option value="counsellor 1"> counsellor 1 </option>
                <option value="counsellor 2"> counsellor 2 </option>
                <option value="counsellor 3"> counsellor 3 </option>
                <option value="counsellor 4"> counsellor 4 </option>
                <option value="counsellor 5"> counsellor 5 </option>
                <option value="counsellor 6"> counsellor 6 </option>
                <option value="counsellor 7"> counsellor 7 </option>
                <option value="counsellor 8"> counsellor 8 </option>
            </select>
            <br>

            <input type="text" id= "from2" name="from" placeholder="Date Away" autocomplete="off">
            <script type="text/javascript">

                $(document).ready(function(){


                    $("#from2").datepicker({
                        numberOfMonth:1,
                        format: 'yyyy/mm/dd',
                        todayHighlight:true,
                        autoclose:true,

                    });

                })
            </script>

            <button type="submit" name="approve">Approve</button>
        </form>
    </div>
</div>
<div class="footer">
    <?php include "../include/footer.html"?>
</div>
</body>
    </HTML>
<?php }

