<?php  

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Factory/ArticleFactory.php');
require_once('../Model/EntityManager.php');

// instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();
//$articles = $articleFactory->createArticles(6);

foreach($articles as $article){
    echo("<h2>".$article->getTitle()."</h2>");
    echo("<div>".$article->getContent()."</div>");
};

var_dump($articles);

//$entityManager = new EntityManager();
//$entityManager->persistArticle($article);