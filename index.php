<?php 
    require_once './models/Todo.php';
    require_once './auth.php';
    if(!$user){
        return header('Location: login.php');
    }
    $user_id = $user->id;
    $todos = Todo::all($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./search.js" defer></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div>
            <h1><?php echo $user->first_name . " " . $user->last_name;?></h1>
            <p><?php echo $user->email;?></>
        </div>
        <ul class = "nav__links">
            <li><a href="setting.php">setting</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <section class="container">
        <div class = "search__container">
            <input type="search" name="" id="search__input">
        </div>
        <div>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                    while($todo = mysqli_fetch_assoc($todos)){
                        $id = $todo["todo_id"];
                        $title = $todo['title'];
                        $start_date = $todo['start_date'];
                        $end_date = $todo['end_date'];
                        $due_time = $todo['due_time'];
                        $description = $todo['description'];
                        echo "
                        <tr>
                            <td>$title</td>
                            <td>$start_date</td>
                            <td>$end_date</td>
                            <td>$due_time</td>
                            <td>
                                <button id = 'edit_todo_btn'>edit</button>
                                <a href='delete_todo.php?todo_id=$id'>delete</a>
                            </td>
                        </tr>
                        ";
                    }
                    
                    ?>
                        

                </tbody>
            </table>
            <div class="add__todo__container" id = "todo_form">
                <button id = "close_todo_form" class = "action__btn close__todo__btn">x</button>
                <form action="create_todo.php" method="post" class = "add__todo__form">
                    <label>
                        <p>Title</p>
                        <input type="text" name = "title" required>
                    </label>
                    <div class="todo__dates__group">
                        <label>
                            <p>Start Date</p>
                            <input type="date" name = "start_date" required>
                        </label>
                        <label>
                            <p>End Date</p>
                            <input type="date" name = "end_date" required>
                        </label>
                        <label>
                            <p>Due Time</p>
                            <input type="time" name = "due_time" required>
                        </label>
                    </div>
                    <label>
                        <p>Description</p>
                        <textarea name="description" id="" resize="none"></textarea>
                    </label>
                    <button type="submit">create</button>
                </form>
            </div>
            <button class = "add__todo__button" id = "toggle_todo_form">+</button>
        </div>
    </section>

    <script src = "./index.js"></script>
</body>
</html>