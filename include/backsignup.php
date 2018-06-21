<?php
class Users {
    //The paramenters required for the student to sgn in the appointment booking system.
    private $regno;
    private $user;
    private $pass;
    private $phone;
    private $email;

    /**
     * Signup constructor.
     * @param $regno
     * @param $user
     * @param $pass
     * @param $phone
     * @param $email
     */
    public function __construct($regno, $user,$pass, $phone,$email)
    {
        $this->regno = $regno;
        $this->user = $user;
        $this->pass = $pass;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRegno()
    {
        return $this->regno;
    }

    /**
     * @param mixed $regno
     * @return Signup
     */
    public function setRegno($regno)
    {
        $this->regno = $regno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     * @return Signup
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Signup
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Signup
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param mixed $user
     * @return Signup
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

}
