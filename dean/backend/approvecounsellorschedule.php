<?php
include_once "../../include/dbconn.php";
class Approve extends DB_con{

    private $counsellor;
    private $from;

    public function __construct($couns,$frm)
    {
        $this->counsellor=$couns;
        $this->from= $frm;


    }

    public function approveSchedule(){

        $status = "Yes";

        $change = "UPDATE appointments.schedule SET approval=? WHERE  counsNo=? AND awayDate=?";
        $update =$this->dbConnection()->prepare($change);
        if($update->execute([$status,$this->counsellor,$this->from])){

            header('Location:../approveschedulePage.php?msg=Schedule of '.$this->counsellor.' Successfully Approved');
        }else{

            echo "<script> alert('Passowrd  not changed. Error in Code)</script>";
            echo "<script> window_open('approveschedulePage.php','_self')</script>";
        }

    }
}

if(isset($_POST['approve'])){

    $counsellor = $_POST['counsellor'];
    $from = $_POST['from'];


    $approval = new Approve($counsellor,$from);

    $approval->approveSchedule();
}