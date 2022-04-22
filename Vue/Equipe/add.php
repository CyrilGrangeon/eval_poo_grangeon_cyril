<html>
<head>

</head>
<body>
<?php
require 'Vue/parts/menu.php';



?>

    <h1>Ajouter une équipe</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="">Nom</label>
        <input type="text" placeholder="Nom de l'équipe" name="nom">
        <label for="">But mis</label>
        <input type="number" placeholder="Nombre de but marqués" name="but_mis">
        <label for="">But encaissés</label>
        <input type="number" placeholder="Nombre de but encaissés" name="but_pris">
        <label for="">Points</label>
        <input type="number" placeholder="Nombre de points" name="points">
        <label for="">Image</label>
        <input type="file" name="logo">
        <input type="submit">

        <?php
            require 'Vue/parts/form_errors.php';
        ?>

    </form>






</body>






</html>