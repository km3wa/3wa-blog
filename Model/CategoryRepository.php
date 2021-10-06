<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT . './Model/Factory/CategoryFactory.php');

class CategoryRepository
{
    private /*?PDO */$dbConnexion; // typage de props en 7.4+ only
    private $categoryFactory;

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnection();
        $this->dbConnexion = $mysqlDbConnexion->connect();
        $this->categoryFactory = new CategoryFactory();
    }

    public function findOne(int $id) : Category{
        $sql = "SELECT * FROM Category WHERE id=$id" ;
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $category = $stmt->fetch();

        $categoryEntity = $this->categoryFactory->makeCategoryFromDb($category);
        
        return $categoryEntity;
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM category";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();
        
        $categories = $this->categoryFactory->makeCategoryListFromDb($categoriesDb);

        return $categories;
    }

    public function findLasts(int $nbCategories) : array{
        $sql = "SELECT * FROM `category` ORDER BY `created_at` DESC LIMIT $nbCategories";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();

        $categories = $this->categoryFactory->makeCategoryListFromDb($categoriesDb);

        return $categories;
    }

    public function deleteCategory(int $id) : void{
        $sql = "DELETE FROM `category` WHERE `category`.`id` = $id";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
    }
}