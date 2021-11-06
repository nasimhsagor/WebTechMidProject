<?php
/**
 * 
 */

class Token {
    public static function generate() {
        return Session::put(Config::get('sessions/token_name'), md5(uniqid()));
    }


    public static function csrf() {

        $token = Session::put(Config::get('sessions/token_name'), md5(uniqid()));
        $htToken = htmlentities($token, ENT_QUOTES, 'UTF-8');
        echo '<input type="hidden" name="token" id="token" value="'.$htToken.'">';
        
    }

    public static function check($token) {
        $tokenName = Config::get('sessions/token_name');

        if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }

        return false;
    }
}