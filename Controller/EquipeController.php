<?php


class EquipeController{
    private $equipeManager;
    public function __construct(){
        
        $this->equipeManager = new EquipeManager;
    }
    public function homepage(){
        $equipe = $this->equipeManager->findOrderedTeam();
        require 'Vue/homepage.php';
    }

    public function add(){
        $errors = [];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $imageFilename = null;
            if(empty($_POST['nom'])){
                $errors[] = 'veuillez saisir un nom';
            }
            if(empty($_POST['but_mis'] == '')){
                $errors[] = 'veuillez saisir le nbre de buts marqués';
            }
            if(empty($_POST['but_pris'] == '')){
                $errors[] = 'veuillez saisir le nbre de buts encaissés';
            }
            if(empty($_POST['points'] == null)){
                $errors[] = 'veuillez saisir le nbre de points';    
            }
            if(!is_null($this->equipeManager->getByName($_POST['nom']))){
                $errors[] = 'Une équipe avec ce nom existe déjà';
            }
            if(count($errors) == 0){
                
                $extensionAllowed = ['image/jpeg', 'image/png'];
                if($_FILES['logo']['size'] != 0){
                    $image = $_FILES['logo'];
                    if($image['size'] > 10000){
                        $errors[] = 'fichier trop lourd !!';
                    }
                    if(!in_array($image['type'], $extensionAllowed )){
                        $errors[] = 'Mauvais format de fichier !!';
                    }
                    if($image['error']!=0){
                        $errors[] = 'Une erreure inconnue est survenue';
                    }
                    if(count($errors) == 0){
                        $imageFileName = uniqid().'.'.explode('/',$image['type'])[1];
                        move_uploaded_file($image['tmp_name'], 'public/logo/'. $imageFileName);
                    }
                }
                
            }
        }
        if(count($errors) == 0){
            $equipe = new Equipe($_POST['nom'], $_POST['butMis'], $_POST['butPris'],  $_POST['points'], $imageFileName );
            $this->equipeManager->add($equipe);
            header('location: index.php?controller=equipe&action=homepage');
        }
        require 'Vue/Equipe/add.php';
    }
}   