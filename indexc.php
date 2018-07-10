<?php 
  session_start();

  if (!isset($_SESSION['CounsellorName'])){

    header('location:counsellorhome.php');

  }else{
?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>home</title>

		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
	</head>
<body>
	
	<!--include other php code extension-->
 

           <div class="topnav">
             <a href="validatebook.php">Approve Shedules</a>
             <a href="setSchedule.php">Set Shedule</a>
             <a href="logout.php"> Logout </a>
    </div> 

    <h4 style="float: center; margin-top: 108px; margin-left: 100px" >
                  Welcome: <?php echo $_SESSION['CounsellorName'];?>
          </h4>
</body>

</HTML>

<?php } ?>

