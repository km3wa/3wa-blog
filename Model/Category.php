<?php
require_once(ROOT . './Model/Publishable.php');



class Category extends Publishable{
    private $color;


    public function __construct(){
        parent::__construct();
    }
    
    // getters
    public function getColor() : string{ return $this->color;}
    
    // setters
    public function setColor(string $color) : void{ $this->color = $color;}
};