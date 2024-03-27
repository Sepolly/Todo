<?php
session_start();

if($_SESSION['signed-up']){
    $message = "You have signed up successfully. You can now ";
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <div>
        <p>
            <?php echo $message . "<a href = 'login.php'>login</a>" ?? null;?>
        </p>
    </div>
</body>
</html>