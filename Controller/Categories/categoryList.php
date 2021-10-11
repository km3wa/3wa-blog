<?php
require_once('../../Config/config.php');

require_once(ROOT . './Model/Repository/CategoryRepository.php');

$categoryRepo = new CategoryRepository();
$categories = $categoryRepo->findAll();

//include_once("../View/Legacy/categoryListView.php");

echo $twig->render('categoryList.html.twig', [
    'categories' => $categories,
]);