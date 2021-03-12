<?php
class DB{
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "test2";

    private $statement;
    private $dbHandler;
    private $error;

        public function __construct() {
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->dbHandler = new PDO("mysql:host=".$this->dbHost."", $this->dbUser, $this->dbPass, $options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }

            //Create database
            $query = "CREATE DATABASE IF NOT EXISTS ".$this->dbName;
            if($this->dbHandler->exec($query) === TRUE){
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            } else {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
                //echo "DB already exist or Error creating database: " . $this->error;
            }

        // Create table
            $query = "CREATE TABLE IF NOT EXISTS `posttable` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `title` varchar(100) NOT NULL,
                `description` text NOT NULL,
                `image` varchar(200) NOT NULL,
                `status` int(11) NOT NULL,
                `create_at` datetime NOT NULL,
                `update_at` datetime DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

             if ($this->dbHandler->exec($query) === FALSE){
                echo "Error creating table: " . $this->error;
            }

        }

        //Allows us to write queries
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        //Bind values
        public function bind($parameter, $value, $type = null) {
            switch (is_null($type)) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
            $this->statement->bindValue($parameter, $value, $type);
        }

        //Execute the prepared statement
        public function execute() {
            return $this->statement->execute();
        }

        //Return an array
        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //Return a specific row as an object
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        //Get's the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }

} 
?>