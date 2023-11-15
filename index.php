<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta content="width=device-width, initial-scale=1.0">
        <title>ToDo-List - Registrieren</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/ffb3484693.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <h1 class="logo">
            <i class="fa-regular fa-square-check"></i>
            ToDo-List
        </h1>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Login</a>
        </nav>
    </header>
    <div class="container">
        <div class="center-box">
            <h2>Login</h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" name="email" placeholder="E-Mail">
                    </div>
                    <div class="input-field">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="username" placeholder="Benutzername">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Passwort">
                    </div>
                </div>
                <div class="button-field">
                    <button type="submit" name="submit">Anmelden</button>
                </div>
                <div class="message-field">
                    <?php
                        CheckSignupErrors();
                    ?>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>