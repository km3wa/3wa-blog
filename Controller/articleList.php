<?php  
require_once('../Config/config.php');

require_once(ROOT . './Model/ArticleRepository.php');

/* LEGACY STUFF
require_once(ROOT . './Factory/ArticleFactory.php');
require_once(ROOT . './Model/EntityManager.php');

instanciation d'une classe ArticleFactory
$articleFactory = new ArticleFactory();
$articles = $articleFactory->createArticles(15);

var_dump($articles);

$entityManager = new EntityManager();
$entityManager->persistArticle($article);
*/

$articleRepo = new ArticleRepository();
$articles = $articleRepo->findAll();

include_once("../View/articleListView.php");