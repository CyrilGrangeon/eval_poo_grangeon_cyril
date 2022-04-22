<?php

class Equipe{
    private $id;
    private $nom;
    private $butMis;
    private $butPris;
    private $points;
    private $image;


    public function __construct($nom, $butMis,$butPris, $image = null, $points, $id = null){
        $this->id = $id;
        $this->nom = $nom;
        $this->butMis = $butMis;
        $this->butPris = $butPris;
        $this->points = $points;
        $this->image = $image;


    }

	public function getId(){
        return $this->id;
    }

    public function setId($id):void {
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom):void {
        $this->nom = $nom;
    }

    public function getButMis(){
        return $this->butMis;
    }

    public function setButMis($butMis):void {
        $this->butMis = $butMis;
    }

    public function getButPris(){
        return $this->butPris;
    }

    public function setButPris($butPris):void {
        $this->butPris = $butPris;
    }

    public function getPoints(){
        return $this->points;
    }

    public function setPoints($points):void {
        $this->points = $points;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image):void {
        $this->image = $image;
    }


    
}