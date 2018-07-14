<?php

include_once "../include/dbconn.php";

class ViewSessions extends DB_con{

    private $from;
    private $to;

    public function __construct($frm,$to)
    {
        $this->from=$frm;
        $this->to=$to;
    }

    public function getSessions(){

        $search = "select * from appointments.sessions where date BETWEEN ? AND ?";

        $results= $this->dbConnection()->prepare($search);
        $results->execute([$this->from,$this->to]);


        if($results->rowCount()<1){

            echo "No Sessios Availabe for the Selected Periods";

        }else {

            ?>

            <table class="table table-striped table-bordered table-condensed table-sm table-hover"
                   style="margin-left: 60px; margin-top: 35px; width: 90%">
                <tr class="thead-dark">
                    <th>No.</th>
                    <th>Registration Number</th>
                    <th>Student Name</th>
                    <th>Counsellor</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>

                <?php

                $i = 1;
                while ($rows = $results->fetch(PDO::FETCH_ASSOC)) {

                    $regno=$rows['regNo'];
                    $stdnt = $rows['studentNm'];
                    $cnsl = $rows['counsName'];
                    $dt = $rows['date'];
                    $s_tm = $rows['startTime'];
                    $e_tm = $rows['endTime'];


                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $regno; ?></td>
                        <td><?php echo $stdnt; ?></td>
                        <td><?php echo $cnsl; ?></td>
                        <td><?php echo $dt; ?></td>
                        <td><?php echo $s_tm; ?></td>
                        <td><?php echo $e_tm; ?></td>
                    </tr>
                    <?php

                }

        }
    }
}
