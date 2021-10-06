<?php
require_once('../Config/config.php');

require_once(ROOT . "/Model/Factory/CategoryFactory.php");
require_once(ROOT . "/View/createCategoryView.php");
require_once(ROOT . "/Model/EntityManager.php");

if(!empty($_POST) && !empty($_POST["title"]) && !empty($_POST["color"])){
    $categoryFactory = new CategoryFactory();
    $category = $categoryFactory->createCategory($_POST["title"], $_POST["color"]);

    $entityManager = new EntityManager();
    $entityManager->persistCategory($category);
}


