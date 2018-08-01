<?php

include_once "dbconn.php";
class Notices extends DB_con{

    public function __construct()
    {

    }

    public function UnavailableCounsellors(){

        $sql="SELECT * FROM appointments.schedule where approval='Yes' order by 1 DESC LIMIT 0,5";

        $results = $this->dbConnection()->prepare($sql);
        $results->execute();
        if($results->rowCount()<1){

            echo "<ul style='color: #0000CC'>"."<li>"."All Counsellors Available. Students can book Appointments."."</li>"."</ul>";
        }else{
            ?>
            <table class="table table-striped table-bordered table-condensed table-sm table-hover"
                   style="margin-left: 60px; margin-top: 35px; width: 90%">
                <tr class="thead-dark">
                    <th>Counsellor</th>
                    <th>From</th>
                    <th>To</th>
                </tr>

            <?php

            while($record = $results->fetch(PDO::FETCH_ASSOC)){

                $from=$record['awayDate'];
                $timefrm=$record['awayTime'];
                $timeto=$record['nextTimeAvailable'];
                $to=$record['nextAvailableDate'];
                $counsellor=$record['counsNo'];

                ?>
                <tr>
                    <td><?php echo $counsellor;?></td>
                    <td><?php echo $from."  ".$timefrm;?></td>
                    <td><?php echo $to."  ".$timeto;?></td>
                </tr>

                <?php
            }
        }
    }
}