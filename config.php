<?php


function db(){
    $con = new mysqli('localhost', 'root', '<YOUR_PASSWORD>','todo',3306);
    if(!$con){
        die('not connected');
    }
    return $con;
}

