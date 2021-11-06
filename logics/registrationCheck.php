<?php 
	//session_start();
	
	//$_SESSION['total']=0;
	//header('Location:Dashboard.php');
	if($_POST['name']=="" || $_POST['email']=="" ||$_POST['userName']=="" || $_POST['password']=="" || $_POST['comPassword']=="")
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form mathod="POST" action="../views/Registration.html" >
		<h1>Information Missing! Give Information Properly..</h1>
		<input type="Submit" name="" value="OK" width="30%" style="background-color:#00BFFF;">
	</form>
</body>
</html>

<?php
	}
	else if($_POST['password']!=$_POST['comPassword'])
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form mathod="POST" action="../views/Registration.html" >
		<h1>Confirm Password Not Match! Give Information Properly..</h1>
		<input type="Submit" name="" value="OK" width="30%" style="background-color:#00BFFF;">
	</form>
</body>
</html>

<?php
	}

	else
	{
		//file
		$file = fopen('database.txt','a');//a for concat with the previous
		fwrite($file,$_POST['name']."|". $_POST['email']."|".$_POST['userName']."|". $_POST['password']."\n");
		fclose($file);
		header('Location:../views/Login.html');

	}
?>