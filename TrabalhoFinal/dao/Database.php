<?php
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $password = '1234';
        private $database = 'crud';
        public $conn;


        public function getConnection(){
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";crud=" . $this->database, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
    
            return $this->conn;
        }
    }
    ?>