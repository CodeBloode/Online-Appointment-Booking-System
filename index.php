<?php 
// session_start();
//     include_once 'include/backsignin.php';
//     $user = new User();

//     $uid = $_SESSION['uid'];

//     if (!$user->get_session()){
//        header("location:studentlogin.php");
//     }

//     if (isset($_GET['q'])){
//         $user->user_logout();
//         header("location:studentlogin.php");
//     }
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
		<title>home</title>

		<link  rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all">
	</head>
<body>
	
	<!--include other php code extension-->
 

           <div class="topnav">
            <a href="students/logout.php"> Logout </a>
            
             <a href="bookedSsn.php">Booked Sessions</a>
             <a class="active" href="studentbookappPage.php">Book Appointemnt</a>
            
    </div> 

    <h3 style="float: center; margin-top: 108px; margin-left: 100px" >
                  Welcome: <?php echo $_SESSION['StudentName'];//$user->get_fullname($uid); ?>
          </h3>
</body>

</HTML>


<?php } 

?>

