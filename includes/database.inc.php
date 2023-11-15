<?php

try
{
    $pdo = new PDO('sqlite:../../todo-api.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $exception)
{
    die("Connection failed: " . $exception->getMessage());
}
