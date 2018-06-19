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
                    <h1>Sign Up </h1>
                </div>

                <div id="container">
                    <p> Registration Number</p>
                    <input type="text" name="regno" maxlength="18" required>
                     <p> Email </p>
                      <input type="text" name="email" maxlength="30" required>

                    <p>Password </p>
                    <input type="password" name="pass" minlength="6" required><br/>


                    <input type="submit" name="signup" value="Sign up" > 
                    <input type="reset" value="Clear"><br/>
                    <p> <i> Having an accout? <a id="loglink" href="#"> <i> login </i></a></p>
                </div>
            </div>
            </fieldset>
           
        </form>
    </body>

    </html>

