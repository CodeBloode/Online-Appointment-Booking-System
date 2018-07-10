<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/setschedule.css" type="text/css">
</head>

<body>
    <div class="topnav">
            <a href="#"> Logout </a>
            
             <a class="active" href="#">Set Schedule</a>
             <a href="counsindex.php">Home</a>
            
    </div> 
    <div id="maindiv">

 <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
 </br>
 <div id="setschedule">

 <form action=" " method="post">

			<label>Set Date </label><br>
                <input type="text" name="date" id="datepicker" required><br>
                   
                </br>
                </br>

                <label>Set Time</label><br>
               

                  <input type="text" name="settime" id="timepicker" required />
                   
                    <br> </br>
                    <label>Duration</label><br>

                    
                  <input type="text" name="settime" id="duration" placeholder="MM / Day / H r/Min" required />

                    <br><br>
                    <input type="submit" name="set" value="Set"/>

                  </div>
                  </form>
               </div>
               <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
</body>


</html>