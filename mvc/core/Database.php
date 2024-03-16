<?php
    class Database{
        protected $con;
        protected $serverName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $databaseName = "quanlygiadinh";

        public function __construct(){
            try {
                $this->con = mysqli_connect($this->serverName, $this->userName, $this->passWord);
                mysqli_select_db($this->con, $this->databaseName);
                mysqli_query($this->con, "SET NAMES 'utf8'");
            } catch (PDOException $e){
                $e->getMessage();
            }
           
        }
    }

?>

