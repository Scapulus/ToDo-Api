<?php

namespace Database;

$pdo = new PDO('sqlite:todo-api.db');
$statement = $pdo->query("SELECT * FROM user");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($row);
echo "<pre>";