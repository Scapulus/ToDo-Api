<?php

global $pdo;
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    try
    {
        require_once '../database.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // Error Handler
        $errors = [];

        if (isInputEmpty($email, $password))
        {
            $errors["emptyInput"] = 'Alle Felder ausfüllen!';
            goto errorHandling;
        }

        $result = getEmail($pdo, $email);

        if (isEmailWrong($result))
        {
            $errors["loginIncorrect"] = 'Falsche Login Daten!';
        }
        if (isEmailWrong($result) && isPasswordWrong($password, $result["password"]))
        {
            $errors["loginIncorrect"] = 'Falsche Login Daten!';
        }

        errorHandling:
        require_once '../config_session.inc.php';

        if ($errors)
        {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["userId"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["userId"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../../index.php?login=success");
        $pdo = null;
        $stat = null;
        die();
    }
    catch (PDOException $exception)
    {
        die("Connection failed: " . $exception->getMessage());
    }
}
else
{
    header("Location: ../../index.php");
    die();
}