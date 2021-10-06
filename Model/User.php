<?php

class User{
    private $username;
    private $email;
    private $pw;
    private $createdAt;

    public function __construct(){
        $this->createdAt = new \DateTime('NOW');
    }
    
    // getters
    public function getUsername() : string{ return $this->username;}
    public function getEmail() : string{ return $this->email;}
    public function getCreatedAt() : \DateTime{ return $this->createdAt;}
    public function getPassword() : string{ return $this->pw;}
    
    // setters
    public function setUsername(string $username){ $this->username = $username;}
    public function setEmail(string $email) : void{ $this->email = $email;}
    public function setCreatedAt(\DateTime $createdAt) : void{ $this->createdAt = $createdAt;}
    
    public function setPassword(string $pw) : void{
        $options = [
            'cost' => 12,
        ];
        $this->pw = password_hash($pw,PASSWORD_BCRYPT,$options);
    }
}