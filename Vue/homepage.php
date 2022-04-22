<html>
<head></head>

<body>
    <h1>Le classement !</h1>
    <?php
        require 'Vue/parts/menu.php'
    ?>
</body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Buts marqués</th>
                <th>Buts encaissés</th>
                <th>Points</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($equipe as $equipes ){
                    $stringline = 
                    '<tr>
                    <td>'.$equipe->getId().'</td>
                    <td>'.$equipe->getNom().'</td>
                    <td>'.$equipe->getButMis().'</td>
                    <td>'.$equipe->getButPris().'</td>
                    <td>'.$equipe->getPoint().'</td>
                    <td>'.$equipe->getImage().'</td>
                    ';
                    
                    if(!is_null($equipe->getImage())){
                        $stringline .='<td><img src="public/logo/'.$equipe->getImage().'">';
                    }else{
                        $stringline .='<td>Aucune image ! </td>';
                    }
                    echo($stringline);
                }
                // echo($stringline)
            ?>
        </tbody>

    </table>





</html>