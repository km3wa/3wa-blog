<?php



class Article{
    private $id;
    private $title;
    private $content;
    private $createdAt;
    private $status;
    
    // getters
    function getId(){ return $this->id;}
    function getTitle(){ return $this->title;}
    function getContent(){ return $this->content;}
    function getCreatedAt(){ return $this->createdAt;}
    function getStatus(){ return $this->status;}
    
    // setters
    function setId($id){ $this->id = $id;}
    function setTitle($title){ $this->title = $title;}
    function setContent($content){ $this->content = $content;}
    function setCreatedAt($createdAt){ $this->createdAt = $createdAt;}
    function setStatus($status){ $this->status = $status;}
};