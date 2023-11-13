<?php

namespace Database;

use PDO;

$pdo = new PDO('sqlite:todo-api.db');
$statement = $pdo->query("SELECT * FROM user");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

class Database
{
    public function getToDos()
    {

    }
    public function setToDos($todoText)
    {

    }
    public function editToDos($todoId, $todoText)
    {

    }
}