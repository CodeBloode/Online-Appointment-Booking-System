<?php

include ("../include/dbconn.php");

class ChangePwd extends DB_con{

    private $pwd;
    private $confirmPwd;
    private $currentpwd;

    public function __construct($pwd,$c_pwd,$current_pwd)
    {
        $this->pwd=$pwd;
        $this->confirmPwd=$c_pwd;
        $this->currentpwd=$current_pwd;
    }

    private function verifyLength($pass){

        if(strlen($pass)<0){

            return true;
        }else{

            return false;
        }
    }

    private function emptyfield($pass,$c_pass){

        if(empty($pass) || empty($c_pass)){

            return true;
        }else{

            return false;
        }
    }

    private function doNotMatch($pass,$c_pass){

        if($pass != $c_pass){

            return true;

        }else{

            return false;
        }

    }

    public function changePassword($counsellor,$counsnumber){

        $errors = new ChangePwd($this->pwd,$this->confirmPwd,$this->currentpwd);

        if($errors->emptyfield($this->pwd,$this->confirmPwd) == true){

            echo "<script> alert('All Fields are Imported')</script>";
            echo "<script> window_open('changepasspage.php','_self')</script>";

        }
        else
            if($errors->verifyLength($this->pwd)==true){
                echo "<script> alert('Minimum password length is 8')</script>";
                echo "<script> window_open('changepasspage.php','_self')</script>";
            }

            else
                if($errors->doNotMatch($this->pwd,$this->confirmPwd)==true){

                    echo "<script> alert('Password Do not Match')</script>";
                    echo "<script> window_open('changepasspage.php','_self')</script>";

                }
                else{

                    //such for the counsellor in the database
                    $query= "SELECT * FROM appointments.counsellor WHERE counsNo= ? AND counsName = ?";
                    $run = $this->dbConnection()->prepare($query);
                    $run->execute([$counsnumber,$counsellor]);

                    if($run->rowCount()>0){

                        if($row=$run->fetch(PDO::FETCH_ASSOC)){


                            if(!password_verify($this->currentpwd,$row['password'])){

                               echo "<script> alert('Your Current Password is Wrong')</script>";

                                echo "<script> window_open('changepasspage.php','_self')</script>";
                            }
                            else

                                {


                                    $hash_pwd = password_hash($this->pwd,PASSWORD_DEFAULT);


                                    $change = "UPDATE appointments.counsellor SET password=? WHERE counsName=? AND counsNo=?";
                                    $run = $this->dbConnection()->prepare($change);


                                    if($run->execute([$hash_pwd,$counsellor,$counsnumber])){

                                        header('location:counsellor.php?msg=password changed successuflly');

                                    }else{

                                        echo "<script> alert('Passowrd  not changing)</script>";
                                        echo "<script> window_open('changepasspage.php','_self')</script>";
                                    }



                            }
                        }
                        else{


                           echo "<script> alert('Unknow Error 1')</script>";
                            echo "<script> window_open('changepasspage.php','_self')</script>";

                            exit();
                        }

                    }else{
                        echo "<script> alert('Unknow Error 2')</script>";
                        echo "<script> window_open('changepasspage.php','_self')</script>";
                        exit();
                    }



                }//else
    }
}