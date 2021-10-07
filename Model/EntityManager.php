<?php

require_once(ROOT . "./Model/Article.php");
require_once(ROOT . "./Model/Database/MysqlDatabaseConnection.php");
require_once(ROOT . "./Model/PasswordHash.php");

class EntityManager
{
    use PasswordHash;

    private $db;
    private $dbConnexion;

    // constructeur de la classe EntityManager
    //
    public function __construct() {
        $this->db = new MysqlDatabaseConnection();
        $this->dbConnexion = $this->db->connect();
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

    public function persistCategory(Category $category)
    {
        // je créé une requête SQL qui insert dans la table article
        // un nouvel article en utilisant les parametres PDO
        // pour que PDO supprime les potentiels balises PHP, SQL etc
        // afin d'éviter les attaques par injections SQL
        $sql = "INSERT INTO category (title, color, status, created_at)
                VALUES (
                        :title, 
                        :color, 
                        :status,
                        :created_at
                )
        ";

        // je préparer ma requête SQL définies avec les parametres
        $req = $this->dbConnexion->prepare($sql);

        // j'execute ma requête SQL en définissant la valeur des parametres
        //
        $req->execute(array(
            "title" => $category->getTitle(),
            "color" => $category->getColor(),
            "status" => $category->getStatus(),
            "created_at" => $category->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

    public function persistUser(User $user)
    {
        // je créé une requête SQL qui insert dans la table article
        // un nouvel article en utilisant les parametres PDO
        // pour que PDO supprime les potentiels balises PHP, SQL etc
        // afin d'éviter les attaques par injections SQL
        $sql = "INSERT INTO users (username, email, pw, created_at)
                VALUES (
                        :username, 
                        :email, 
                        :pw,
                        :created_at
                )
        ";

        // je préparer ma requête SQL définies avec les parametres
        $req = $this->dbConnexion->prepare($sql);
        
        // j'execute ma requête SQL en définissant la valeur des parametres
        //
        $req->execute(array(
            "username" => $user->getUsername(),
            "email" => $user->getEmail(),
            "pw" => $this->pwHash($user->getPassword()),
            "created_at" => $user->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

}
