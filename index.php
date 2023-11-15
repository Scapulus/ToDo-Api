<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
    <?php
        require ("database.php");

        if (isset($_POST["submit"]))
        {

        }
    ?>
    <h1>Anmelden</h1>
    <form action="index.php" method="post">
        <input type="text" name="email" placeholder="E-Mail" required><br>
        <input type="password" name="password" placeholder="Passwort" required><br>
        <button type="submit" name="submit">Einloggen</button>
    </form>
    </body>
</html>