<?php
require_once('../Config/config.php');

require_once(ROOT . './Model/ArticleRepository.php');

if (!empty($_GET['id'])){
    $articleRepo = new ArticleRepository();
    $articleRepo->deleteArticle($_GET['id']);
};

include_once(ROOT . './View/deleteArticleView.php');