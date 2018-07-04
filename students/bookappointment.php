<?php
    include_once "../include/dbconn.php";
    include_once "studentlogin.php";

    class NewAppointment extends DB_con
    {

        public function __construct()
        {
        }

        private function clashingAppointments($tm, $dt, $cnl)
        {


            //time to end appointment
            $endappointment = date('H:i:s', (strtotime($tm) + 60 * 45));

            $search_if_exist = "select * from all_project_tests.sessions where  date= ? AND 
						(counsellor = ? AND ((st_time BETWEEN ? AND ?) OR (en_time BETWEEN ? AND ? )))";

            $pre = $this->dbConnection()->prepare($search_if_exist);
            $pre->execute([$dt, $cnl, $tm, $endappointment, $tm, $endappointment]);
            $rows = $pre->rowCount();

            if ($rows > 0) {

                return true;
            } else {

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

        public function bookAppointment($regno, $names, $couns, $dt, $st_tm, $en_time)
        {

            $errorinBooking = new NewAppointment();


            if ($errorinBooking->clashingAppointments($st_tm, $dt, $couns) == true) {

                echo "<script>alert('Time selected for the counsellor is already taken')</script>";
                //header("Location: ../studentbookappPage.php");
                echo "<script>window.open('../studentbookappPage.php','_self')</script>";
                //I will add PHP code to get the dates and display the appointments that are booked
            } else

                if ($errorinBooking->validateTime($st_tm) == true) {

                    echo "<script>alert('select time between 08:30:00 and 16:45:00 and get attended to. Try again')</script>";
                   echo "<script>window.open('../studentbookappPage.php','_self')</script>";

                } else {


                    //create an appointment session
                    $create_Appointment_session = "insert into all_project_tests.sessions(studentReg, names ,counsellor, date, st_time, en_time) values
					('$regno','$names','$couns','$dt','$st_tm','$en_time')";

                    try {

                        $new_appointemnt = $this->dbConnection()->exec($create_Appointment_session);

                        header("Location: ../index.php?msg=Appointment Booked Successfully");

                    } catch (ErrorException $e) {

                        echo "Error " . $e->getMessage();
                    }

                }

        }
        public function __debugInfo()
        {
            // TODO: Implement __debugInfo() method.
        }
    }

    if (isset($_POST['book'])) {

        $counsellor_picked = $_POST['counsellor'];
        $the_date = $_POST['date'];
        $the_time = $_POST['settime'];

        $student_regno = $_SESSION['regNo'];
        $student_name = $_SESSION['StudentName'];

        //$_SESSION['email'];

        $end_appointment = date('H:i:s', (strtotime($the_time) + 60 * 45));

        $bookAppointment = new NewAppointment();

        $bookAppointment->bookAppointment($student_regno, $student_name, $counsellor_picked, $the_date, $the_time, $end_appointment);

    }
