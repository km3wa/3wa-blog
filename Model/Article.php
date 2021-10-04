<?php



class Article{
    //private $id;
    private $title;
    private $content;
    private $createdAt;
    private $status;

    public function __construct(){
        $this->createdAt = new \DateTime('NOW');
    }
    
    // getters
    //function getId(){ return $this->id;}
    public function getTitle() : string{ return $this->title;}
    public function getContent() : string{ return $this->content;}
    public function getCreatedAt() : \DateTime{ return $this->createdAt;}
    public function getStatus() : string{ return $this->status;}
    
    // setters
    //function setId($id){ $this->id = $id;}
    public function setTitle(string $title) : void{ $this->title = $title;}
    public function setContent(string $content) : void{ $this->content = $content;}
    public function setCreatedAt(\DateTime $createdAt) : void{ $this->createdAt = $createdAt;}
    public function setStatus(string $status) : void{ $this->status = $status;}
};