<?php
session_start();

function login($user){
    $_SESSION["auth_user"] = $user;
}