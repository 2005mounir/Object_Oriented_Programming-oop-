<?php
 require "test.php";




//constracteur
class Person{
    public $name ;
    public $age ;

 public function __construct($n , $a){
    $this->name = $n;
    $this->age = $a;
 }

public function valid(){
    if(strlen($this->name) > 20 || $this->age > 80){
        echo 'you have erreur in your name or age !';
    }else{
        echo 'Hi' .' '.$this->name .' '.' you are young because your age is'.' '.$this->age; 
        echo '<br>';
  }
}

}

$person1 = new Person("mounir" , 20);
$person1->valid();





//Inheritance

class Animal1{
    public $name;
    public function eat(){
    echo $this->name.' '.'This animal eats grass';
 }
}

class Animal2 extends Animal1{
   public function eat2(){
      echo  ' '.'and eats Some insects .';
      echo '<br>';
   }
}

$Animal = new Animal2();
$Animal->name= 'Hedgehog';
$Animal->eat();
$Animal->eat2();







//Constructor + Inheritance
//parent class
class user{
    public $name;
    public $email;

  public function __construct($n , $e){
     $this->name = $n;
     $this->email =$e;
  }

  public function showInfo(){
    echo "Myn name is $this->name and this is my email $this->email you can send me a message here.";
    echo '<br>';
  }
}




//child class
class Admin extends user {
    public $role;
   
   public function __construct($n, $e , $r){
     parent::__construct($n,$e);
     $this->role = $r;
   }

   public function FctnRole(){
     echo  'this is my role'.'('.$this->role .')';
     echo "<br>";
   }
}


$admin = new Admin("Mounir","mounirmaimouni@gmail.com","Admin");
$admin->showInfo();
$admin->FctnRole();






//  here we will use require
 class car extends Vehicle{
   public  $door;
   public function __construct($b, $c ,$d){
      parent::__construct($b ,$c);
      $this->door = $d;
   }
   public function discribe2(){
      echo "and has a"." ". $this->door;
   }
 }


 $cars = new car("Bmw" , "blue" , 4);
 $cars->describe();
 $cars->discribe2();

?>