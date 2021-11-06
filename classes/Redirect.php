<?php


/**
 * [Description Redirect]
 */
class Redirect {
    /**
     * to
     *
     * @param null $location
     * 
     * @return [location]
     */
    public static function to($location = null) {
        
        $location = (empty($location)) ? basename($_SERVER['PHP_SELF']) : $location;
        
        
        if($location) {
            if(is_numeric($location)) {
                switch($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'includes/errors/404.php';
                        break;
                }
            }
            header('Location: '. $location);
            exit();
        }
    }
    
    
    
    public static function back($location = null) {
        
        $location = (empty($location)) ? $_SERVER['HTTP_REFERER'] : $location;
        
        if($location) {
            if(is_numeric($location)) {
                switch($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'includes/errors/404.php';
                        break;
                }
            }
            
            $location = substr($location,0,strlen($location)-strpos($location,'.php?')+9);
            
            header('Location: '. $location);
            exit();
        }
    }
    
    
    
    
    
    
    
    
    
    
    
}