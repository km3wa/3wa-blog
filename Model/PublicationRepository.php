<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');

abstract class PublicationRepository
{
    protected $fromDb;
    private /*?PDO */$dbConnexion; // typage de props en 7.4+ only

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnection();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    public function fetchOne(int $id, string $type){
        $sql = "SELECT * FROM $type WHERE id=$id" ;
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    // refacto en clean code
    public function fetchAll(string $type)
    {
        $sql = "SELECT * FROM `$type`";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function fetchLasts(int $nbPublications, string $type){
        $sql = "SELECT * FROM `$type` ORDER BY `created_at` DESC LIMIT $nbPublications";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deletePublication(int $id, string $type) : void{
        $sql = "DELETE FROM `$type` WHERE `$type`.`id` = $id";
        
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
    }
}
