<?php


class Validate {
    private $_passed = false;
    private $_errors = 0;
    //private $_success = array();
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            foreach($rules as $rule => $rule_value) {
                $value = $source[$item];
                //$item = escape($item);

                if($rule === 'required' && empty($value) && $rule_value) {
                    Session::addError("{$item} is required");
                    $this->_errors++;
                } else if (!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                Session::addError("{$item} must be a minimum of {$rule_value} characters.");
                                $this->_errors++;
                            }
                            break;

                        case 'max':
                            if(strlen($value) > $rule_value) {
                                Session::addError("{$item} must be a maximum of {$rule_value} characters.");
                                $this->_errors++;
                            }
                            break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                Session::addError("{$rule_value} must match {$item}.");
                                $this->_errors++;
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if($check->count()) {
                                Session::addError("{$item} already exists.");
                                $this->_errors++;
                            }
                            break;
                    }
                }
            }
        }

        if($this->_errors==0) {
            $this->_passed = true;
           // Session::$isPassed = true;
        }
    }


    /*

    public function addError($error) {
        $this->_passed = false;
        $error = $this->removeSpecialChar($error);
        
        $error = '<div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> '.$error.' <div></div>
        </div>';

        $this->_errors[] = $error; 
    }



    public function addSuccess($successMsg) {
        $this->_passed = true;
        $successMsg = $this->removeSpecialChar($successMsg);
        
        $successMsg = '<div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> '.$successMsg.' <div></div>
        </div>';

        $this->_success[] = $successMsg; 
    }



public function displayAlert()
{
   if(!$this->passed()) {
        foreach($this->_errors as $error) {
            echo $error;
        }
    }else{
        foreach($this->_success as $success) {
            echo $success;
        }
    } 
}
    
                                                    


    /**************************
    * fun removeSpecialChar()
    * for remove special character from error message
    * and converts the first character of a error to uppercase
    **************************


    private function removeSpecialChar($str) { 
        $res = str_replace( array('_', '\'', '"', 
        ',' , ';', '<', '>' ), ' ', $str); 
        return ucfirst($res); 
    } 

    public function errors() {
        return $this->_errors;
    }

    */

    public function passed() {
        //return Session::$isPassed;
        //return true;
        return $this->_passed;
    }
}
