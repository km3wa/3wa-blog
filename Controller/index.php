<?php  

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Factory/ArticleFactory.php');
require_once('../Model/EntityManager.php');

// instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();
$articles = $articleFactory->createArticles(6);

//var_dump($articles);

$article = $articleFactory->createArticle("test1", "test2");
$entityManager = new EntityManager();
$entityManager->persistArticle($article);

include_once("../View/homeView.php");