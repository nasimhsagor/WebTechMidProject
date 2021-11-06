<?php
	
		include '../init.php';
	
	if (Input::exists()) {
        
		$validate = new Validate();
		$validate->check($_POST, array(
		'username' => array(
		'required' => true,
		
		),
		'password' => array(
		'required' => true,
		
		
		),

		));
		
    	
		
		if ($validate->passed()) {
		
		
		if(file_exists('users-data.json'))
			{
                $current_data = file_get_contents('users-data.json');
                $users = json_decode($current_data, true);
				
				$isLogin = false;
				
				
				foreach($users as $user){
				
					if($user['username']==Input::get('username') && $user['password']==Input::get('password'))
					{
						$isLogin  =true;
						
						Session::put('username', $user['username']);
						
						
				
						setcookie('flag', 'true', time()+3600, '/');
						Session::addSuccess("Logged in Successfully");
						Redirect::to('../view/Dashboard.php');
					}
					
				}
				
				
					Session::addError("Username or Password wrong");
					Redirect::back();
				
				
				
				
				
				
				
				
				
				
				
                
			}
			else
			{
                $error = "<label class='text-danger'>JSON File does not exist</label>";
			}
	
	
	
	
		}else{
			Redirect::back();
		}
	
		Redirect::back();
	}
	
	
	
	
?>