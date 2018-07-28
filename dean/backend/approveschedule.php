<?php
include_once "../../include/dbconn.php";

class ApproveSchedule extends DB_con {

    private $away_from;
   // private $counsellor;
    private $away_to;

    public function __construct($from,/*cons*/$to)
    {
        $this->away_from=$from;
        $this->away_to=$to;
       // $this->counsellor=$cons;
    }

    public function getSchedules(){

        $search = "select * from appointments.schedule where awayDate  BETWEEN ? and ?";
        $results= $this->dbConnection()->prepare($search);
        $results->execute([$this->away_from,$this->away_to]);

        ?>
        <table class="table table-striped table-bordered table-condensed table-sm table-hover"
               style="margin-left: 60px; margin-top: 35px; width: 90%">
        <tr class="thead-dark">
                <th>Counsellor Name</th>
                <th>Counsellor No</th>
                <th>From</th>
                <th>Period Hours</th>
                <th>Available Day</th>
                <th>Available Time</th>
                <th>Reason</th>
                <th>Aproval Status</th>
                <th>Approve</th>
            </tr>

<?php
        if($results->rowCount()<1){

            echo "No schedules Found for the selected Period";
        }else{

            while($row=$results->fetch()){


                $from =$row['awayDate'];
                $period_hrs=($row['awayPeriod'])-1;
                $available_time=$row['nextTimeAvailable'];
                $availabe_date=$row['nextAvailableDate'];
                $reason=$row['reason'];
                $approval=$row['approval'];
                $counsellor_no=$row['counsNo'];
                $counsl= $row['counsName'];


            ?>

            <tr>
                <td><?php echo $counsl;?></td>
                <td><?php echo $counsellor_no;?></td>
                <td><?php echo $from;?></td>
                <td><?php echo $period_hrs." HRS";?></td>
                <td><?php echo $availabe_date;?></td>
                <td><?php echo $available_time;?></td>
                <td><?php echo $reason;?></td>
                <td><?php echo $approval;?></td>
                <td>
                    <form action="#" method="get">

                        <label for="approve">Yes </label>  <input type="radio" name="allow" value="Yes">
                    </form>
                </td>
            </tr>

<?php
            if(isset($_GET['approve'])){
                $yes = $_GET['allow'];

                $update = "UPDATE appointments.schedule SET approval= ? WHERE awayDate=? AND awayPeriod= ? AND  nextTimeAvailable = ?
                            AND nextAvailableDate=? AND reason=? AND approval=? AND counsNo=? AND counsName=?";

                try{
                $run= $this->dbConnection()->prepare($update);
                $run->execute([$yes,$from,$period_hrs,$available_time,$availabe_date,$reason,$approval,$counsellor_no,$counsl]);


                }catch(ErrorException $e){

                    $e->getMessage();
                }
            }

            } ?>
            </table>

<?php

        }

    }

}