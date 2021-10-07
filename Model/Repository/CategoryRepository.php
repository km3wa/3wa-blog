<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT . './Model/Factory/CategoryFactory.php');
require_once(ROOT . './Model/Repository/PublicationRepository.php');

class CategoryRepository extends PublicationRepository
{
    private $categoryFactory;

    public function __construct(){
        parent::__construct();
        $this->publicationType = "category";
        $this->categoryFactory = new CategoryFactory;
    }

    public function findOne(int $id) : Category{
        $categoryDb = parent::fetchOne($id, $this->publicationType);
        return $this->categoryFactory->makeCategoryFromDb($categoryDb);
    }

    // refacto en clean code
    public function findAll(): array
    {
        $categoriesDb = parent::fetchAll($this->publicationType);        
        return $this->categoryFactory->makeCategoryListFromDb($categoriesDb);
    }

    public function findLasts(int $nbCategories) : array{
        $categoriesDb = parent::fetchLasts($nbCategories, $this->publicationType);
        return $this->categoryFactory->makeCategoryListFromDb($categoriesDb);
    }

    public function deleteCategory (int $id){
        parent::deletePublication($id, $this->publicationType);
    }
}