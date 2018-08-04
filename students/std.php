<?php
include_once "../../include/dbconn.php";
class Pass extends DB_con{
    private $email;//Input the email
    private $pass; //Input the  new password
    private $conpass; //confirmation of the new password

    /**
     * Pass constructor.
     * @param $email
     * @param $pass
     * @param $conpass
     */
    public function __construct($email, $pass, $conpass)
    {
        $this->email = $email;
        $this->pass = $pass;
        $this->conpass = $conpass;
    }

    //check wether the user exists
    private function userExist($useremail){

        $query="SELECT * FROM appointments.counsellor WHERE email= ?";
        $pre=$this->dbConnection()->prepare($query);
        $pre->execute([$useremail]);
        $rows=$pre->rowCount();

        if ($rows<1) {

            return true;
        }else{
            return false;
        }
    }

    public function reset()
    {

        $checkreg = new Pass($this->email, $this->pass, $this->conpass);


        if($checkreg->userExist($this->email)){

            echo "<script>alert('Counsellor with that email does not exist')</script>";
            echo "<script>window.open('../counselloresetpwdPage.php','_self')</script>";
            exit();
        }
       else if ($this->pass != $this->conpass) {
//check if the passwords match

            echo "<script>alert('Password did Not Match')</script>";
            echo "<script>window.open('../counselloresetpwdPage.php','_self')</script>";
            exit();


        }
        else {

            if ($this->pass == $this->conpass) {

                //hash and secure the password
                $password = password_hash($this->pass, PASSWORD_DEFAULT);

                // Update the counsellor's password
                $query = "UPDATE appointments.counsellor SET password = '$password' WHERE email = '$this->email'";
                $insert_results=$this->dbConnection()->exec($query);

                echo "Your password has been successfully reset.";
                header("Location: ../counsellorloginPage.php?msg=Password reset Successfully");


            }
        }
// else {
//
//            echo "<script>alert('Check your credentials well and reset your password')</script>";
//            echo "<script>window.open('../counselloresetpwdPage.php','_self')</script>";
//            exit();
//
//        }

    }
    }

	// Was the form submitted?
	if (isset($_POST["submit"])) {
        // Gather the post data
        $email = $_POST["email"];

        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        $resetP = new Pass($email,$password,$confirmpassword);
        $resetP->reset();

    }

