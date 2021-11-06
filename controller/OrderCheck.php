<?php
	session_start();
     $userNameErr = "";
     $flag = false;

	if(isset($_POST['submit'])){

		$rice= $_POST['rice'];
		$chicken= $_POST['chicken'];
		$mutton= $_POST['mutton'];
		$biriyani= $_POST['biriyani'];
		$drinks=$_POST['drinks'];
        if(empty($_POST['rice'])) {
          echo 'invalid order';
        }

		if($rice != '' && $chicken != '' && $mutton != ''){
			$order =['rice'=> $rice, 'chicken'=> $chicken, 'mutton'=> $mutton];
			$_SESSION['order'] = $order;



            if(file_exists('orderCart.json'))
           {
                $current_data = file_get_contents('orderCart.json');
                $array_data = json_decode($current_data, true);
                $extra = array(
                     'rice'               =>     $_POST['rice'],
                       'chicken'               =>     $_POST['chicken'],
                     'mutton'          =>     $_POST['mutton'],
                     'biriyani'     =>     $_POST['biriyani'],
                    
                      'drinks'     =>    $_POST['drinks'],
                );
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);
                if(file_put_contents('OrderCart.json', $final_data))
                {
                     $message = "<label class='text-success'> <b> user registration successfull...Please log in</b></label>";
                }
           }
           else
           {
                $error = "<label class='text-danger'>JSON File does not exist</label>";
           }















            header('location: ../view/ViewCart.php');
			
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}


?>