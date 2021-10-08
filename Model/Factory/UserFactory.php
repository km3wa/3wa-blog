<?php
require_once(ROOT . "./Model/Entity/User.php");

class UserFactory{

    private $passwordHasher;

    public function __construct(PasswordHasherInterface $pwHasher){
        $this->passwordHasher = $pwHasher;
    }

    public function createUser($username, $email, $pw) : User{
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($this->passwordHasher->pwHash($pw));
        return $user;
    }

    /*public function createcategories($nb) : array{
        $categories = [];
        for ($i = 1; $i<=$nb; $i++){
            $a = $this->createuser("user ".$i." sur ".$nb, "content_test");
            array_push($categories, $a);
        };
        return $categories;
    }*/
}