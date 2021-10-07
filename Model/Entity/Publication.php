<?php


abstract class Publication{
    public const STATUS_DRAFT = "draft";
    public const STATUS_ARCHIVED = "archived";
    public const STATUS_PUBLISHED = "published";

    private $id;
    private $title;
    private $createdAt;
    private $status;

    public function __construct(){
        $this->createdAt = new \DateTime('NOW');
        $this->status = self::STATUS_DRAFT;
    }
    
    // getters
    public function getId() : ?int{ return $this->id;}
    public function getTitle() : string{ return $this->title;}
    public function getCreatedAt() : \DateTime{ return $this->createdAt;}
    public function getStatus() : string{ return $this->status;}
    
    // setters
    public function setId(int $id){ $this->id = $id;}
    public function setTitle(string $title) : void{ $this->title = $title;}
    public function setCreatedAt(\DateTime $createdAt) : void{ $this->createdAt = $createdAt;}
    public function setStatus(string $status) : void{ $this->status = $status;}
};