<?php  

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Factory/ArticleFactory.php');
require_once('../Model/EntityManager.php');

$articles = [];

// instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();


for ($i = 1; $i<7; $i++){
    $a = $articleFactory->createArticle("Article ".$i." sur 6", "content_test");
    array_push($articles, $a);
};

foreach($articles as $article){
    echo("<h2>".$article->getTitle()."</h2>");
    echo("<div>".$article->getContent()."</div>");
};

//$entityManager = new EntityManager();
//$entityManager->persistArticle($article);