<?php
include_once "../../include/dbconn.php";

class ApproveSchedule extends DB_con {

    private $away_from;
    private $counsellor;
    private $away_to;

    public function __construct($from,$cons,$to)
    {
        $this->away_from=$from;
        $this->away_to=$to;
        $this->counsellor=$cons;
    }

    public function getSchedules(){

        $search = "select * from all_project_tests.schedules where from  BETWEEN ? and ?";
        $results= $this->dbConnection()->prepare($search);
        $results->execute([$this->away_from,$this->away_to]);

        ?>

        <table>
            <tr>
                <th>Counsellor</th>
                <th> From</th>
                <th> Period Min</th>
                <th> Period Hours</th>
                <th> Period Days</th>
                <th> Availbele Day</th>
                <th> Reason</th>
            </tr>

<?php
        if($results->rowCount()<1){

            echo "No schedules Found for the selected Period";
        }else{

            while($row=$results->fetch()){

                $counsl= $row['counsellor'];
                $from =$row['from'];
                $period_hrs=$row['period_hrs'];
                $period_min=$row['$period_min'];
                $period_days=$row['period_days'];
                $availabe_date=$row['avalbe_day'];
                $reason=$row['reason'];


            ?>

            <tr>
                <td><?php echo $counsl;?></td>
                <td><?php echo $from;?></td>
                <td><?php echo $period_min;?></td>
                <td><?php echo $period_hrs;?></td>
                <td><?php echo $period_days;?></td>
                <td><?php echo $availabe_date;?></td>
                <td><?php echo $reason;?></td>

            </tr>

<?php       } ?>
            </table>

<?php

        }

    }

}