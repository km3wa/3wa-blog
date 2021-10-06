<?php  
require_once('../Config/config.php');

require_once(ROOT . './Model/CategoryRepository.php');

$categoryRepo = new CategoryRepository();
$categories = $categoryRepo->findAll();

include_once("../View/categoryListView.php");