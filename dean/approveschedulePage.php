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
    <title>Schedules</title>

</head>
<body>
<div class="topnav">
    <a href="backend/logout.php"> Logout </a>
    <a href="viewsessionsPage.php"> Views Session </a>
    <a href="approveschedulePage.php"> Approve Schedules</a>
    <a href="../counsellors/counsellorSignupPage.php"> New Counsellor</a>
    <a href="dean.php"">Home</a>

</div>
<h4 style="float: left;">
    Counsellors who will be away
</h4>
<br><br>
<div>
    <form action="approveschedulePage.php" method="get">
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
        include_once "backend/approveschedule.php";
        if(isset($_GET['get'])){

            $from=$_GET['from'];
            $to=$_GET['to'];

            $view= new ApproveSchedule($from,$to);
            $view->getSchedules();
        }
    ?>
    </table>
</div>

<div>
    <form action="backend/approveschedule.php" method="get">
        <button type="submit" name="approve">Approve</button>
    </form>
</div>
<br><br>
<div>
    <form action="printlogsessions.php" method="get">
        <button type="submit" name="print">Print</button>
    </form>
</div>
<?php }

