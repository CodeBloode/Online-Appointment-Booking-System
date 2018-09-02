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

<body>

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
<div id="maindiv">

    <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
    <br/>
    <div id="setschedule">
        <form action="backend/setSchedule.php" method="post" name="setschedule">
            <label>Date Away</label><br/>
            <input type="text" name="date_away" id= "datepicker" required autocomplete="off"><br>
            <?php include('../include/datepicker.php');?>

            <br>
            <label>Time Away</label><br/>
            <input type="text" name="time_away" id= "timepicker" required autocomplete="off"><br>
            <?php include("../include/timepicker.php");?>

            <br/>
            <label>Hours Away</label><br/>
            <select name="hduration" autocomplete="off" id="hduration">

                <option value="-01" disabled>HH</option>

                <?php for($i=0; $i<9; $i++)

                    echo "<option value='".$i."'>".$i."</option>"

                ?>

            </select><br/>

            <label>Days Away</label><br/>
            <select name="daysoff" autocomplete="off" id="daysduartion">
                <option value="-01" disabled>DD</option>
                <?php for($i=0; $i<32; $i++)

                    echo "<option value='".$i."'>".$i."</option>"

                    ?>
            </select><br/>

            <label>Reason</label><br>
            <textarea name="reason" rows="3" cols="50" autocomplete="off" id="reason"> </textarea>

            <br/><br/>
            <input type="submit" name="set" value="Set" onclick="return(confirmSchedule())"/>
        </form>

    </div>
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
<div>
    <?php include "../include/footer.html";?>
</div>
</body>


</html>