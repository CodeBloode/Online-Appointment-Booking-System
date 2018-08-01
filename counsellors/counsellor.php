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
	</head>
<body>



          <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto">
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
                <a  class="nav-link" href="../index.php">Logout</a>
            </li>
        </ul>
    </nav>
    </div>
          <div style="float: right; text-decoration: none; font-family: SansSerif; font-size: 17px; margin-top -10px; margin-right: 20px;">

              <a href="changepasspage.php">Change Password</a>
          </div>
                <div style="height: 100vh>
        <div class="flex-center flex-column"  >
            <h2 class="animated fadeIn mb-4" style="margin-top:150px ;margin-left:500px; ">  Welcome  <?php echo $_SESSION['counsellorName'];?> </h2>

        </div>


<?php include"../include/footer.html";?>


</body>

</HTML>

<?php } ?>

