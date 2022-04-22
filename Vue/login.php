<html>
    <head>

    </head>

    <body>
        <h1>Veuillez vous connecter</h1>

        <form method="post">
            <label for="Username"></label>
            <input type="text" name="username" placeholder="Veuillez saisir un username">

            <label for="Password"></label>
            <input type="password" name="password" placeholder="Veuillez saisir un mot de passe">

            <input type="submit">

            <?php
                require 'Vue/parts/form_errors.php';
            ?>
        </form>

    <a href="index.php?controller=equipe&action=homepage">Accéder à l'application sans se connecter</a>
    </body>






</html>