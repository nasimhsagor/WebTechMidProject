<?php

class User {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $isLoggedIn;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = Config::get('sessions/session_name');
        $this->_cookieName = Config::get('remember/cookie_name');

        if(!$user) {
            if(Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);

                if($this->find($user)) {
                    $this->isLoggedIn = true;
                } else {
                    //Logout
                }
            }
        } else {
            $this->find($user);
        }
    }

    public function create($fields = array()) {
        if(!$this->_db->insert('users', $fields)) {
            throw new Exception('Sorry, there was a problem creating your account;');
        }
    }

    public function update($fields = array(), $id = 0) {

        if($id>0) {
            $id = $this->data()->id;
        }

        if(!$this->_db->update('users', $id, $fields)) {
            throw new Exception('There was a problem updating');
        }
    }

    public function find($user = null) {
        if($user) {
            $field = (is_numeric($user)) ? 'id' : 'username';
            $data = $this->_db->get('users', array($field, '=', $user,'isActive','=','1'));

            if($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login($username = null, $password = null, $remember = false) {
        if(!$username && !$password && $this->exists()) {
            Session::put($this->_sessionName, $this->data()->id);
        } else {
            $user = $this->find($username);

            if ($user) {


            /*    if ($this->data()->password === Hash::make($password, $this->data()->salt)) {    */


                if (password_verify($password,$this->data()->password)) {


                    Session::put($this->_sessionName, $this->data()->id);

                    //Session::put('photoUrl', $this->data()->photo); // Store Photo url

                    if ($remember) {
                        $hash = Hash::unique();
                        $hashCheck = $this->_db->get('users_session', array('user_id', '=', $this->data()->id));

                        if (!$hashCheck->count()) {
                            $this->_db->insert('users_session', array(
                                'user_id' => $this->data()->id,
                                'hash' => $hash
                            ));
                        } else {
                            $hash = $hashCheck->first()->hash;
                        }

                        Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                    }

                    return true;
                }
            }
        }
        return false;
    }

    public function hasPermission($key) {
        $userTypes = $this->_db->get('users_config', array('userId', '=', $this->data()->id));

        if($userTypes->count()) {
            $permissions = json_decode($userTypes->first()->permissions, true);

            return !empty($permissions[$key]);
        }

        return false;
    }

    public function hasPagePermission($pageName=null){
        $pageName = (empty($pageName)) ? basename($_SERVER['PHP_SELF']) : $pageName;
        if (!$this->hasPermission($pageName)) {Redirect::to('pages-access-refuse.php?p='.$pageName);}
    }

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout() {
        $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));

        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
    }

    public function data(){
        return $this->_data;
    }

    public function isLoggedIn() {
        if (!$this->isLoggedIn) {
            Redirect::to('login.php');
        }
    }

    public function isLoggedInPrev() {
        if ($this->isLoggedIn) {
            Redirect::to('index.php');
        }
    }
    
    
    
    public function isLoggedInPrevForController() {
        if ($this->isLoggedIn) {
            Redirect::to('../index.php');
        }
    }


    public function getAllUser(){
        $db = new DBController();
        return $db->read("SELECT `id`,`name` FROM `users`");
    }


}