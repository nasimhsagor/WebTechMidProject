<?php


class Session {
    //public static $isPassed = false;

    public static function exists($name) {
        return (isset($_SESSION[$name])) ? true : false;
    }


    public static function addError($msg){
        self::putAlertMsg('error', $msg);
    }

    public static function addSuccess($msg){
        self::putAlertMsg('success', $msg);
    }

    private static function removeSpecialChar($str) { 
        $res = str_replace( array('_', '\'', '"', 
        ',' , ';', '<', '>' ), ' ', $str); 
        return ucfirst($res); 
    } 


    public static function putAlertMsg($msgType, $msg) {
        
        if(!isset($_SESSION['msgStorage'])){
            
            
            if(!is_array($_SESSION['msgStorage'])){
                $_SESSION['msgStorage']  = array();
            }

        }
        //$msgTypeText = $msgType=='error' ? 'danger' : $msgType;


        if ($msgType=='error') {
            $msgTypeText = 'danger';
            //self::$isPassed = false;
            //$_SESSION['hasError'] = true;
            //$_SESSION['isPassed'] = false;
        }
        else if($msgType=='success'){
            $msgTypeText = $msgType;
            //self::$isPassed = true;
            //$_SESSION['hasError'] = false;
            //$_SESSION['isPassed'] = true;
        }


        $msgText =  '<div class="alert alert-'.$msgTypeText.' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'.Session::removeSpecialChar($msgType).'!</strong> '.Session::removeSpecialChar($msg).'.
                    </div>';

        array_push($_SESSION['msgStorage'],$msgText);


    }



    public static function displayAlertMsg () {
        if(self::exists('msgStorage')) {
            $messages = self::get('msgStorage');
            //self::delete('msgStorage');
            $_SESSION['msgStorage']  = array();
            foreach ($messages as $message) {
               echo $message;
            }
        } else {
            //self::put($name, $string);
        }
    }





    public static function put($name, $value) {
        return $_SESSION[$name] = $value;
    }

    public static function get($name) {
        return $_SESSION[$name];
    }

    public static function delete($name) {
        if(self::exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    public static function flash ($name, $string = 'null') {
        if(self::exists($name)) {
            $session = self::get($name);
            self::delete($name);
                return $session;
        } else {
            self::put($name, $string);
        }
    }
}