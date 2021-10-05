<?php

class MysqlDatabaseConnection{
    public function __construct() {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = '3wa_blog';
    }

    
    public function connect(){
        try{
            $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}