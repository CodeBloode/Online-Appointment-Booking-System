<?php 
  session_start();

  if (!isset($_SESSION['StudentName'])){

    header('location:studentloginPage.php');

  }else{
?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>student homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

		<!--<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all"> -->
		<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
		 <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

		    <!-- Material Design Bootstrap -->
    <link href="bootstrap/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    
	</head>
<body >
	
	<!--include other php code extension-->
 

         <!--  <div class="topnav">
            <a href="students/logout.php"> Logout </a>
            
             <a href="bookedSsnPage.php">Booked Sessions</a>
             <a class="" href="studentbookappPage.php">Book Appointment</a>

		  </div> -->
<!--
    <h4>
        Welcome: <?php echo $_SESSION['StudentName']; ?>
    </h4> -->



<div style="height: 100vh">
        <div class="flex-center flex-column">
            <h1 class="animated fadeIn mb-4"> Welcome: <?php echo $_SESSION['StudentName']; ?> </h1>

            <h5 class="animated fadeIn mb-3">Thank you for using our System. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted">Egerton university</p>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="bootsrap/bootstrapjs/mdb.min.js"></script>


</body>

</HTML>


<?php } 

?>

