<?php
session_start();

if (!isset($_SESSION['StudentName'])){

header('location:studentloginPage.php');


}else{ ?>
<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student Book Appointment</title>
        <link rel="stylesheet" href="css/stylebook.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/timepicker.css">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/timepicker.js"></script>

	<title>Student Book Appointment</title>
	
  </head>

    <body>
    <a href="index.php">Home</a>
    <a href="bookedSsnPage.php">Booked Sessions</a>
    </br>
    <h3 style="margin-left: 250px; margin-top: 10px;"> <i>Please fill in the fields to Book an Appointment</i></h3>
    </br>

		<div id="bookcontent">
		<form action="students/bookappointment.php" method="post">
             <label>Pick Counsellor</label><br>
                <select name="counsellor">
                    <option value="null">--NONE--</option>
                    <option value="counsellor 1"> counsellor 1 </option>
                    <option value="counsellor 2"> counsellor 2 </option>
                    <option value="counsellor 3"> counsellor 3 </option>
                    <option value="counsellor 4"> counsellor 4 </option>
                    <option value="counsellor 5"> counsellor 5 </option>
                    <option value="counsellor 6"> counsellor 6 </option>
                    <option value="counsellor 7"> counsellor 7 </option>
                    <option value="counsellor 8"> counsellor 8 </option>
                </select><br>

                <label>Pick Date </label><br>
                    <input type="text" name="date" id="datepicker" required><br>
                      <?php include('include/datepicker.php');?>
                </br>

                <label>Time</label><br>
                <div id="picktimentime">

                    <input type="text" name="settime" id="timepicker" required />
                    <?php include('include/timepicker.php');?>
                    <br>

                </div>
                    <br><br>
                    <input type="submit" name="book" value="Book"/>


                    <div id="showsessions">
                    <form action="book.php" method="POST">
                    </form>
        </form>


			</div>
    </body>

		</html>

    <?php  } ?>


   

