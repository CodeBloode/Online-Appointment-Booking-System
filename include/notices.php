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

            <?php

            $count=1;
            while($record = $results->fetch(PDO::FETCH_ASSOC)){

                $from=$record['awayDate'];
                $timefrm=$record['awayTime'];
                $timeto=$record['nextTimeAvailable'];
                $to=$record['nextAvailableDate'];
                $counsellor=$record['counsNo'];

                $now= date('Y-m-d');
                ?>
                <div style="margin-right: 0px; font-size: 15px; font-family: SansSerif">
                    <p>
                        <?php

                        if($from>$now){

                            echo "<b>".$count.".</b> ".$counsellor." Will Be Away From ".$from." at ".$timefrm." to ".$to." at ".$timeto;
                        }else{

                            echo '<center>'.'<i>'.'We are happy you are with us.'.'</i>'.'<center>';
                        }

                        $count ++;?>
                    </p>
                </div>

                <?php
            }
        }
    }
}