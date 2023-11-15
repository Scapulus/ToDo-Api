<?php

declare(strict_types=1);

function checkSignupErrors()
{
    if (isset($_SESSION['errors_signup']))
    {
        $errors = $_SESSION['errors_signup'];

        foreach ($errors as $error)
        {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    }
    elseif (isset($_GET["signup"]) && $_GET["signup"] === "success")
    {
        echo '<p class="form-success">Registrierung erfolgreich!</p>';
    }
}