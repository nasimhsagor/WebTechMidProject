<?php 
 $file = fopen('database.txt','r');
 //print_r( $file[2]);
 $temp=0;
 session_start();
 while(!feof($file)){
 	$perLine=fgets($file);
 	 //echo $perLine."<br>";
 	if($perLine!="")// line break from db not accepted
 	{
	 	$record=explode('|',$perLine);
	 	//echo $perLine[1];
	 	//print_r($record);
	 	//echo $record[2]." ".;
	 	if($_POST['userName']==$record[2] && $_POST['password']==$record[3])
	 	{
	 		//echo "success";
	 		
			$_SESSION['f1']=0;
			$_SESSION['f2']=0;
			$_SESSION['f3']=0;
			$_SESSION['f4']=0;
			$_SESSION['f5']=0;	
			$_SESSION['f6']=0;
			$_SESSION['f7']=0;
			$_SESSION['f8']=0;
			$_SESSION['j1']=0;
			$_SESSION['total']=0;
			$_SESSION['totalOrder']=0;
			$_COOKIE['flag']=1;
			setcookie('flag',1,time()+3600,'/');
			//for store data in browser
			$_COOKIE['name']=$record[0];
			setcookie('name',$record[0],time()+3600,'/');
			$_COOKIE['email']=$record[1];
			setcookie('email',$record[1],time()+3600,'/');
			$_COOKIE['userName']=$record[2];
			setcookie('userName',$record[2],time()+3600,'/');
			$_COOKIE['password']=$record[3];
			setcookie('password',$record[3],time()+3600,'/');
	 		header('Location:../views/Dashboard.php');
	 		$temp=1;
	 		break;
	 	}
	}
 }
	if($temp==0)echo"<h1> Password/Username Incorect! Go Back..</h1>";
  //echo $record[1];*/
 fclose($file);
?>