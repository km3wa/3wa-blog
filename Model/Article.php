<?php
require_once(ROOT . './Model/Publishable.php');



class Article extends Publishable{
    private $content;


    public function __construct(){
        parent::__construct();
    }
    
    // getters
    public function getContent() : string{ return $this->content;}
    
    // setters
    public function setContent(string $content) : void{ $this->content = $content;}
};