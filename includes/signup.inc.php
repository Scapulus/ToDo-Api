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
            $errors["emptyInput"] = 'Alle Felder ausfüllen!';
        }
        if (isEmailInvalid($email))
        {
            $errors["invalidEmail"] = 'Ungültige Emailadresse!';
        }
        if (isEmailRegistered($pdo, $email))
        {
            $errors["emailUsed"] = 'Email schon registriert!';
        }

        require_once 'config_session.inc.php';

        if ($errors)
        {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../signup.php");
            die();
        }

        createUser($pdo, $email, $username, $password);

        header("Location: ../signup.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $exception)
    {
        die("Query failed: " . $exception->getMessage());
    }
}
else
{
    header("Location: ../signup.php");
    die();
}