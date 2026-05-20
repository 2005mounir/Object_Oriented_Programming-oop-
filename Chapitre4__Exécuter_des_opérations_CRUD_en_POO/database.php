<?php

class database {

    private $host ='localhost';
    private $dbname = 'chapitre4_db';
    private $pasword = "";
    private $user = "root";
    public $conn;

    public function connection(){
        $this->conn = null;

        try{
$this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user,  $this->pasword);        
      $this->conn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'you have erreur in :'.$e->getMessage();
        }
         return $this->conn;
    }
  
}




?>