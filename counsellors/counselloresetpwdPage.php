<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <title>reseting counsellor password</title>

  <link rel="stylesheet" type="text/css" href="../css/stylereset.css">
    <style>
        .error {color: #FF0000;}
    </style>

</head>


<body>


<div class="title-bar">
    <div class="center-title"> <i>Egerton University Counselling Department</i></div>

  </div>

  <form method="post"  action="backend/resetpwd.php" name="reset">
<div class="reset-password-box">

  <div class="title-bar">
    <div class="title"> <i> All fields below are required </i></div>

  </div>
    <p style="margin-left: 25px"><span class = "error">* required.</span></p>
  <div class="username">
    <label for="username-input" class="username-label">Email <span class = "error"> *</span></label>
    <input type="text" required id="username-input" autofocus name="email" maxlength="40" autocomplete="off">
  </div>

  <div class="password">
    <label for="password-input" class="password-label">New Password <span class = "error"> *</span></label>
    <input type="password" id="password-input" name="password" minlength="5" maxlength="30" id="txtNewPassword" required/>

  <div class="new-password" style="margin-left: -30px">
    <label for="new-password-input" class="new-password-label">Confirm New Password <span class = "error"> *</span></label>
    <input  type="password" id="new-password-input" name="confirmpassword" minlength="5" maxlength="30" id="txtConfirmPassword" onkeyup="checkPasswordMatch();"  required/>
  </div>
<!--
  <div class="password-verification">
    <label for="password-input" class="password-verification-label">Password Verification</label>
    <input type="password" id="password-verification-input">
  </div>

    -->
  <div class="back-login">
  <div class="reset-password-btn" style="float: left;width: 100px; height: 20px">
      <input style="background-color: SteelBlue;height: 40px; display: inline-block; border: 1px solid LightGrey; width: 120px;
      text-align: center" type="submit" name="submit" value="Submit" >
    </div>
    <div class="back" style="float: right;width: 100px; height: auto">
      <a href="counsellorloginPage.php"><i class="fa fa-angle-double-left">Back to Login</i></a>
    </div>
  </div>
  </div>

</div>
</form>
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

</body>
<div style="text-align: center; margin-top: 46%;background-color: SteelBlue; color: white;padding-bottom: 30px">
    &copy;Copyright 2018 <i>CodeBloode Sons Systems. </i>&checkmark;
</div>
</html>


















