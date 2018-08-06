<?php

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
		$this->DB_DATABASE='appointments';
		$this->DB_PASSWORD='';

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
            echo "Connection Failed: ". $e->getMessage();
            
        }
	}



}
?>
