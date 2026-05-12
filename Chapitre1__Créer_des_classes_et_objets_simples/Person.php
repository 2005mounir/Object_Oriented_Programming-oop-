<?php

  class Person{
    // properties
        public $name;
         public $age;
   // method
    public function sayHello(){
        echo 'hi my name is'.' '.$this->name.' '.'and I am '.' '.$this->age;
        echo '<br>';
    }     
  }
  
  // object1
$preson = new person();

$preson->name ='Mounir ';
$preson->age =20;
$preson->sayHello();

//object2
$preson2 = new Person();

$preson2->name ='Ali';
$preson2->age =23;
$preson2->sayHello();



























?>