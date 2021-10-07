<?php

class User{
    private $username;
    private $email;
    private $pw;
    private $createdAt;
    private $tableName;

    public function __construct(){
        $this->createdAt = new \DateTime('NOW');
        $this->tableName = "users";
    }
    
    // getters
    public function getUsername() : string{ return $this->username;}
    public function getEmail() : string{ return $this->email;}
    public function getCreatedAt() : \DateTime{ return $this->createdAt;}
    public function getPassword() : string{ return $this->pw;}
    public function getTableName(): string{ return $this->tableName;}
    
    // setters
    public function setUsername(string $username){ $this->username = $username;}
    public function setEmail(string $email) : void{ $this->email = $email;}
    public function setCreatedAt(\DateTime $createdAt) : void{ $this->createdAt = $createdAt;}
    public function setPassword(string $pw) : void{ $this->pw = $pw;}
}