<?php
trait PasswordCheck{
    public function pwCheck($pw, $hash){
        if(password_verify($pw, $hash)){
            return true;
        }
        else return false;
    }
}