<?php

include_once "dbconn.php";
class Notices extends DB_con{

    public function __construct()
    {

    }

    public function UnavailableCounsellors(){
        $now= date('Y-m-d');

        $sql="SELECT * FROM appointments.schedule where approval='Yes'AND nextAvailableDate>= NOW() order by 1 DESC LIMIT 0,5";

        $results = $this->dbConnection()->prepare($sql);
        $results->execute([]);
        if($results->rowCount()<1){

            echo "<ul style='color: cornflowerblue; font-size: medium;'><li>"."All Counsellors Available. Appointments Can be Made."."</li></ul>";
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


                ?>
                <div style="margin-right: 0px; font-size: 15px; font-family: SansSerif; color: cornflowerblue">

                        <?php


                            echo '<b>'.$count.".</b><img alt=\"\" height=\"25\" src=\"../images/icon-new.gif\" width=\"50\" /> <b>".$counsellor."</b>, will be away from <b>".$from."</b> at <b>".$timefrm."</b> to <b>".$to."</b> at <b><i>".$timeto."</b>";
                        //echo "<center><i>"."We are happy you are with us."."</i><center>.";
//						}else{
//
//                                  echo "<center><i>"."All Counsellors Available."."</i><center>.";
//                        }


                        $count ++;?>
                    </p>
                    
                </div>

                <?php
            }
        }
    }
}