<?php
require_once "../../include/dbconn.php";
class ResetPass extends DB_con {

    private $email;

    public function __construct($email)
    {
        $this->email=$email;
    }

    private function validatEmail($eml)
    {
        $pattern = "/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        if(!preg_match($pattern,$eml)){

            return true;

        }else
        {
            return false;
        }

    }

    public function resetPass(){

        $validate = new ResetPass($this->email);
        if($validate->validatEmail($this->email)==true){

            echo "<script>window.alert('email is invalid')</script>";
            echo "<script> window.open('../forgotpwdPage.html','_self')</script>";
        }else{

            $token = "qwertyuiopasdfghjklzxcvbnm0123456789";
            $token=str_shuffle($token);
            $token=substr($token,2,12);

            $getEmail = "SELECT email From appointments.counsellor WHERE email = ?";
            $rungetEmail=  $this->dbConnection()->prepare($getEmail);
            $rungetEmail->execute([$this->email]);

            if($rungetEmail->rowCount()<1){

                echo "<script>window.alert('email not in database')</script>";
                echo "<script> window.open('../forgotpwdPage.html','_self')</script>";
            }else{

                $updateToken = "UPDATE appointments.counsellor  SET token=?, tokenexpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE ) WHERE email=?";
                $runupdateToken=$this->dbConnection()->prepare($updateToken);

                $runupdateToken->execute([$token,$this->email]);

                require_once "../../PHPMAILER/mailer/PHPMailerAutoload.php";

                $subject="RESET PASSWORD";
                $message=" 
                        Hello <br><br>
                        To reset on the email click 
                        <a href='http://127.0.0.1/counsellingDpt/counsellors/resetpwdPage.html?email=$this->emai &token=$token'>here</a><br><br>
                        Regards <br><br>
                        Counselling Departement Egerton University.
                ";
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    $mail = new PHPMailer(); //create a new object
                    $mail->IsSMTP(); //enable SMTP
                    $mail->SMTPDebug  =0; //debugging: 0 errors and messages, 0 messages only. Made 0 for production
                    $mail->SMTPAuth   = true; //authentication enabled
                    // $mail->SMTPSecure = "ssl"; //secure transfer enabled required for gmail. Do not uncommet this due to gmail security options.
                    $mail->Host       = "smtp.gmail.com";
                    $mail->Port       = 25; //or try 587
                    $mail->IsHTML(true);
                    $mail->AddAddress($this->email);
                    $mail->Username="codebloodesons@gmail.com";
                    $mail->Password="codebloode2015";
                    $mail->SetFrom('codebloodesons@gmail.com','Counselling Department');
                    $mail->AddReplyTo("codebloodesons@gmail.com","Counselling Department");
                    $mail->Subject    = $subject;
                    $mail->MsgHTML($message);
                    $mail->Send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }



                header("location:../forgotpwdPage.html?msg=email sent");
            }

        }
    }
}

if(isset($_POST['send'])){

    $email = $_POST['email'];
    $sendmail = new ResetPass($email);

    $sendmail->resetPass();
}