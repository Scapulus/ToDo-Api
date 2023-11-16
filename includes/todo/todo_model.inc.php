<?php

declare(strict_types=1);

function getTodos(object $pdo)
{
    $query = 'SELECT * FROM todo WHERE userId = :userId';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userId", $_SESSION["user-id"]);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}