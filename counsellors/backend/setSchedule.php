<?php
require_once "../../include/dbconn.php";
require_once "counsellorlogin.php";
class SetSchedule extends DB_con {

    private $date;
    private $time;
    private $days_away;
    private $hours_away;
    private $rsn;


    public function __construct($dt,$tm,$d_awy,$h_away,$reason)
    {
        $this->date=$dt;
        $this->time=$tm;
        $this->days_away=$d_awy;
        $this->hours_away=$h_away;
        $this->rsn=$reason;

    }

    private function disablePreviousDate($dt){

        $today = new DateTime();

        if (new DateTime($dt) < $today) {

            return true;
        }else {
            return false;
        }

    }

        private function searchIfAppointmentOn($dt,$couns){

                $searchSessions ="select * from appointments.sessions where date = ? and counsName=?";
                $results = $this->dbConnection()->prepare($searchSessions);
                $results->execute([$dt,$couns]);

                if($results->rowCount()>0){

                   return  true;
                }else{

                    return false;
                }

        }
    public function set($counsl,$counslNo){

            $verifyDate = new SetSchedule($this->date,$this->time,$this->days_away,$this->hours_away,$this->rsn);

            if($verifyDate->searchIfAppointmentOn($this->date,$counslNo)== true){

                echo "<script>alert('You have an appointment on the selected date. Choose a different date')</script>";
                echo "<script>window.open('../setschedulePage.php','_self')</script>";
            }
            else
                if($verifyDate->disablePreviousDate($this->date)==true){

                    echo "<script>alert('The Selected Date has already passed. Pick another Date')</script>";
                    echo "<script>window.open('../setschedulePage.php','_self')</script>";
                }
            else {

                //get next available time
                $available_time = date('H:i:s', (strtotime($this->time) + 60 * ((60 * $this->hours_away))));//+$duration_min)))

                //get next availbale date
                $available_date = date('Y-m-d', (strtotime('+' . $this->days_away . 'days', strtotime($this->date))));

                $approval ='No';
                $counsellor =$_SESSION['counsellorName'];
                $counsellor_no=$_SESSION['counsellorNumber'];

                $period = ($this->days_away*24)+$this->hours_away;

                    $insertValues = "insert into appointments.schedule (awayDate,awayTime,awayPeriod,nextTimeAvailable,nextAvailableDate,reason,approval,counsNo,counsName)
                  
                                  VALUE ('$this->date','$this->time','$period','$available_time','$available_date','$this->rsn','$approval','$counslNo','$counsl')";

                            $this->dbConnection()->exec($insertValues);

                header("Location: ../index.php?msg=Schedule Set await approval");


            }

    }
}

if(isset($_POST['set'])){

    $dt= $_POST['date_away'];
    $tm= $_POST['time_away'];
    $dys= $_POST['daysoff'];
    $hrs= $_POST['hduration'];
    $rsn= $_POST['reason'];

    $counsellor =$_SESSION['counsellorName'];
    $counsellor_no=$_SESSION['counsellorNumber'];

    $mySchedule = new SetSchedule($dt,$tm,$dys,$hrs,$rsn);

    $mySchedule->set($counsellor,$counsellor_no);


}