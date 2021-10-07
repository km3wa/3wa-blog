<?php
require_once(ROOT . './Model/Entity/Publication.php');


class Article extends Publication{
    private $content;

    /* PAS NECESSAIRE, JE LAISSE LA POUR ME RAPPELER COMMENT ON FAIT
    public function __construct(){
        parent::__construct();
    }*/

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "category";
    }
    
    // getters
    public function getContent() : string{ return $this->content;}
    
    // setters
    public function setContent(string $content) : void{ $this->content = $content;}
};