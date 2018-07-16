<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/setschedule.css" type="text/css">
</head>

<body>
    <div class="topnav">
            <a href="backend/logout.php"> Logout </a>
             <a href="index.php">Home</a>
            
    </div> 
    <div id="maindiv">

 <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
 </br>
 <div id="setschedule">

 <form action=" " method="post">

			<label>Date Away</label><br>
                <input type="text" name="date" id="datepicker" placeholder="MM/DD/HR/MIN"required><br>
                   
                <br/>
                <br/>
				
			<label>Time Away</label><br>
                <input type="text" name="date" id="datepicker" placeholder="HR/MIN"required><br>
                   
                <br/>
                <br/>
                <label>Period Away</label><br>
               

                  <input type="text" name="settime" id="duration" placeholder="Period" required/>
                   
                    <br> <br/>
                    <label>Next time Available</label><br>

                    
                  <input type="text" name="settime" id="duration" placeholder="MM/DD/HR/MIN" required />

                    <br><br>
					<label>Reason</label><br>

                    
                  <textarea name="comment" rows="6" cols="50"> </textarea>

                    <br><br>
                    <input type="submit" name="set" value="Set"/>

                  </div>
                  </form>
               </div>
               <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
</body>


</html>