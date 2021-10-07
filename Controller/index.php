<?php
require_once('../Config/config.php');

require_once(ROOT . './Model/Repository/ArticleRepository.php');
require_once(ROOT . './Model/Repository/CategoryRepository.php');

$articleRepo = new ArticleRepository();
$articles = $articleRepo->findLasts(3);

$categoryRepo = new CategoryRepository();
$categories = $categoryRepo->findLasts(3);

include_once("../View/homeView.php");