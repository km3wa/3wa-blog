<?php
require_once(ROOT . "./Model/Article.php");

class ArticleFactory{
    
    public function makeArticleFromDb(array $article) : Article{
        $articleEntity = new Article();
        $articleEntity->setId($article['id']);
        $articleEntity->setTitle($article['title']);
        $articleEntity->setStatus($article['status']);
        $articleEntity->setContent($article['content']);
        $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
        return $articleEntity;
    }

    /* --- LEGACY ---
    public function createArticle($title, $content) : Article{
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
        return $article;
    }

    public function createArticles($nb) : array{
        $articles = [];
        for ($i = 1; $i<=$nb; $i++){
            $a = $this->createArticle("Article ".$i." sur ".$nb, "content_test");
            array_push($articles, $a);
        };
        return $articles;
    }*/
}