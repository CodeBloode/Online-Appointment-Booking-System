<!DOCTYPE html>
<html>
<head>
	<title> Set Schedule </title>

	<link rel="stylesheet" href="../css/setschedule.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <link rel="stylesheet" href="../css/timepicker.css">
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../js/timepicker.js"></script>

</head>

<body>
    <div class="topnav">
            <a href="backend/logout.php"> Logout </a>
             <a href="index.php">Home</a>
    </div> 
    <div id="maindiv">

 <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
 <br/>
 <div id="setschedule">
     <form action="backend/setSchedule.php" method="post">
         <label>Date Away</label><br/>
         <input type="text" name="date_away" id= "datepicker" required autocomplete="off"><br>
         <?php include('../include/datepicker.php');?>

         <br>
         <label>Time Away</label><br/>
         <input type="text" name="time_away" id= "timepicker" required autocomplete="off"><br>
         <?php include("../include/timepicker.php");?>

         <br/>
         <label>Hours Away</label><br/>
         <select name="hduration" autocomplete="off">
             <option value="-01">HH</option>
             <option value="00">00</option>
             <option value="01">01</option>
             <option value="02">02</option>
             <option value="03">03</option>
             <option value="04">04</option>
             <option value="05">05</option>
             <option value="06">06</option>
             <option value="07">07</option>
             <option value="08">08</option>
         </select><br/>

         <label>Days Away</label><br/>
         <select name="daysoff" autocomplete="off">
             <option value="00">00</option><option value="01">01</option>
             <option value="02">02</option><option value="03">03</option>
             <option value="04">04</option><option value="05">05</option>
             <option value="06">06</option><option value="07">07</option>
             <option value="08">08</option><option value="09">09</option>
             <option value="10">10</option><option value="11">11</option>
             <option value="12">12</option><option value="13">13</option>
             <option value="14">14</option><option value="15">15</option>
             <option value="16">16</option><option value="17">17</option>
             <option value="18">18</option><option value="19">19</option>
             <option value="20">20</option><option value="21">21</option>
             <option value="22">22</option><option value="23">23</option>
             <option value="24">24</option><option value="25">25</option>
             <option value="26">26</option><option value="27">27</option>
             <option value="28">28</option><option value="29">29</option>
             <option value="30">30</option><option value="31">31</option>
         </select><br/>

         <label>Reason</label><br>
         <textarea name="reason" rows="3" cols="50" autocomplete="off"> </textarea>

         <br/><br/>
         <input type="submit" name="set" value="Set"/>
     </form>



 </div>
        </div>
               <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
</body>


</html>