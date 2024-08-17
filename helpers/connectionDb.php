<?php 



// connecting to database by PDO
function connecttoDB(){
    $info='mysql:host=localhost;dbname=ecommerc';
    $usename='root';
    $password='';
    $con=new PDO($info,$usename,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $con;
}