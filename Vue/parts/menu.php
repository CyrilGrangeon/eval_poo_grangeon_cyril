<?php
if(!isset($_SESSION['user'])){
    echo('<a href="index.php?controller=security&action=login">Se connecter</a>');
}else{
    echo('Bonjour'.unserialize($_SESSION['user'])->getUsername);
    echo('<a href="index.php?controller=security&action=logout">Se déconnecter</a>');
    echo('<a href="index.php?controller=equipe&action=add">Ajouter une équipe</a>');
}
?>

<a href="index.php?controller=equipe&action=homepage">Voir le Classement</a>





