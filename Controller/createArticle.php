<?php
require_once('../Factory/ArticleFactory.php');
require_once('../View/createArticleView.php');
require_once('../Model/EntityManager.php');

if(($_POST) && ($_POST["title"]!=null) && ($_POST["content"]!=null)){
    $articleFactory = new ArticleFactory();
    $article = $articleFactory->createArticle($_POST["title"], $_POST["content"]);

    $entityManager = new EntityManager();
    $entityManager->persistArticle($article);
}


