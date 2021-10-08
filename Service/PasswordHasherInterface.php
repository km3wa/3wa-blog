<?php
interface PasswordHasherInterface{
    public function pwHash(string $pw) : string;
}