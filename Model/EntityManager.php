<?php

require_once("Article.php");
require_once("Database/MysqlDatabaseConnection.php");


class EntityManager
{

    private $db;

    // constructeur de la classe EntityManager
    //
    public function __construct() {
        $db = new MysqlDatabaseConnection();
        $dbConnexion = $db->connect();
    }

    public function persistArticle(Article $article)
    {
        // je créé une requête SQL qui insert dans la table article
        // un nouvel article en utilisant les parametres PDO
        // pour que PDO supprime les potentiels balises PHP, SQL etc
        // afin d'éviter les attaques par injections SQL
        $sql = "INSERT INTO article (title, content, status, created_at)
                VALUES (
                        :title, 
                        :content, 
                        :status,
                        :created_at
                )
        ";

        // je préparer ma requête SQL définies avec les parametres
        $req = $this->dbConnexion->prepare($sql);

        // j'execute ma requête SQL en définissant la valeur des parametres
        //
        $req->execute(array(
            "title" => $article->getTitle(),
            "content" => $article->getContent(),
            "status" => $article->getStatus(),
            "created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

}
