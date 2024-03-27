<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Todo | Signup</title>
</head>
<body>
    <?php 

    if($_SESSION['message'] ?? null){
        echo $_SESSION['message'];
    }
    
    ?>
    <form action="register.php" method="post">
        <label>
            <p>full name</p>
            <input type="text" name="full_name" id="" required>
        </label>
        <label>
            <p>other name</p>
            <input type="text" name="other_name" id="" >
        </label>
        <label>
            <p>email</p>
            <input type="email" name="email" id="" required>
        </label>
        <label>
            <p>password</p>
            <input type="password" name="password" id="" required>
        </label>
        <label>
            <p>confirm password</p>
            <input type="password" name="c_password" id="" required>
        </label>
        <button type="submit">sign up</button>
    </form>
</body>
</html>