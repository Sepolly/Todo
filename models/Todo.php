<?php
require_once './config.php';

class Todo{
    public $title;
    public $start_date;
    public $end_date;
    public $due_time;
    public $description;
    public $user_id;

    public function save(){
        $mysqli = db();

        $sql = "INSERT INTO 
        `todos`(
            `title`,
            `start_date`,
            `end_date`,
            `due_time`,
            `description`,
            `user_id`
            ) 
        VALUES(
            '$this->title',
            '$this->start_date',
            '$this->end_date',
            '$this->due_time',
            '$this->description',
            '$this->user_id'
            )";
            $result = $mysqli->query($sql);
            return $result ?? null;

    }  

    public static function all($user_id = ''){
        $mysqli = db();

        if($user_id){
            $sql = "SELECT * FROM `todos` WHERE `user_id` = '$user_id' ORDER BY `start_date` asc";
            $result = $mysqli->query($sql);

            if($result){
                return $result;
            }
            else{
                die("Couldn't get todos.");
            }
        }
        else{
            $sql = "SELECT * FROM `todos`";
            $result = $mysqli->query($sql);

            if($result){
               return $result;
            }
            else{
                die("Couldn't get todos.");
            }
        }

    }
}