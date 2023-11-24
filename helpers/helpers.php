<?php

function get_names($full_name,$first=true){
    if($first){
        return explode(' ',$full_name)[0];
    }
    return explode(' ',$full_name)[1];
}