<?php


function db(){
    $con = new mysqli('localhost', 'root', 'A75294143b','todo',3306);
    if(!$con){
        die('not connected');
    }
    return $con;
}

