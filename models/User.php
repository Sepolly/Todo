<?php
require_once './config.php';

class User{
    public $first_name;
    public $last_name;
    public $other_name;
    public $email;
    public $password;

    public function save(){
        $mysqli = db();
        if($this->first_name && $this->last_name && $this->email && $this->password){
            
            $sql = "INSERT INTO users (`first_name`,`last_name`,`other_name`,`email`,`password`)
             VALUES(?,?,?,?,?)";
            $statement = $mysqli->stmt_init();

            if(!$statement->prepare($sql)){
                die('SQL error:'.$mysqli->error);
            }

            $statement->bind_param('sssss',
                                    $this->first_name,
                                    $this->last_name,
                                    $this->other_name,
                                    $this->email,
                                    $this->password);
            $statement->execute();
            return true;
            
        }
    }

    public static function findByEmail($email){
        $mysqli = db();

        $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
        $result = $mysqli->query($sql);
        $result = mysqli_fetch_assoc($result);
    
        if($result){
            return $result;
        }
        return false;
    }
}