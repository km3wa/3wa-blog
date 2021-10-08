<?php
require_once('../../Config/config.php');
require_once(ROOT . './Model/Repository/CategoryRepository.php');

$categoryRepo = new CategoryRepository();
if (!empty($_GET['id'])){
    $category = $categoryRepo->findOne($_GET['id']);
}


//include_once(ROOT . "./View/Legacy/categoryView.php");

echo $twig->render('category.html.twig', [
    'category' => $category
]);
