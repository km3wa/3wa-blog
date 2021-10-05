<?php
include_once(ROOT . './Model/Database/DatabaseConnectionInterface.php');

class MysqlDatabaseConnection implements DatabaseConnectionInterface{
    private $host;
    private $username;
    private $password;
    private $db;

    public function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db = '3wa_blog';
    }

    
    public function connect() : ?PDO{
        try{
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}