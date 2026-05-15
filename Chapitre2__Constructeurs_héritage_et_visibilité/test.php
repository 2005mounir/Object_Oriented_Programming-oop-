<?php

class Vehicle{
    protected $brand;
    protected $color;

  public function __construct($b , $c){
    $this->brand = $b;
    $this->color = $c;
  }
 public function describe(){
    echo 'this'." ".$this->brand." "."is"." ".$this->color ." ";
   
 }
  
}































?>