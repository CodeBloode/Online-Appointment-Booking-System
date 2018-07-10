<?php 
  session_start();

  if (!isset($_SESSION['username'])){

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
		<title>home</title>

		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
	</head>
<body>
	
	<!--include other php code extension-->
 

           <div class="topnav">
			 
             <a href="counsellors/logout.php"> Logout </a> 
			 <a href="counsellors/validatebook.php">Approve Shedules</a>
             <a href="counsellors/setSchedule.php">Set Shedule</a>
			 <a href="#">Help</a>
    <h4 style="float: left; margin-left: 10px; color: #FFFFFF" >
                  Hello, <?php echo $_SESSION['username'];?>
          </h4>
		  </div>
</body>

</HTML>

<?php } ?>

