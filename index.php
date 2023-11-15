<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta content="width=device-width, initial-scale=1.0">
        <title>ToDo-List - Login</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/ffb3484693.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        require ("database.php");

        if (isset($_POST["submit"]))
        {

        }
    ?>
    <header>
        <h1 class="logo">
            <i class="fa-regular fa-square-check"></i>
            ToDo-List
        </h1>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Registrieren</a>
        </nav>
    </header>
    <div class="container">
        <div class="center-box">
            <h2>Login</h2>
            <form action="index.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" name="email" placeholder="E-Mail" required><br>
                    </div>
                    <!--div class="input-field">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="username" placeholder="Benutzername" required><br>
                    </div-->
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Passwort" required><br>
                    </div>
                </div>
                <div class="button-field">
                    <button type="submit" name="submit">Anmelden</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>