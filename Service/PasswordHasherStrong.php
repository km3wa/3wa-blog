<?php
require_once(ROOT . './Service/PasswordHasherInterface.php');

class PasswordHasherStrong implements PasswordHasherInterface{
    public function pwHash(string $pw) : string{
        $options = [
            'cost' => 15,
        ];
        return password_hash($pw,PASSWORD_BCRYPT,$options);
    }
}