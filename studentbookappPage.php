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
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/timepicker.css">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/timepicker.js"></script>
 
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/font-awesome.min.css">
         <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrapcss/bootstrap.min.css" rel="stylesheet">

            <!-- Material Design Bootstrap -->
    <link href="bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.css">
     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.min.css">



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
   <!--  Bootstrap tooltips -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>
   <!--  Bootstrap core JavaScript -->
   <script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="bootsrap/bootstrapjs/mdb.min.js"></script>

    <!-- Your custom styles (optional) -->

      <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
      <script src="jquery/jquery.min.js"></script>

	<title>Student Book Appointment</title>
	
  </head>

    <body style="background-color: lightgrey">

    <!--    This code purpose is for ajax animations only during page load-->
    <div class="se-pre-con"></div>
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/submitting.gif) center no-repeat #fff;
        }
    </style>
    <!--    This is used to load the animation during fetching the data from the database to display for the records that are available-->
    <script type="text/javascript">
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

    <!--   The ajax animation page load ends here -->

         <div class="topnav" style="background-color: forestgreen">

            <a href="students/logout.php"> Logout </a>
            <a href="index.php"> Home </a>
            <a href="bookedSsnPage.php">Booked Sessions</a>
            <a class="active" href="#">Book Appointment</a>

          </div>

    </br>
    <h3 style="margin-left: 360px; margin-top: 10px;"> <i>Please fill in the fields to Book an Appointment</i></h3>
    </br>

		<div id="bookcontent" style="float: center">
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
<<<<<<< HEAD
                    <input type="text" name="date" id="datepicker" required autocomplete="off"><br>
=======
                    <input type="text" name="date" id="datepicker" required <br>
>>>>>>> petermakss
                      <?php include('include/datepicker.php');?>
                </br>

                <label>Time</label><br>
                <div id="picktimentime">

<<<<<<< HEAD
                    <input type="text" name="settime" id="timepicker" required autocomplete="off" />
=======
                    <input type="text" name="settime" id="timepicker" required  />
>>>>>>> petermakss
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


   

