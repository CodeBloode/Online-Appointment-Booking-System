<?php 
  session_start();

  if (!isset($_SESSION['StudentName']) && !isset($_SESSION['regNo'])){

    header('location:students/index.php');

  }else{

?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>student homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


        <!-- SCRIPTS -->
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.bundle.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/mdb.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrapjs/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/font-awesome.min.css">
             <!-- MDB core JavaScript -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrapcss/mdb.min.css">


		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">

		    <!-- Material Design Bootstrap -->
    <link href="bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">




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
        $(".se-pre-con").fadeOut("slow");
    });
</script>

<!--   The ajax animation page load ends here -->
	<!--include other php code extension-->

<div class="topnav fixed-top" style="background-color: forestgreen">
           <nav class="navbar navbar-expand-md navbar-dark p-0">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                       <a class="nav-link active" href="student.php">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="studentbookappPage.php">Book Appointment</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="bookedSsnPage.php">Booked Sessions</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="students/logout.php">Logout</a>
                   </li>
               </ul>
               </nav>
</div>


<div style="height:auto; width: auto;" class=" text-center">
        <div class="flex-center flex-column"  >
        
            <h2 class="animated fadeIn mb-4" style="margin-top:150px; "> Welcome back, <?php echo $_SESSION['StudentName']; ?> </h2>

            <h5 class="animated fadeIn mb-3 " style="margin-top:40px;">Thank you for your log in. We're glad you're with us.</h5>
</div
      

<div>
<?php include "include/footer.html"?>
</div>


</body>

</HTML>


<?php }

?>

