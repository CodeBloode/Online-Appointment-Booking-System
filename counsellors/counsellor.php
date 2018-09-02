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

		<link  rel="stylesheet" href="../css/stylelogin.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">

        <script src="../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
      <script type="text/javascript" src="../js/timepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
       <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">

	</head>
<body>


<nav class=" navbar nav-pills navbar-default fixed-top justify-content-end" style="background-color:forestgreen">

    <nav class=" navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto nav-justified-right ">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewappointmentsPage.php">View Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="setschedulePage.php">Set Shedule</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="backend/logout.php">Logout</a>
                  </li>
        </ul>
    </nav>
</nav>

          <div style="float: right; text-decoration: none; font-family: SansSerif; font-size: 17px; margin-top -10px; margin-right: 20px;">

              <a href="changepasspage.php">Change Password</a>
          </div>
                <div style="height: 100vh>
        <div class="flex-center flex-column">
            <h2 class="animated fadeIn mb-4" style="margin-top:150px ;margin-left:500px; ">  Welcome  <?php echo $_SESSION['counsellorName'];?> </h2>

        </div>
        </div>

<div class="footer">
       <?php include "../include/footer.html"?>
    </div>

</body>

</HTML>

<?php } ?>

