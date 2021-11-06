<?php

class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }

    public static function makePassword($string) {
    	return password_hash($string, PASSWORD_BCRYPT,['cost' => 8,]);
        //return hash('sha256', $string . $salt);
    }

    public static function salt($length) {
        return random_bytes($length);
    }

    public static function unique() {
        return self::make(uniqid());
    }
}