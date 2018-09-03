<!DOCTYPE html>
<html>
<head>
    <title> Set Schedule </title>

    <link rel="stylesheet" href="../css/setschedule.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <link rel="stylesheet" href="../css/timepicker.css">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../js/timepicker.js"></script>

</head>

<body style="background-color: lightgrey">

<nav class=" navbar nav-pills navbar-default fixed-top justify-content-end" style="background-color:forestgreen">

    <nav class=" navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto nav-justified-right ">
                <li class="nav-item">
                    <a class="nav-link" href="counsellor.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewappointmentsPage.php">View Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Set Shedule</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="../index.php">Logout</a>
                 </li>
        </ul>
    </nav>
</nav>


    <a href="backend/logout.php"> Logout </a>
    <a href=>Home</a>
</div>


    <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
    <br/>

<div class="container">
        <form action="backend/setSchedule.php" method="post" name="setschedule">

            <div class="container" Style="float: left; width: 220px; align-content: center; margin-left: 333px ">
            <label>Date Away</label><br/>
            <input type="text" name="date_away" class="form-control" id= "datepicker" required autocomplete="off" style="max-width: 200px">
            <?php include('../include/datepicker.php');?>

<br>
            
            <label>Time Away</label><br>
            <input type="text" name="time_away" class="form-control" id= "timepicker" required autocomplete="off" style="max-width: 200px">
            <?php include("../include/timepicker.php");?>
            <br>
            </div>

<div class="container" Style="float: right; width: 220px; align-content: center; margin-right: 333px">
            <label>Hours Away</label><br/>
            <select name="hduration" class="form-control" autocomplete="off" id="hduration" style="max-width: 200px">

                <option value="-01" disabled>HH</option>

                <?php for($i=0; $i<9; $i++)

                    echo "<option value='".$i."'>".$i."</option>"

                ?>

            </select><br/>




            <label>Days Away</label><br/>
            <select name="daysoff" class="form-control" autocomplete="off" id="daysduartion" style="max-width: 200px">
                <option value="-01" disabled>DD</option>
                <?php for($i=0; $i<32; $i++)

                    echo "<option value='".$i."'>".$i."</option>"

                    ?>
            </select><br/>

</div>
           <div class="container" Style=" float: left; align-content: center; margin-left: 400px; width: 400px">
          
            <label>Reason</label><br>

            <textarea name="reason" rows="3" class="form-control" cols="25" autocomplete="off" id="reason" style="max-width: 300px"> </textarea>



            <br/>
            <input type="submit" class="btn btn-primary mb-2" name="set" value="Set"  style="margin-right: 200px" onclick="return(confirmSchedule())"/>
            </div>
        </form>
</div>

<script>
    function confirmSchedule() {


       var awaydate = $("#datepicker").val();
       var time =  $("#timepicker").val();
       var hours =  $("#hduration").val();
       var days =  $("#daysduartion").val();
       var rsn =  $("#reason").val();


       window.confirm("Are you sure you want to be away on " +
           ""+awaydate+" from "+time+" for "+hours+"hours for "+days+" days Because of "+rsn){
        window.location.href="backend/setSchedule.php";
    }



    }

</script>
<div class="footer">
    <?php include "../include/footer.html"?>
</div>
</body>


</html>