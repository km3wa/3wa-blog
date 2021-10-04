<?php  

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('Model/Article.php');
require_once('Model/EntityManager.php');

// instanciation d'une classe Article
$article = new Article;
// appel de setters pour définir la valeur des propriétés id, title, content, createdAt
//$article->setId('0');
$article->setTitle("php avancé");
$article->setContent("voici une leçon de php avancé");
//$article->setCreatedAt(new \DateTime('NOW'));
$article->setStatus("draft");

var_dump($article);

$entityManager = new EntityManager();
$entityManager->persistArticle($article);