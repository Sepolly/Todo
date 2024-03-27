<?php 
require_once './config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mysqli = db();

    $user_email = $mysqli->real_escape_string($_POST['email']);
    $sql = "SELECT * FROM `users` WHERE `email` = '$user_email'";
    $user = mysqli_fetch_assoc(mysqli_query($mysqli, $sql));
    // print_r(isset($user));
    
    if(isset($user)){
     session_start();
     $_SESSION['auth_user'] = $user;
     
     return header('Location: index.php');
    }
    return header('Location: login.php');

}
