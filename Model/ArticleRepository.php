<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT . './Model/Article.php');

class ArticleRepository
{
    private /*?PDO */$dbConnexion; // typage de props en 7.4+ only

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnection();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    public function findOne($id) : Article{
        $sql = "SELECT * FROM article WHERE id=$id" ;
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $article = $stmt->fetch();

        $articleEntity = new Article();
        $articleEntity->setTitle($article['title']);
        $articleEntity->setStatus($article['status']);
        $articleEntity->setContent($article['content']);
        $articleEntity->setCreatedAt(new \DateTime($article['created_at']));  
        
        return $articleEntity;
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM article";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articles = [];

        foreach ($articlesDb as $article) {
            $articleEntity = new Article();
            $articleEntity->setId($article['id']);
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }

        return $articles;
    }

    public function findLasts(int $nbArticles) : array{
        $sql = "SELECT * FROM `article` ORDER BY `created_at` DESC LIMIT $nbArticles";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articles = [];
        
        foreach ($articlesDb as $article) {
            $articleEntity = new Article();
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }
        
        /* VERSION SANS REQUETE LIMIT
        for ($i = 0; $i<$nbArticles; $i++) {
            $articleEntity = new Article();
            $articleEntity->setTitle($articlesDb[$i]['title']);
            $articleEntity->setStatus($articlesDb[$i]['status']);
            $articleEntity->setContent($articlesDb[$i]['content']);
            $articleEntity->setCreatedAt(new \DateTime($articlesDb[$i]['created_at']));
            array_push($articles, $articleEntity);
        }*/

        return $articles;
    }

    public function deleteArticle(int $id) : void{
        $sql = "DELETE FROM `article` WHERE `article`.`id` = $id";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
    }
}
