<?php
require_once(ROOT . "./Model/Category.php");

class CategoryFactory{
    
    public function makeCategoryFromDb(array $categoryDb) : Category{
        $categoryEntity = new category();
        $categoryEntity->setId($categoryDb['id']);
        $categoryEntity->setTitle($categoryDb['title']);
        $categoryEntity->setStatus($categoryDb['status']);
        $categoryEntity->setColor($categoryDb['color']);
        $categoryEntity->setCreatedAt(new \DateTime($categoryDb['created_at']));
        return $categoryEntity;
    }

    public function makeCategoryListFromDb(array $categoriesDb) : array{
        $categories = [];
        foreach($categoriesDb as $categoryDb){
            array_push($categories, $this->makeCategoryFromDb($categoryDb));
        }
        return $categories;
    }

    public function createCategory($title, $color) : category{
        $category = new category();
        $category->setTitle($title);
        $category->setColor($color);
        return $category;
    }

    /*public function createcategories($nb) : array{
        $categories = [];
        for ($i = 1; $i<=$nb; $i++){
            $a = $this->createcategory("category ".$i." sur ".$nb, "content_test");
            array_push($categories, $a);
        };
        return $categories;
    }*/
}