<?php
require_once('../Config/config.php');
require_once(ROOT . './Model/ArticleRepository.php');

$articleRepo = new ArticleRepository();
if (!empty($_GET['id'])){
    $article = $articleRepo->findOne($_GET['id']);
}
/* je trouve comment faire + tard
else {
    $articles = $articleRepo->findAll();
}*/
else throw new Exception("-- liens articles coming soon --", 1);


include_once(ROOT . "./View/articleView.php");
