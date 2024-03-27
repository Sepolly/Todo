<?php
session_start();

require_once './models/User.php';
require_once './helpers/helpers.php';

$registered_user = User::findByEmail($_POST['email']);

if($registered_user){
    $_SESSION['message'] = 'user already exists';
    header('Location: signup.php');
}
$user = new User();

$user->first_name = get_names($_POST['full_name']);
$user->last_name = get_names($_POST['full_name'],false);
$user->email = $_POST['email'];

$_POST['other_name'] ? $user->other_name = $_POST['other_name'] : $user->other_name = '';

if($_POST['password'] == $_POST['c_password']){
    $user->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
}
if($user->save()){
    $_SESSION['signed-up'] = true;
    header('Location: signup_success.php');
    exit;
}