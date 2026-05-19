<?php

//setters
class Product {
    private $name;
    private $price;
    private $stock;

    public function setname($name){
        if(!$name =="" && strlen($name) >2){
            $this->name = $name;
            echo 'Preduit :'.' '.$this->name;
            echo '<br>';
        }else{
            echo 'this name no valid';
        }
    }

    public function setprice($price){
        if($price>0){
            $this->price = $price;
            echo 'Price :' .' '.$this->price;
            echo '<br>';
        }else{
            echo 'price no valid';
            echo '<br>';
            
        }
    }

    public function setstock($stock){
        if($stock > 0){
            $this->stock = $stock;
            echo 'stok :'.' '.$this->stock;
            echo'<br>';
        }else{
            echo 'stock no valid';
            echo '<br>';

        }
    }
}





// getters

class Gproduct{
    private $name;
    private $price;
    private $stock;

 public function __construct($n , $p , $st){
    $this->name = $n;
    $this->price = $p;
    $this->stock = $st;
 }
  
public function getname(){
    return $this->name;
 }

 public function getprice(){
    return $this->price;
    
 }

 public function getstock(){
    return $this->stock;
 }

 
 public function afichage(){
    echo 'we have a product called '.' '.$this->name .' '.'and its price is '.' '.$this->price .' '.' 
    dh'.' and we have a '. $this->stock.' '.'item in stock';
 }
}


































?>