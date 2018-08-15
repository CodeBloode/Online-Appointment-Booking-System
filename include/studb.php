<?php


class Database
{

    private $host = "localhost";
    private $db_name = "appointments";
    private $username = "root";
<<<<<<< HEAD
    private $password = "hackEd56";
=======
    private $password = "Alex1234";
>>>>>>> 5322733fa2c85639c130f62d5030d321df08b9ec
    public $conn;

    public function dbConnection() 
    {

        $this->conn = null;
        try 
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>