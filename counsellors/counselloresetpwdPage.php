<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <title>reseting counsellor password</title>

  <link rel="stylesheet" type="text/css" href="../css/stylereset.css">
    <style>
        .error {color: #FF0000;}
    </style>
<<<<<<< HEAD

=======
>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
</head>


<body>


<div class="title-bar">
    <div class="center-title"> <i>Egerton University Counselling Department</i></div>

  </div>

  <form method="post" name="reg">
<div class="reset-password-box">

  <div class="title-bar">
    <div class="title"> <i> All fields below are required </i></div>

  </div>
<<<<<<< HEAD
    <p style="margin-left: 25px"><span class = "error">* required.</span></p>
=======

>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
  <div class="username">
    <label for="username-input" class="username-label">Username or Email <span class = "error"> *</span></label>
    <input type="text" required id="username-input" autofocus name="username" maxlength="40" autocomplete="off">
  </div>
<<<<<<< HEAD

  <div class="password">
    <label for="password-input" class="password-label">New Password <span class = "error"> *</span></label>
    <input type="password" id="password-input" name="npass" minlength="5" maxlength="40" id="txtNewPassword" required/>
=======
  
  <div class="password">
    <label for="password-input" class="password-label">New Password <span class = "error"> *</span></label>
    <input type="password" id="password-input" name="npass" minlength="5" maxlength="40">
>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
  </div>


  <div class="new-password">
    <label for="new-password-input" class="new-password-label">Confirm New Password <span class = "error"> *</span></label>
<<<<<<< HEAD
    <input type="password" id="new-password-input" name="cpass" minlength="5" maxlength="40" id="txtConfirmPassword" onkeyup="checkPasswordMatch();"  required/>
=======
    <input type="password" id="new-password-input" name="cpass" minlength="5" maxlength="40" >
>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
  </div>
<!--
  <div class="password-verification">
    <label for="password-input" class="password-verification-label">Password Verification</label>
    <input type="password" id="password-verification-input">
  </div>

    -->
  <div class="back-login">
  <div class="reset-password-btn" style="float: left;width: 100px; height: 20px">

<<<<<<< HEAD
      <input style="background-color: SteelBlue;height: 40px; display: block; border: 1px solid LightGrey; width: 120px;
      text-align: center" type="submit" value="Submit" >
=======
      <input style="background-color: SteelBlue;height: 40px; display: inline-block; border: 1px solid LightGrey; width: 120px;
      text-align: center" type="submit" value="Submit" onclick="return(submitreg());">
>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
    </div>
    <div class="back" style="float: right;width: 100px; height: auto">
      <a href="counsellorloginPage.php"><i class="fa fa-angle-double-left">Back to Login</i></a>
    </div>
<<<<<<< HEAD

=======
    
>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
  </div>

</div>
</form>
<<<<<<< HEAD
<script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
<script type="text/javascript">
    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();

        if (password != confirmPassword)
            $("#divCheckPasswordMatch").html("Passwords do not match!");
        else
            $("#divCheckPasswordMatch").html("Passwords match.");
    }
</script>
=======
<script>
    function submitreg() {
        else if(form.username.value == "") {
            alert("Enter username.");
            return false;
        }  else if (form.npass.value == "") {
            alert("Enter password.");
            return false;
        } else if(form.npass.value == ""){
            alert("Enter password.");
            return false;
        }
        else if (form.npass != form.cpass) {
            alert("Passwords do not match!!");
            return false;
        }
    }
</script>

>>>>>>> f41a535fa95c16a2af4738a3ebdb24e2d04d993c
</body>
<div style="text-align: center; margin-top: 45%;background-color: SteelBlue; color: white;">
    &copy;Copyright 2018 <br><i>CodeBloode Sons Systems. </i>&checkmark;
</div>
</html>


















