<?php
	// Connect to db
	    $username = "root";

	    $password = "Alex1234";

	    $host = "localhost";

	    $dbname = "appointments";

	try {

	$conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);

	}

	catch(PDOException $ex)

	    {
	        $msg = "Failed to connect to the database";
	    }

	// Was the form submitted?
	if (isset($_POST["submit"]))

	{
	    // Gather the post data
	    $email = $_POST["email"];

	    $password = $_POST["password"];
	    $confirmpassword = $_POST["confirmpassword"];

	        if ($password == $confirmpassword) {
	            //has and secure the password

	            $password = password_hash($password,PASSWORD_DEFAULT);

	            // Update the counsellor's password

	                $query = $conn->prepare('UPDATE appointments.counsellor SET password = :password WHERE email = :email');

	                $query->bindParam(':password', $password);

	                $query->bindParam(':email', $email);
	                $query->execute();
	                $conn = null;

	            echo "Your password has been successfully reset.";
                header("Location: ../counsellorloginPage.php?msg=Account Created Successfully");


	        }

	        else

	            echo "<script>alert('Your passwords do not match.)</script>";
                echo "<script>window.open('../counselloresetpwdPage.php','_self')</script>";
                exit();

    }


