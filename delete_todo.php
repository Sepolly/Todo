<?php

require_once './config.php';

$mysqli = db();

$todo_id = $_GET['todo_id'];

$sql = "DELETE FROM `todos` WHERE `todo_id` = '$todo_id'";

$result = $mysqli->query($sql);

if($result){
    header('Location: index.php');
}