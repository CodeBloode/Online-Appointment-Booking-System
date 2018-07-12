<?php
session_start();

if(!isset($_SESSION['username'])){

    header('location:backend/login.php');

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
    <link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.min.css">
    <title>Sessions</title>

</head>
<body>

<div id="header">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/datepicker.css">
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
</div>

<div class="topnav">
    <a href="students/logout.php"> Logout</a>
    <a href="studentbookappPage.php">Book Appointemnt</a>
    <a class="" href ="studentindexPage.php">Home</a>
</div>
<h4 style="float: left;">
    Booked sessions are:
</h4>
<br><br>
<div>
    <form action="#" method="get">
        <input type="text" id= "datepicker" name="from" placeholder="From">
        <?php include('../include/datepicker.php');?>
        <input type="text" name="to" placeholder="To" id="to">
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
        <button type="submit" name="get"><span>Search <img src="images/search.png" title="" alt="" height="28" width="28" /></span></button>
    </form>
    <?php

    include_once "backend/viewsessions.php";
    if(isset($GET['get'])){

        $date_from=$_GET['from'];
        $date_to=$_GET['to'];

        $ssn= new ViewSessions($date_from,$date_to);

        $ssn->getSessions();
    }

    ?>


    </table>
</div>

<div>
    <form action="printlogsessions.php" method="get">
        <button type="submit" name="print">Print</button>
    </form>
</div>
<?php }

