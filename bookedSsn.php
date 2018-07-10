<?php
session_start();

if (!isset($_SESSION['StudentName'])){

    header('location:../studentloginPage.php');

}else{

    ?>
    <!DOCTYPE HTML>
    <!-- remember to add footer for the one who is doing front-end -->


    <HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
        <title>Sessions</title>


    </head>
    <body>

    <div id="header">
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/datepicker.css">
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    </div>

     <div class="topnav">
            <a href="students/logout.php"> Logout</a>
            <a href="studentbookappPage.php">Book Appointemnt</a>
             <a class="active" href ="index.php">Home</a>
            
            
    </div> 
    <h4 style="float: left;">
        Booked sessions are:
    </h4>
    <br><br>
    <div>
    <form action="#" method="get">
        <input type="text" id= "datepicker" name="date" placeholder="Date">
        <?php include('include/datepicker.php');?>
        <button type="submit" name="getrecs"><span>Search <img src="images/search.png" title="" alt="" height="28" width="28" /></span>
		

    </form>


    <?php

    include_once 'include/dbconn.php';
        class Sessions extends DB_con{

            private $date;

            public function __construct($date)
            {
                $this->date=$date;
            }
            public function getAvailableSessions()
            {
                $get_session = "select * from all_project_tests.sessions where  date= ?";

                $pre = $this->dbConnection()->prepare($get_session);
                $pre->execute([$this->date]);

                ?>

        <table class="table table-striped table-bordered table-condensed table-sm table-hover" style="margin-left: 60px; margin-top: 35px; width: 90%">
            <tr class="thead-dark">
				<th>No.</th>
                <th>Date</th>
                <th>Counsellor</th>
                <th>Start Time</th>
                <th>End Time</th>
				<th>Status</th>
            </tr>

        <?php
					$i=0;
                while($rows=$pre->fetch()){

                    $dt= $rows['date'];
                    $cnsl=$rows['counsellor'];
                    $s_tm =$rows['st_time'];
                    $e_tm=$rows['en_time'];
					//The status added here will enable the student know if the appointments made have been approved
					//NOTE that the status will be changed  to approved upon the counsellor approving the schedule.
					//since i have made another table that will fetch the status as required an use an insert and set status where ssid=?
					$stat=$rows['status'];
					$i++;

    ?>


            <tr>
				<td><?php echo $i;?></td>
                <td><?php echo $dt;?></td>
                <td><?php echo $cnsl; ?></td>
                <td><?php echo $s_tm;?></td>
                <td><?php echo $e_tm;?></td>
				<td><?php echo $stat;?></td>

            </tr>
        <?php
                }
            }

        }

    ?>
    </table>
    </div>

      <div class="footer"> <p>Egerton University is ISO 9001:2008 Certified</p></div>
    </body>

    </HTML>

<?php   }


if(isset($_GET['getrecs'])){
    $date= $_GET['date'];

    $sessions= new Sessions($date);
    $sessions->getAvailableSessions();
  
}?>

