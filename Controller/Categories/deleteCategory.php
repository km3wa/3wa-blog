<?php
require_once('../../Config/config.php');

require_once(ROOT . './Model/Repository/CategoryRepository.php');

if (!empty($_GET['id'])){
    $categoryRepo = new CategoryRepository();
    $categoryRepo->deleteCategory($categoryRepo->findOne($_GET['id']));
};

//include_once(ROOT . './View/Legacy/deleteCategoryView.php');

echo $twig->render('deleteCategory.html.twig');