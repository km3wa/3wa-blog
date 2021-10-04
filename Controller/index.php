<?php  

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Factory/ArticleFactory.php');
require_once('../Model/EntityManager.php');

// instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();
$article = $articleFactory->createArticle("test", "content_test");

$entityManager = new EntityManager();
$entityManager->persistArticle($article);