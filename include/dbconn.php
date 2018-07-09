<?php
//changed db connection to object oriented 
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'Alex1234');
// define('DB_DATABASE', 'appointmentsystem');
// class DB_con {
//     public $connection;
//     function __construct(){


//         $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

//         if ($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);

//     }

//     function ret_obj(){
//         return $this->connection;
//     }
// }

class DB_con{

	private $DB_SERVER;
	private $DB_USERNAME;
	private $DB_PASSWORD;
	private $DB_DATABASE;
	private $CHARSET;

	protected function dbConnection(){
		//db details configure according to your system.
		$this->DB_SERVER='127.0.0.1';
		$this->DB_USERNAME='root';
		$this->DB_PASSWORD='petermakss';
		$this->DB_DATABASE='all_project_tests';
		$this->CHARSET='utf8mb4';

		 try {
        		//dynamic source data.. used for PDO connections
                $dsn= "mysql:host".$this->DB_SERVER.";dbname".$this->DB_DATABASE.";charset".$this->CHARSET;

                //create a PDO connection
                $conn= new PDO($dsn, $this->DB_USERNAME, $this->DB_PASSWORD);

                //call to Attribute method which has static PDO parameters for showing errors
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


				//return connection ... either true or false
                return $conn;
            
        } 
        //catch block
        catch (PDOException $e) {
        	//get connection error messages.
            echo "Connection Faile: ". $e->getMessage();
            
        }
	}



}
?>