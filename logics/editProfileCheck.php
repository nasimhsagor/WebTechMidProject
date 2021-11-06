<?php 
 $file1 = fopen('database.txt','r');
 $file2 = fopen('database2.txt','a');
 $temp=0;
 
 /*while(!feof($file1)){
 	$perLine=fgets($file1);
 	//
 	// $perLine."<br>";
 	//$perLine=trim($perLine);
 	//echo $perLine."<br>";
	$record=explode('|',$perLine);// array
	//echo $record[0];
	//print_r($record);

	//echo "<br>";//.$record[1]."<br> ";
	//echo $record[2]."</b> ";
	if($record[0]!="\n" && $record[0]!="")
	{
		//print_r($record);echo "<br>";
		if($_COOKIE['userName']==$record[2] && $_COOKIE['password']==$record[3])
	 	{
	 		//ECHO $_POST['name'];
	 		//ECHO $_POST['email'];
	 		//ECHO $_POST['userName'];
	 		//ECHO $_POST['password'];
	 		fwrite($file2,$_POST['name']."|". $_POST['email']."|".$_COOKIE['userName']."|". $_POST['password']."\n");
	 	}
	 	else if($record[0]!="" && $record[1]!="" && $record[2]!="" && $record[3]!="")
	 	{
	 		fwrite($file2,$record[0]."|". $record[1]."|".$record[2]."|". $record[3]."\n");
	 	}
	}
 }
 
 			$_COOKIE['name']=$_POST['name'];
			$_COOKIE['email']=$_POST['email'];
			$_COOKIE['password']=$_POST['password'];
			//ECHO $_COOKIE['name'];
	 		//ECHO $_COOKIE['email'];
	 		//ECHO $_POST['userName'];
	 		//ECHO $_COOKIE['password'];
			//$file1 = fopen('database.txt','w');
			//fwrite($file1,"");
			//$file1 = fopen('database.txt','a');
			$file2 = fopen('database.txt','r');
			//$data=file_get_contents('database2.txt');
			//fclose($file2);
			//trim($data,"|||");
			echo $file;
			//$file1 = fopen('database.txt','w');
			//fwrite($file1,$data);
			$file2 = fopen('database2.txt','w');
			fwrite($file2,"");
			//fwrite($file1,$data);
			*/
 			
 fclose($file1);
	fclose($file2);
 header('Location:../views/Profile.php');
?>