<!DOCTYPE HTML>
<?php
session_start();

if(!isset($_SESSION['regno'])){
	
	header("location: studentlogin.php");
	
}else{

?>
<HTML lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>home</title>

		<link  rel="stylesheet" href="stylelogin.css" type="text/css" media="all">
	</head>
<body>
	
	<!--include other php code extension-->
<h1 align='Center'>
	<?php
	echo'Welcome';
	?>
</h1>
</body>

</HTML>
<?php } ?>