<?php
require_once("../Model/Article.php");

class ArticleFactory{
    public function createArticle($title, $content) : Article{
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
        return $article;
    }
}