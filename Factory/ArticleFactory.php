<?php
require_once("../Model/Article.php");

class ArticleFactory{
    public function createArticle($title, $content) : Article{
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
        return $article;
    }

    public function createArticles($nb) : array{
        $articles = [];
        for ($i = 1; $i<=$nb; $i++){
            $a = $this->createArticle("Article ".$i." sur 6", "content_test");
            array_push($articles, $a);
        };
        return $articles;
    }
}