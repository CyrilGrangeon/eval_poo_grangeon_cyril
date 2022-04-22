<?php



class SecurityController{
    private $utilisateurManager;

    public function __construct(){
        $this->utilisateurManager = new UtilisateurManager;
    }

    public function login(){
        $errors = [];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['username'])){
                $errors[] = 'Veullez saisir un username';
            }if(empty($_POST['password'])){
                $errors[] = 'Veullez saisir un mot de passe';
            }
            if(count($errors) == 0){
                $resultat = $this->utilisateurManager->login($_POST['username'], $_POST['password']);
                if(!is_null($resultat)){
                    $_SESSION['user'] = serialize($resultat);
                    header('location: index.php?controller=equipe&action=homepage');
                }else{
                    $errors[] = 'Les identifiants sont incorrectes !!';
                }
            }
           
        }
        require 'Vue/login.php';
    }
    public function  logout(){
        session_destroy();
        header('location: index.php?controller=security&action=login');
    }

    public function register(){
        $errors = [];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(!is_null($this->userManager->getByUsername($_POST["username"]))){
                $errors[]  = "Un compte avec ce nom d'utilisateur existe déjà";
            }

            
            if($_POST["password_1"] != $_POST["password_confirm"]){
                $errors[] = "Les mots de passe ne sont pas identiques";
            }

            
            if(empty($_POST["lastname"])){
                $errors[] = 'Veuillez saisir votre prénom';
            }

            
            if(empty($_POST["firstname"])){
                $errors[] = 'Veuillez saisir votre nom de famille';
            }

            
            if(count($errors) == 0){
                $hash = password_hash($_POST["password_1"], PASSWORD_DEFAULT);
                $user = new Utilisateur(null, $_POST["username"], $hash, $_POST["firstname"], $_POST["lastname"]);

                $this->userManager->add($user);

                header("Location: index.php?controller=security&action=login");
            }
        }
        require 'Vue/security/register.php';
    }

}