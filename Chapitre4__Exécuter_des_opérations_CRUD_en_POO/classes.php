<?php


class users{
     public $conn;
     public $table ="users";

     public $id;
     public $name;
     public $email;

    public function __construct($conect,$name,$email){
        $this->conn = $conect;
        $this->name = $name;
        $this->email = $email;
    }

// create

    public function create(){
        $sql = "INSERT INTO {$this->table}(name,email)VALUES(:name , :email)";
        $stmt = $this->conn->prepare($sql);
       return $stmt->execute(['name'=>$this->name , 'email'=>$this->email]);
    }


//read
    public function read(){
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  //update 
   public function update(){
     $sql = "UPDATE {$this->table} SET name= :name , email =:email  WHERE id=:id";
     $stmt = $this->conn->prepare($sql);
      return $stmt->execute(['name'=>$this->name , 'email'=>$this->email , 'id'=>$this->id]);
   }

   //delete
   public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]);
    }
}






































?>