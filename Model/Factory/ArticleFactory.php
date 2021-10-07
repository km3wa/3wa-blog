<?php
require_once(ROOT . "./Model/Entity/Article.php");

class ArticleFactory{
    
    public function makeArticleFromDb(array $articleDb) : Article{
        $articleEntity = new Article();
        $articleEntity->setId($articleDb['id']);
        $articleEntity->setTitle($articleDb['title']);
        $articleEntity->setStatus($articleDb['status']);
        $articleEntity->setContent($articleDb['content']);
        $articleEntity->setCreatedAt(new \DateTime($articleDb['created_at']));
        $articleEntity->setTableName("article");
        return $articleEntity;
    }

    public function makeArticleListFromDb(array $articlesDb) : array{
        $articles = [];
        foreach($articlesDb as $articleDb){
            array_push($articles, $this->makeArticleFromDb($articleDb));
        }
        return $articles;
    }

    public function createArticle($title, $content) : Article{
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
        return $article;
    }

    /*public function createArticles($nb) : array{
        $articles = [];
        for ($i = 1; $i<=$nb; $i++){
            $a = $this->createArticle("Article ".$i." sur ".$nb, "content_test");
            array_push($articles, $a);
        };
        return $articles;
    }*/
}