<?php

declare(strict_types=1);

function getEmail(object $pdo, string $email)
{
    $query = 'SELECT email FROM user WHERE email = :email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $email, string $username, string $password)
{
    $query = 'INSERT INTO user (email, username, password) VALUES (:email, :username, :password)';
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->execute();
}