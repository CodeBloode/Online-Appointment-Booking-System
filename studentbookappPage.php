<?php
session_start();

if (!isset($_SESSION['StudentName'])){

header('location:students/index.php');


}else{ ?>
<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student Book Appointment</title>
        <script src="jquery/jquery.min.js"></script>


                <!-- SCRIPTS -->
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/mdb.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>

                <!--  STYLES  -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.css">

<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/font-awesome.min.css">
             <!-- MDB core JavaScript -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/mdb.min.css">
<!-- <link href="bootstrap/bootstrapcss/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">


              <link rel="stylesheet" href="css/stylebook.css" type="text/css">
     <link rel="stylesheet" href="css/datepicker.css">
     <link rel="stylesheet" href="css/timepicker.css">
    <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="js/timepicker.js"></script>
    <link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
    


	<title>Student Book Appointment</title>
	
  </head>

    <body style="background-color: lightgrey">

    <!--    This code purpose is for ajax animations only during page load-->
    <div class="se-pre-con"></div>
<!--    <style>-->
<!--        .no-js #loader { display: none;  }-->
<!--        .js #loader { display: block; position: absolute; left: 100px; top: 0; }-->
<!--        .se-pre-con {-->
<!--            position: fixed;-->
<!--            left: 0px;-->
<!--            top: 0px;-->
<!--            width: 100%;-->
<!--            height: 100%;-->
<!--            z-index: 9999;-->
<!--            background: url(images/submitting.gif) center no-repeat #fff;-->
<!--        }-->
<!--    </style>-->
<!--    <!--    This is used to load the animation during fetching the data from the database to display for the records that are available-->-->
<!--    <script type="text/javascript">-->
<!--        $(window).load(function() {-->
<!--            // Animate loader off screen-->
<!--            $(".se-pre-con").fadeOut("slow");-->
<!--        });-->
<!--    </script>-->

    <!--   The ajax animation page load ends here -->
    <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="student.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="studentbookappPage.php">Book Appointment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bookedSsnPage.php">Booked Sessions</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="students/logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    </div>

    </br>
    <h3 style="margin-left: 360px; margin-top: 70px;"> <i>Please fill in the fields to Book an Appointment</i></h3>

		<div id="bookcontent" style="float: center">
		<form action="students/bookappointment.php" method="post">

        
             <label>Pick Counsellor</label><br>
                <select name="counsellor">
                    <option value="null">-- NONE --</option>
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

                    <input type="text" name="date" id="datepicker" required autocomplete="off"><br>

                      <?php include("include/datepicker.php");?>
                </br>

                <label>Time</label><br>
                <div id="picktimentime">

                    <input type="text" name="settime" id="timepicker" required autocomplete="off" />

                    <?php include("include/timepicker.php");?>
                    <br>

                </div>
                    <br><br>
                    <input type="submit" name="book" value="Book"/>

                    


                    <div id="showsessions">
                    <form action="book.php" method="POST">
                    </form>
        </form>


			</div>
    <div>
        <?php include "include/footer.html"?>
    </div>
    </body>

		</html>

    <?php  } ?>


   

