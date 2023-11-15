<?php

declare(strict_types=1);

function isInputEmpty(string $email, string $password)
{
    if (empty($email) || empty($password))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isEmailWrong(bool|array $result)
{
    if (!$result)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isPasswordWrong(string $password, string $hashedPassword)
{
    if (!password_verify($password, $hashedPassword))
    {
        return true;
    }
    else
    {
        return false;
    }
}