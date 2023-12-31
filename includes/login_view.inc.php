<?php

declare(strict_types=1);

function checkLoginErrors()
{
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    }
    elseif (isset($_GET["login"]) && $_GET["login"] === "success")
    {
        //echo '<p class="form-success">Login erfolgreich!</p>';
        header("Location: ../todo.php");
    }
}