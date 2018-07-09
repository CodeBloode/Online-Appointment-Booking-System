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
        <a style="float: right;margin-right: 30px;" href="students/logout.php"><strong><i>Logout</i></strong></a>
        <script type="text/javascript" src="jquery/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/datepicker.css">
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    </div>
    <a href="studentbookappPage.php">Book Appointemnt</a>
    <a href="index.php">Home</a>
    <br>
    <h4 style="float: left;">
<<<<<<< HEAD
        The Booked sessions are:
=======
        Booked sessions are:
>>>>>>> cf02193775b87b441b3d71a383111579383954d5
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
                $get_session = "select * from appointmentsystem.sessions where  date= ?";

                $pre = $this->dbConnection()->prepare($get_session);
                $pre->execute([$this->date]);

                ?>

        <table class="table table-striped table-bordered table-condensed table-sm table-hover">
            <tr class="thead-dark">
                <th>Date</th>
                <th>Counsellor</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>

        <?php

                while($rows=$pre->fetch()){

                    $dt= $rows['date'];
                    $cnsl=$rows['counsellor'];
                    $s_tm =$rows['st_time'];
                    $e_tm=$rows['en_time'];

    ?>


            <tr>
                <td><?php echo $dt;?></td>
                <td><?php echo $cnsl; ?></td>
                <td><?php echo $s_tm;?></td>
                <td><?php echo $e_tm;?></td>

            </tr>
        <?php
                }
            }

        }

    ?>
    </table>
    </div>
    </body>

    </HTML>

<?php   }


if(isset($_GET['getrecs'])){
    $date= $_GET['date'];

    $sessions= new Sessions($date);
    $sessions->getAvailableSessions();
}?>

