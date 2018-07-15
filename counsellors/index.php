<?php 
  session_start();

  if (!isset($_SESSION['counsellorName'])){

    header('location:counsellorloginPage.php');

  }else{
?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Home</title>

		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
	</head>
<body>


<<<<<<< HEAD
           <div class="topnav">
			 
             <a href="backend/logout.php"> Logout </a>
			 <a href="validatebook.php">Approve Shedules</a>
             <a href="setSchedule.php">Set Shedule</a>
			 <a href="#">Help</a>
=======
           <div class="topnav" style="float: right">


			 <a href="viewappointmentsPage.php" style="text-decoration: none">View Appointments</a>
             <a href="setschedulePage.php" style="text-decoration: none">Set Shedule</a>
               <a href="backend/logout.php" style="text-decoration: none">Logout </a>
               <a href="#" style="text-decoration: none">Help</a>
>>>>>>> alex-ogendo
		  </div>


                <h4> Welcome  <?php echo $_SESSION['counsellorName'];?></h4>

</body>

</HTML>

<?php } ?>

