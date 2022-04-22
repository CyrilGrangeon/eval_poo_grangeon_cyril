<html>
<head>
    
</head>
<body>
<div>
    <h1>Créer un compte !</h1>

    <a href="index.php?controller=security&action=login">J'ai déjà un compte !</a>

    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" name="username" class="form-control"  type="text">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input id="password" name="password_1" class="form-control"  type="password">

            <label for="password_confirm">Confirmation du mot de passe</label>
            <input id="password_confirm" name="password_confirm" class="form-control" type="password">
        </div>

        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input id="firstname" name="firstname" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="lastname">Nom de famille</label>
            <input id="lastname" name="lastname" type="text" class="form-control">
        </div>

        <input class="mt-3 btn btn-success" type="submit">

        <?php

        foreach ($errors as $error){
            echo('<div class="alert alert-danger mt-3" role="alert">
  '.$error.'
</div>');
        }
        ?>
    </form>
</div>


</body>
</html>
