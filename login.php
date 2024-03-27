<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Todo | Login</title>
</head>
<body>
    <form action="process_login.php" method="POST">
        <label>
            <p>email</p>
            <input type="email" name="email" id="">
        </label>
        <label>
            <p>password</p>
            <input type="password" name="password" id="">
        </label>
        <button type="submit">login</button>
        <p>Don't have an account? <a href="signup.php">sign up</a></p>
    </form>
</body>
</html>