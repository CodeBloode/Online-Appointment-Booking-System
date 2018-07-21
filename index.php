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
        <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
        <script src="jquery/jquery.min.js"></script>
	</head>
<body >
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

