<?php
trait PasswordHash{
    public function pwHash($pw){
        $options = [
            'cost' => 12,
        ];
        return password_hash($pw,PASSWORD_BCRYPT,$options);
    }
}