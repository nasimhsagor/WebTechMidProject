<?php
	session_start();
	if(isset($_COOKIE['flag'])){
        if(isset($_POST['submit'])){
            $op= $_POST['op'];
            $np= $_POST['np'];
            $cp= $_POST['cp'];
        
            if($_SESSION['user']['password'] == $op)
            {
                if($np == $cp)
                {
                    $_SESSION['user']['password'] == $np;
                    header('location: ../view/Login.php');
                }
                else{
                    echo "new pass and retype pass are not same";
                }
            }
            else{
                echo "old password is not valid";
            }
        }
    else{
		header('location: ../view/Login.php');
	}


    }else{
		header('location: ../view/Login.php');
	}
?>