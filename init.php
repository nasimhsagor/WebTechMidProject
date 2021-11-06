<?php session_start();


	$GLOBALS['config'] = array(
		'mysql' => array(
			'host'      => 'localhost',
			'username'  => 'root',  			         
			'password'  => '', 					        
			'db'        => '',    
		),
	
		'remember' => array(
			'cookie_name'   => 'hash',
			'cookie_expiry' => 604800
		),
	
		'sessions' => array(
			'session_name' => 'user',
			'token_name'   => 'token'
		)
    );
    
	spl_autoload_register(function($className){
        $possiblePaths = array();
        $path = strtolower($className) . ".php";
        $patLegal = $className . ".php";
		
        
        
        $possiblePaths[] = 'classes/'.$path;
        $possiblePaths[] = 'classes/'.$patLegal;
        
        foreach($possiblePaths as $path){
            $path = __DIR__ . '/'.$path;;
            if (file_exists($path)) {
                require_once $path;
                break;
			}
		}
	});
	

