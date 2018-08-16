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

                $now= date('Y-m-d');
                ?>
                <div style="margin-right: 0px; font-size: 20px; font-family: SansSerif; color: cornflowerblue">
                    <p> <img alt=" " height="25" src="images/icon-new.gif" width="50" />
                        <?php

                        if($from>$now){
                            echo "<img alt=\"\" height=\"25\" src=\"../images/icon-new.gif\" width=\"50\" />"."The counsellor by No: <b><i>".$counsellor."</i></b>, will be away from <b><i>".$from."</i></b> at <b><i>".$timefrm."</i></b> to <b><i>".$to."</i></b> at <b><i>".$timeto."</i></b>";
                        //echo "<center><i>"."We are happy you are with us."."</i><center>.";
						}else{

                                  echo "<center><i>"."All Counsellors Available."."</i><center>.";
                        }


                        $count ++;?>
                    </p>
                    
                </div>

                <?php
            }
        }
    }
}