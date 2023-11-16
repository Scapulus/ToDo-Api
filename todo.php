<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/auth_check.php';
require_once 'includes/todo_view.inc.php';
require_once 'includes/database.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0">
    <title>ToDo-List</title>
    <link rel="stylesheet" href="css-js/style_todo.css">
    <script src="https://kit.fontawesome.com/ffb3484693.js" crossorigin="anonymous"></script>
    <script src="css-js/script_todo.js"></script>
</head>
<body>
<header>
    <h1 class="logo">
        <i class="fa-regular fa-square-check"></i>
        ToDo-List
    </h1>
    <nav class="navigation">
        <a href="/todo.php"><i class="fa-solid fa-house"></i> Home</a>
        <a href="/includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </nav>
</header>
<div class="container">
    <div class="center-box">
        <div class="options">
            <nav>
                <a href="#"><i class="fa-solid fa-list-check"></i> ToDo's auflisten</a>
                <a href="#"><i class="fa-solid fa-plus"></i> Neue ToDo's</a>
                <a href="#"><i class="fa-solid fa-trash-can"></i> ToDo's löschen</a>
            </nav>
        </div>
        <table>
            <thead>
                <td class="check-box">Status</td><td>ToDo-Name</td><td>ToDo-Beschreibung</td>
            </thead>
            <?php
                showTodos();
            ?>
            <!--tr>
                <td><input type="checkbox" checked></td>
                <td>Müll rausbringen</td>
                <td>Schnell!</td>
            </tr-->
        </table>
    </div>
</div>
</body>
</html>