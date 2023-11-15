<?php

global $pdo;
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try
    {

        require_once 'database.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // Error Handler
        $errors = [];

        if (isInputEmpty($email, $username, $password))
        {
            $errors["emptyInput"] = 'Fill in all fields!';
        }
        if (isEmailInvalid($email))
        {
            $errors["invalidEmail"] = 'Invalid email used!';
        }
        if (isEmailRegistered($pdo, $email))
        {
            $errors["emailUsed"] = 'Email already registered!';
        }

        require_once 'config_session.inc.php';

        if ($errors)
        {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }

        createUser($pdo, $email, $username, $password);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $exception)
    {
        die("Connection failed: " . $exception->getMessage());
    }
}
else
{
    header("Location: ../index.php");
    die();
}