<?php

require_once "Database.php";

class Data{
    private $conn;
    private $table = 'article';

   public function __construct($pdo){
        $this->conn = $pdo;
    }
 
    //select data
    public function SelectData(){
     $sql = "SELECT * FROM " . $this->table;     
     $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
        if($result){
            foreach($result as $row){
                echo $row['id'] . " - " . $row['titre'] . "<br>";
            }
        } else {
            echo "No data found";
        }
    }
    
//insert data 
public function Inssertdata($titre, $contenu){
    $sql = "INSERT INTO". $this->table."(titre,contenu)VALUES(?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$titre, $contenu]);
}


}

$connect = new Database();
$pdo = $connect->connection();
$data = new Data($pdo);
$data->SelectData();

























?>