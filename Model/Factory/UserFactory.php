<?php
require_once(ROOT . "./Model/User.php");

class UserFactory{



    public function createUser($username, $email, $pw) : User{
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($pw);
        $user->setPassword($pw);
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