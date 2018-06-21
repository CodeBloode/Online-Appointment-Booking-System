<!DOCTYPE HTML>

    <html>

    <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>log in</title>
        <link rel="stylesheet" href="signup.css">
    </head>

    <body id="signupbody" color="blue">
            

        <form method="post" action="">
        <div id="legend">
        <fieldset>
        <legend align=center> <i> <b> <h3> please fill in all the fields </h3></b></i></legend>

            <div class="maindiv">
                <img class="logo" src="images/logo.jpg" alt="logo" height="80px" width="80px" align="center">
                <div class="head">
                    <h3>Register Here. </h3>
                </div>

                <!-- This has been arranged according to the way fields are in the database
                Above all the signup form should capture all the students details in our database
                -->
                <div id="container">
                    <p> Registration Number</p>
                    <input type="text" name="regno" maxlength="18" required>

                    <p> User Name </p>
                    <input type="text" name="email" maxlength="40" required>

                    <p> Phone No. </p>
                    <input type="text" name="email" maxlength="14" required>

                    <p> Email </p>
                    <input type="text" name="email" maxlength="30" required>
                    
                    <p>Password </p>
                    <input type="password" name="pass" minlength="6" required><br/>
                    
                    <p>Confirm Password </p>
                    <input type="password" name="pass" minlength="6" required><br/>
                    <br>
                    <input type="submit" name="signup" value="Register" >
                    <input type="reset" value="Clear"><br/>
                    <p> <i> Having an accout? <a id="loglink" href="studentlogin.php"> <i> login </i></a></p>
                </div>
            </div>
            </fieldset>
           
        </form>
    </body>

    </html>

