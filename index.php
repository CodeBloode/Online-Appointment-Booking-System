<?php 
  session_start();

  if (!isset($_SESSION['StudentName'])){

    header('location:studentloginPage.php');

  }else{
?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<div class="footer" style="background-color: steelblue; color: skyblue"> <p>  &copy;Copyright CodeBloode Sons Systems 2018. &checkmark; </p></div>
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


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="bootsrap/bootstrapjs/mdb.min.js"></script>
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body >
	
	<!--include other php code extension-->
 

           <div class="topnav" style="background-color: forestgreen">
            <a href="students/logout.php"> Logout </a>
            
             <a href="bookedSsnPage.php">Booked Sessions</a>
             <a class="" href="studentbookappPage.php">Book Appointment</a>

		  </div>



<div style="height: 100vh>
        <div class="flex-center flex-column"  >
            <h2 class="animated fadeIn mb-4" style="margin-top:150px ;margin-left:500px; "> Welcome, <?php echo $_SESSION['StudentName']; ?> </h2>

            <h5 class="animated fadeIn mb-3 " style="margin-top:40px ;margin-left:400px;">Thank you for login our System. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted" style="margin-top:40px ;margin-left:620px; ">Egerton university</p>
        </div>
    </div>




</body>

</HTML>


<?php } 

?>

