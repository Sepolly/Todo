<?php

function redirect($path){
    $location = dirname(__DIR__ . $path . ".php");
    header("Location: $location");
}