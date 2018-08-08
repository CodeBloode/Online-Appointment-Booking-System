<!DOCTYPE html>
<html>
<head>
	<title> Set Schedule </title>

	<link rel="stylesheet" href="../css/setschedule.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <link rel="stylesheet" href="../css/timepicker.css">


   <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">

        <script src="../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
      <script type="text/javascript" src="../js/timepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/font-awesome.min.css">
       <!-- Material Design Bootstrap -->
    <link href="../bootstrap/bootstrapcss/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap-grid.min.css">



</head>

<body>
    <div class="topnav">

         
          <div class="topnav fixed-top" style="background-color: forestgreen">
    <nav class="navbar navbar-expand-md navbar-dark p-0">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="counsellor.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewappointmentsPage.php">View Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="setschedulePage.php">Set Shedule</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="../index.php">Logout</a>
            </li>
        </ul>
    </nav>
    </div>


            <a href="backend/logout.php"> Logout </a>
             <a href=>Home</a>
    </div> 
    <!--<div id="maindiv"> -->
<div class="book-appointment">
 <h2 style=" margin-top: 48px; text-align: center;"> <i>Please set your Schedule</i></h2>
 <br/>
 <div id="setschedule">

     <form action="backend/setSchedule.php" method="post">
     <div class="left-agileits same">
     <div class="gaps">
         <label>Date Away</label><br/>
         <input type="date" name="date_away" id= "datepicker" required autocomplete="off">
         <?php include('../include/datepicker.php');?>
        </div>
        <div class="gaps">
         <label>Time Away</label><br/>
         <input type="time" name="time_away" id= "timepicker" required autocomplete="off">
                  <?php include("../include/timepicker.php");?>
                  </div>
    </div>
    <div class="right-agileinfo same">
            <div class="gaps">
         <label>Hours Away</label><br/>
         <select class="form-control" name="hduration" autocomplete="off" required>
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
         </select>
         </div>
         <div class="gaps">
         <label>Days Away</label>
         <select class="form-control" name="daysoff" autocomplete="off" required>
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
         </select>
         </div>
         <div class="gaps">
         </div>
         

         </div>
         <br/><br/> <br/>
         <div class="textalign">
         <label>Reason</label><br>
         <textarea name="reason" rows="3" cols="50" autocomplete="off" required> 

         </textarea> 
         </div>
         <input type="submit" name="set " value="Set Schedule"/>
         
     </form>



 </div>
        </div>
               <div>
                   <?php include "../include/footer.html";?>
               </div>
</body>


</html>