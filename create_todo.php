<?php
session_start();
require_once './config.php';
require './models/Todo.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $mysqli = db();
    $user_id = $_SESSION["auth_user"]["user_id"];

    $title = $mysqli->real_escape_string($_POST["title"]);
    $start_date = $mysqli->real_escape_string($_POST["start_date"]);
    $end_date = $mysqli->real_escape_string($_POST["end_date"]);
    $due_time = $mysqli->real_escape_string($_POST["due_time"]);
    $description = $mysqli->real_escape_string($_POST["description"]);

    $todo = new Todo;

    $todo->title = $title;
    $todo->start_date = $start_date;
    $todo->end_date = $end_date;
    $todo->due_time = $due_time;
    $todo->description = $description;
    $todo->user_id = $user_id;

    $todo->save();

    header('Location: index.php');

}