<?php
require_once(ROOT . './Model/Entity/Publication.php');



class Category extends Publication{
    private $color;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "category";
    }
    
    // getters
    public function getColor() : string{ return $this->color;}
    
    // setters
    public function setColor(string $color) : void{ $this->color = $color;}
};