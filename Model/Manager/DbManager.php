<?php
abstract class DbManager {
    protected $bdd;

    private $host = 'localhost';
    private $db = 'evalpoo';
    private $username = 'root';
    private $password = '';

    public function __construct(){
        $this->bdd = new PDO("mysql:dbname=".$this->db.";host=".$this->host, $this->username, $this->password);
        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>
