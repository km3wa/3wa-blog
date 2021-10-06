<?php
require_once('../Config/config.php');

require_once(ROOT . "/Model/Factory/ArticleFactory.php");
require_once(ROOT . "/View/createArticleView.php");
require_once(ROOT . "/Model/EntityManager.php");

if(!empty($_POST) && !empty($_POST["title"]) && !empty($_POST["content"])){
    $articleFactory = new ArticleFactory();
    $article = $articleFactory->createArticle($_POST["title"], $_POST["content"]);

    $entityManager = new EntityManager();
    $entityManager->persistArticle($article);
}


