<?php

class Utilisateur{
    private $id;
    private $username;
    private $password;

    public function __construct($username, $password, $id = null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id):void {
        $this->id = $id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username):void {
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password):void {
        $this->password = $password;
    }
    
}