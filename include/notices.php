<?php

class Notices extends DB_con{

    public function __construct()
    {

    }

    public function UnavailableCounsellors(){

        $sql="SELECT * FROM appointments.schedule where approval='Yes' DESC LIMIT (0,5)";

        $results = $this->dbConnection()->prepare($sql);
        $results->execute();
        if($results->rowCount()<1){

            echo "As For Now All Counsellors are Available. Students Can Book Appointment";
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
                    <td><?php echo $from." ".$timefrm;?></td>
                    <td><?php echo $to." ".$timeto;?></td>
                </tr>

                <?php
            }
        }
    }
}