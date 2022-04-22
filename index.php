<?php
require 'autoload.php';

if(empty($_GET['controller']) || empty($_GET['action'])){
    header('location: index.php?controller=equipe&action=homepage');
}
if($_GET['controller'] == 'security'){
    $controller = new SecurityController;
    if($_GET['action'] == 'login'){
        $controller->login();
    }
    if($_GET['action'] == 'logout'){
        $controller->logout();
    }
}

if($_GET['controller'] == 'equipe'){
    $controller = new EquipeController;
    if($_GET['action'] == 'homepage'){
        $controller->homepage();
    }
    if($_GET['action'] == 'add'){
        $controller->add();
    }
}