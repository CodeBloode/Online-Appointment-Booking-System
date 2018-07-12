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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>student homepage</title>

		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
	</head>
<body>
	
	<!--include other php code extension-->
 

           <div class="topnav">
            <a href="students/logout.php"> Logout </a>
            
             <a href="bookedSsnPage.php">Booked Sessions</a>
             <a class="" href="studentbookappPage.php">Book Appointment</a>

		  </div>

    <h4>
        Welcome: <?php echo $_SESSION['StudentName']; ?>
    </h4>
</body>

</HTML>


<?php } 

?>

