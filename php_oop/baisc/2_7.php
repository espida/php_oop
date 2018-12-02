<?php

class User
{
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }
}

$password = 'Mohsen55';
if (User::validatePass($password)) {
    echo 'Password valid, your password length = ' . strlen($password);
} else {
    echo 'Password NOT valid, your password length = ' . strlen($password);
}