<?php
    include_once "../include/dbconn.php";
    require_once '../include/studb.php';
    include_once "studentlogin.php";

    class NewAppointment extends DB_con
    {

        public function __construct()
        {

        }

        private function unavailableCouncellor($tm, $dt, $cnl){

            //time to end appointment
           // $endappointment = date('H:i:s', (strtotime($tm) + 60 * 45));

            $approval = 'Yes';
            //alter your code on the line below according to your databasename.sessions
            $search_if_exist = "SELECT  * FROM appointments.schedule WHERE counsNo= ?  AND approval=? AND  ((nextAvailableDate >= ? AND awayDate <= ?) AND (nextTimeAvailable >= ?))";


                    $getrecords = $this->dbConnection()->prepare($search_if_exist);
                    $getrecords->execute([$cnl,$approval,$dt,$dt,$tm]);

            $rows=$getrecords->rowCount();
            if($rows>0){

                return true;
            }else{
                return false;
            }

        }
        private function unAssignedCounsellor($counsellor){

            $getCounsellor= "SELECT * FROM appointments.counsellor where counsNo= ?";
            $get=$this->dbConnection()->prepare($getCounsellor);
            $get->execute([$counsellor]);

            if($get->rowCount()<1){

                return true;
            }else{

                return false;
            }
    }


        private function clashingAppointments($tm, $dt, $cnl)
        {


            //time to end appointment
            $endappointment = date('H:i:s', (strtotime($tm) + 60 * 45));

			//alter your code on the line below according to your databasename.sessions

            $search_if_exist = "select * from appointments.sessions where  date= ? AND 
						(counsNo = ? AND ((startTime BETWEEN ? AND ?) OR (endTime BETWEEN ? AND ? )))";


            $pre = $this->dbConnection()->prepare($search_if_exist);
            $pre->execute([$dt, $cnl, $tm, $endappointment, $tm, $endappointment]);
            $rows = $pre->rowCount();

            if ($rows > 0) { ?>
                <!doctype html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapcss/bootstrap.min.css">
                <script type="text/javascript" src="../jquery/jquery-3.3.1.js"></script>
                <!-- Bootstrap Core CSS -->
                <link href="../PHPMAILER/css/bootstrap.min.css" rel="stylesheet">
                <link href="../PHPMAILER/css/bootstrap.css" rel="stylesheet">

                <!-- Custom CSS -->
                <link href="../PHPMAILER/css/styles.css" rel="stylesheet">

                <!--[if lt IE 9]>
                <script src="../PHPMAILER/js/html5shiv.js"></script>
                <script src="../PHPMAILER/js/respond.min.js"></script>
                <![endif]-->
                <!--        This is the one responsible for this page load if eliminated the animation only will be just displayin on the screen-->
                <script src="../jquery/jquery.min.js"></script>
                <title>Booked Sessions</title>
            </head>
            <body>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-sm table-hover">
                    <br/>

                    <h4 style="margin-right: 30px;margin-top: 8px" >Booked Sessions On the Selected Date</h4>

                    <tr class="thead-dark">
                        <th >Date</th>
                        <th>Counsellor</th>
                        <th>Start Time</th>
                        <th>Endtime</th>
                    </tr>
                            <?php

                                while($data = $pre->fetch(PDO::FETCH_ASSOC)){

                                        $counsellor=$data['counsNo'];
                                        $date= $data['date'];
                                        $start_time =$data['startTime'];
                                        $end_time=$data['endTime'];

                                        ?>

                                    <tr>
                                        <td><?php echo $date;?></td>
                                        <td><?php echo $counsellor; ?></td>
                                        <td><?php echo $start_time;?></td>
                                        <td><?php echo $end_time;?></td>

                                    </tr>
                              <?php  }

                            ?>

                        </table>
                        </div>
                        <form action="bookappointment.php" method="post">

                            <button type="submit" name ="newbook">Book Appointment</button>
                        </form>

                        </body>
                        </html>

                    <?php  return true;}

             else {

                return false;
            }

        }

        private function validateTime($tm)
        {

            //end of working hours in a day
            $passed_working_time = ($tm = date('H:i:s', (strtotime($tm) + 60 * 45)));

            //time to end appointments
            $stop_time = date('17:30:00');

            //time to start booking appointments;
            $start_booking = date('08:30:00');

            if (($passed_working_time > $stop_time) or ($tm < $start_booking)) {


                return true;

            } else {

                return false;
            }


        }

        private function getWeekends($date){
            $day= (date('N', strtotime($date)) >= 6);
            return $day;
        }
        private function getPreviousDates($date)
        {

            $today = new DateTime();

           // $currentDate = new DateTime();

            if (new DateTime($date) < $today) {

                return true;
            }else
                return false;
        }

        public function bookAppointment($regno, $names, $couns, $dt, $st_tm, $en_time)
        {

            $errorinBooking = new NewAppointment();


            if ($errorinBooking->clashingAppointments($st_tm, $dt, $couns) == true) {

                echo "<script>alert('Time selected for the counsellor is already taken')</script>";
            } else

                if ($errorinBooking->validateTime($st_tm) == true) {

                    echo "<script>alert('select time between 08:30:00 and 16:45:00 and get attended to. Try again')</script>";
                   echo "<script>window.open('../studentbookappPage.php','_self')</script>";

                }elseif($errorinBooking->getPreviousDates($dt)==true){

                    echo "<script>alert('Your booking is late. Make sure you book a day before!!')</script>";
                    echo "<script>window.open('../studentbookappPage.php','_self')</script>";

                } elseif($errorinBooking->getWeekends($dt)== true) {

                    echo "<script>alert('The day you have selected is a Weekend.Please select a Weekday')</script>";
                    echo "<script>window.open('../studentbookappPage.php','_self')</script>";

                }else
                    if($errorinBooking->unAssignedCounsellor($couns)==true){

                        echo "<script>alert('Counsellor Not Yet Assigned, pick Another Counsellor')</script>";
                        echo "<script>window.open('../studentbookappPage.php','_self')</script>";
                    }

                else
                    if($errorinBooking->unavailableCouncellor($st_tm, $dt, $couns)== true ){

                        echo "<script>alert('The Counsellor You have Selected Will not be Available')</script>";
                        echo "<script>window.open('../studentbookappPage.php','_self')</script>";
                    }

                else {

                            $counsellor = strtolower($couns);
                    //create an appointment session
					//alter your code on the line below according to your databasename.sessions
                    $create_Appointment_session = "insert into appointments.sessions(regNo,studentNm,counsNo,date,startTime,endTime) values

					('$regno','$names','$counsellor','$dt','$st_tm','$en_time')";

                    try {

                        $this->dbConnection()->exec($create_Appointment_session);

                        require_once 'stude.php';
                        $User = new Reset();


                        $message= "
													   Hello  $counsellor,
													   <br /><br />
													   This is to notify you that the student by registration number: <b> $regno</b>, name: <b> $names </b> booked an appointment to see you on <b> $dt </b> to see you at <b> $st_tm </b>.Kindly assist.
													   <br /><br />
													   Kind Regards, <br>
													   Counselling Department.
													   ";
                        $subject = "New Appointment Booked";

                        $email = "SELECT email FROM appointments.counsellor WHERE counsNo= ?";
                        $getmail = $this->dbConnection()->prepare($email);
                        $getmail->execute([$counsellor]);

                        while ( $rows=$getmail->fetch()) {

                            $mail = $rows['email'];


                            $User->send_mail($mail, $message, $subject);
                        }

                        header("Location: ../student.php?msg=Appointment Booked Successfully");

                    } catch (ErrorException $e) {

                        echo "Error " . $e->getMessage();
                    }

                }

        }
        public function __destruct()
        {

        }
    }

    if (isset($_POST['book'])) {


        $counsellor_picked =strtolower($_POST['counsellor']);
        $the_date = date($_POST['date']);
        $the_time = $_POST['settime'];

        $student_regno = $_SESSION['regNo'];
        $student_name = $_SESSION['StudentName'];

        $end_appointment = date('H:i:s', (strtotime($the_time) + 60 * 45));

        $days=21;

        $now = date('Y-m-d');

        $limit= date('Y-m-d', (strtotime('+'.$days.'days', strtotime($now))));



        if(($the_date>=$now)&&($the_date>$limit)){

           echo "<script>alert('Book date out of limit. Book appointments Within 3 Weeks')</script>";
           echo "<script>window.open('../studentbookappPage.php','_self')</script>";


        }else{

            $bookAppointment = new NewAppointment();

            $bookAppointment->bookAppointment($student_regno, $student_name, $counsellor_picked, $the_date, $the_time, $end_appointment);


        }


    }

    if(isset($_POST['newbook'])){

        header('location: ../studentbookappPage.php?msg=book appointment at another time');
    }
