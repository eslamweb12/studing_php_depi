<?php


include_once './helpers/connectionDb.php';
function getAllusers(){
    $con=connecttoDB();
    $data=$con->query('SELECT * FROM users');
    return $data->fetchAll();

}