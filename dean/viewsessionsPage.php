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
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/datepicker.css">
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <title>Sessions</title>

</head>
<body>
<div class="topnav">
    <a href="backend/logout.php"> Logout</a>
    <a href="viewsessionsPage.php">Views Session</a>
    <a class="" href ="index.php">Home</a>
</div>
<h4 style="float: left;">
    Booked sessions are:
</h4>
<br><br>
<div>
    <form action="viewsessionsPage.php" method="get">
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
        <button type="submit" name="get"><span>Search <img src="../images/search.png" title="" alt="" height="28" width="28" /></span></button>
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
    </table>
</div>
<br><br>
<div>
   <h4>
       Wasee wa front end Find  away to edit this stuff
   </h4>

</div>
<br><br>
<div>
    <form action="backend/sessionspdfreport.php" method="get">
        <input type="text" id= "from1" name="from" placeholder="From">
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
        <input type="text"  name="to" placeholder="To" id="to1">
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
</div>
<?php }

