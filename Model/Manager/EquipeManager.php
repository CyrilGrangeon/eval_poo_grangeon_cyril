<?php

class EquipeManager extends DbManager{

        public function getOne($id){

        }

        public function getAll(){

        }

       public function delete($id){
        {
                $query = $this->bdd->prepare("DELETE FROM equipe WHERE id = :id");
                $query->execute([
                    "id"=> $id
    
                    ]);
            }
    
       }

       public function edit(Equipe $equipe){
        $query = $this->bdd->prepare("UPDATE equipe
        SET :nom, :butMis, :butPris, :points, :imageLink,  WHERE id = :id");

        $query->execute([
            "nom"=> $equipe->getNom(),
            'butMis'=> $equipe->getButMis(),
            'butPris'=> $equipe->getButPris(),
            "points"=> $equipe->getPoints(),
            "imageLink"=> $equipe->getImage()
        ]);


       }
       public function getByName($name){
        $equipe = null;
        $req = $this->bdd->prepare( 'SELECT * FROM equipe WHERE nom = :nom');
        $req->execute([
                'nom'=> $name
        ]);
        $resultat = $req->fetch();
        if ($resultat){
                $equipe = new Equipe($resultat['nom'], $resultat['butMis'], $resultat['butPris'], $resultat['image_link'], $resultat['points'], $resultat['id']);
        }
        return $equipe;
       }
       public function add(Equipe $equipe){
           $req = $this->bdd->prepare("INSERT INTO equipe (nom, butmis, butpris, points, image_link) 
           VALUE (:nom, :butMis, :butPris, :points, :imageLink ) ");
           $req->execute([
               'nom' => $equipe->getNom(),
               'butMis' => $equipe->getButMis(),
               'butPris' => $equipe->getButPris(),
               'points' => $equipe->getPoints(),
               'imageLink' => $equipe->getImage(),

           ]);

       }
       public function findOrderedTeam(){
        $equipes = [];
        $req = $this->bdd->prepare( 'SELECT * FROM equipe ORDER BY points DESC, butpris ASC, butmis ASC');
        $req->execute();
        $resultats = $req->fetchAll();
        foreach ($resultats as $resultat){
                $equipes [] = new Equipe($resultat['nom'], $resultat['butMis'], $resultat['butPris'], $resultat['image_link'], $resultat['points'], $resultat['id']);
                
        }
        return $equipes;
       }
}