<?php

class UtilisateurManager extends DbManager{
    public function login($username, $password){
        $utilisateur = null;
        $req = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $req->execute([
            'username' => $username
        ]);
        $resultat = $req->fetch();
        if($resultat){
            if(password_verify($password, $resultat['password'])){
                $utilisateur = new Utilisateur($resultat['username'], $resultat['password'], $resultat['id']);
            }
            
        }
        return $utilisateur;
    }
}