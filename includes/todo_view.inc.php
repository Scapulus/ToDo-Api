<?php

declare(strict_types=1);

require_once 'config_session.inc.php';
require_once 'auth_check.php';
require_once 'database.inc.php';
require_once 'todo_model.inc.php';


function showTodos()
{
    global $pdo;
    $todos = getTodos($pdo);

    foreach ($todos as $todo)
    {
        $isChecked = null;
        if ($todo["done"])
        {
            $isChecked = 'checked';
        }
        echo '<tr>';
        echo '<td><input type="checkbox" id="' . $todo["todoId"] . '" ' . $isChecked . '></td>';
        echo '<td>' . $todo["todoName"] . '</td>';
        echo '<td>' . $todo["todoText"] . '</td>';
        echo '</tr>';
    }
}