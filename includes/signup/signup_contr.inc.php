<?php

declare(strict_types=1);

function isInputEmpty(string $email, string $username, string $password) : bool
{
    if (empty($email) || empty($username) || empty($password))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isEmailInvalid(string $email) : bool
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isEmailRegistered(object $pdo, string $email) : bool
{
    if (getEmail($pdo, $email))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function createUser(object $pdo, string $email, string $username, string $password)
{
    setUser($pdo, $email, $username, $password);
}