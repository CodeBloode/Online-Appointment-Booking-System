<?php

    include_once '../include/dbconn.php';
        class Sessions extends DB_con{

    private $date;

    public function __construct($date)
    {
        $this->date = $date;
    }
    public function getAvailableSessions()
    {
        $get_session = "select * from appointments.sessions where  date= ?";

        $pre = $this->dbConnection()->prepare($get_session);
        $pre->execute([$this->date]);


        if ($pre->rowCount() < 1) {
            echo "<br>";
            echo "<div style='float:center; background-color: lightcoral; width: ; height: 35px;margin-left: 100px; margin-right: 100px; text-align: center '>"."No sessions available booked on the selected date"."</div>";
        } else {
            ?>
            <table class="table table-striped table-bordered table-condensed table-sm table-hover"
                   style="margin-left: 60px; margin-top: 35px; width: 90%">
                <tr class="thead-dark">
                    <th>No.</th>
                    <th>Date</th>
                    <th>Counsellor</th>
                    <th>Start Time</th>
                    <th>End Time</th>
<!--                    <th>Status</th>-->
                </tr>

            <?php
            $i = 0;
            while ($rows = $pre->fetch()) {

                $dt = $rows['date'];
                $cnsl = $rows['counsNo'];
                $s_tm = $rows['startTime'];
                $e_tm = $rows['endTime'];
                //The status added here will enable the student know if the appointments made have been approved
                //NOTE that the status will be changed  to approved upon the counsellor approving the schedule.
                //since i have made another table that will fetch the status as required an use an insert and set status where ssid=?
                //$stat=$rows['status'];
                $i++;

                ?>


                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $dt; ?></td>
                    <td><?php echo $cnsl; ?></td>
                    <td><?php echo $s_tm; ?></td>
                    <td><?php echo $e_tm; ?></td>

                </tr>
                <?php
            }
        }
    }
    }


