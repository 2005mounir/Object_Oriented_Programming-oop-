<?php


class  Database{
    private $host="localhost";
    private $dbname="blogdb";
    private $user ="root";
    private $password ="";
   
    private $conn;

   public function connection(){
     $this ->conn = 'null';
      
     try{
        $dsn = "mysql:host=localhost;dbname=blogdb;charset=utf8";

          $this->conn = new PDO($dsn, "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        
     }catch( PDOException $e){
        echo 'you have erreur :'.$e->getMessage();
     }
     return $this->conn;
   }

}













?>