<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');

abstract class PublicationRepository
{
    protected $publicationType;
    private /*?PDO */$dbConnexion; // typage de props en 7.4+ only

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnection();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    public function findOne(int $id){
        $sql = "SELECT * FROM $this->publicationType WHERE id=$id" ;
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $publicationDb = $stmt->fetch();
    }

    // refacto en clean code
    public function findAll()
    {
        $sql = "SELECT * FROM `$this->publicationType`";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $publicationsDb = $stmt->fetchAll();
    }

    public function findLasts(int $nbPublications){
        $sql = "SELECT * FROM `$this->publicationType` ORDER BY `created_at` DESC LIMIT $nbPublications";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $publicationsDb = $stmt->fetchAll();
    }

    public function deletePublication(int $id) : void{
        $sql = "DELETE FROM `$this->publicationType` WHERE `$this->publicationType`.`id` = $id";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
    }
}
