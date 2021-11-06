<?php
	//session_start();
	include '../init.php';
	
	if (Input::exists()) {
        
		$validate = new Validate();
		$validate->check($_POST, array(
		'username' => array(
		'required' => true,
		'min' => 3,
		'max' => 50,
		),
		'password' => array(
		'required' => true,
		'min' => 6,
		
		),
		'email' => array(
		'required' => true,
		
		),
		'gender' => array(
		'required' => true,
		
		),
		
		
		'dob' => array(
		'required' => true,
		
		),
		
		
		'mobile' => array(
		'required' => true,
		'min' => 11,
		'max' => 14,
		),
		
		'Confirm_password' => array(
		'required' => true,
		'min' => 6,
		'matches' => 'password'
		),
		
		
		
		
		
		));
		
    	
		
		if ($validate->passed()) {
			
			$_SESSION['user'] = $user;
			
			
			if(file_exists('users-data.json'))
			{
                $current_data = file_get_contents('users-data.json');
                $array_data = json_decode($current_data, true);
                $extra = array(
				'username'               =>     $_POST['username'],
				'password'               =>     $_POST['password'],
				'email'          =>     $_POST['email'],
				'gender'     =>     $_POST['gender'],
				
				'mobile'     =>    $_POST['mobile'],
				'type'     =>     $_POST['type'],
				'dob'     =>     $_POST["dob"]
                );
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);
                if(file_put_contents('users-data.json', $final_data))
                {
					$message = "<label class='text-success'> <b> user registration successfull...Please log in</b></label>";
				}
			}
			else
			{
                $error = "<label class='text-danger'>JSON File does not exist</label>";
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            header('location: ../view/Login.php');
			
			
			
			
			
			
			
			}else{
			Redirect::back();
		}
	}
	
	
	
	
	
?>