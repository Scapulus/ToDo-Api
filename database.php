<?php

try
{
    $pdo = new PDO('sqlite:todo-api.db');
}
catch (PDOException $exception)
{
    echo "SQL Error: " . $exception->getMessage();
}

class Database
{
    static public function getAllUser()
    {
        global $pdo;
        $statement = $pdo->query("SELECT * FROM user");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function getToDos($userId)
    {
        global $pdo;
        $statement = $pdo->query("SELECT * FROM todo WHERE shareId=$userId");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function setToDos($todoName, $todoText)
    {
        global $pdo;

    }
    static public function editToDos($todoId, $todoName, $todoText)
    {

    }
}