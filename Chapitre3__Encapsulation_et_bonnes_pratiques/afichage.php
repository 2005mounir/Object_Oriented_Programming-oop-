<?php
require "ArticleEncapsule.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

$namE = isset($_POST['nom'])? trim(htmlspecialchars($_POST['nom'])) :"";
$pricE = isset($_POST['price'])? trim(htmlspecialchars($_POST['price'])) :"";
$stocK = isset($_POST['stock'])? trim(htmlspecialchars($_POST['stock'])) :"";




$product = new Product();
$product->setname($namE);
$product->setprice($pricE);
$product->setstock($stocK);


$gproduct = new gproduct($namE , $pricE , $stocK);
$gproduct->getname();
$gproduct->getprice();
$gproduct->getstock();
$gproduct->afichage();

}






















?>