<?php
    class Database{
        private $host;
        private $user;
        private $password;
        private $connection;


        public function getConnection(){
            $this->host = 'localhost';
            $this->user = 'root';
            $this->datacase = 'aula';
            $this->password = '1234';
           
            $this->connection = new PDO("mysql:host=$this->host; dbname=$this->database", $this->user, $this->password);
            return $this->connection;
        }
    }


?>