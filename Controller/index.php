<?php
require_once('../Config/config.php');

require_once(ROOT . './Factory/ArticleFactory.php');
require_once(ROOT . './Model/EntityManager.php');

// instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();
$articles = $articleFactory->createArticles(6);

//var_dump($articles);

$article = $articleFactory->createArticle("test1", "test2");
$entityManager = new EntityManager();
$entityManager->persistArticle($article);

include_once("../View/homeView.php");