<?php 
session_start();
    include_once 'include/backsignin.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:studentlogin.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:studentlogin.php");
    }
?>
<!DOCTYPE HTML>
<!-- remember to add footer for the one who is doing front-end -->
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>home</title>

		<link  rel="stylesheet" href="stylelogin.css" type="text/css" media="all">
	</head>
<body>
<div id="header">
        <a style="float: right;margin-right: 30px;" href="index.php?q=logout"><strong><i>Logout</i></strong></a>
      </div>
	
	<!--include other php code extension-->
 <h4 style="float: left;">
                  Welcome <?php $user->get_fullname($uid); ?>
    			</h4>
</body>

</HTML>

