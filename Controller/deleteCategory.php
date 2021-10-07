<?php
require_once('../Config/config.php');

require_once(ROOT . './Model/Repository/CategoryRepository.php');

if (!empty($_GET['id'])){
    $categoryRepo = new CategoryRepository();
    $categoryRepo->deleteCategory($_GET['id']);
};

include_once(ROOT . './View/deleteCategoryView.php');