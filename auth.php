<?php
session_start();
require_once './config.php';

class User{
    public $first_name;
    public $last_name;
    public $other_name;
    public $emil;
    public $id;
    public $password;
    public $created_at;
    public $updated_at;

    public function __construct($user){
        $this->first_name = $user['first_name'];
        $this->last_name = $user['last_name'];
        $this->other_name = $user['other_name'];
        $this->email = $user['email'];
        $this->id = $user['user_id'];
        $this->password = $user['password'];
        $this->created_at = $user['created_at'];
        $this->updated_at = $user['updated_at'];
    }
}

if(isset($_SESSION['auth_user'])){
    $user = new User($_SESSION['auth_user']);
}
else{
    header('Location: login.php');

}
