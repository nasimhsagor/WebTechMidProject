<?php 
 if($_POST['action']=='p' && $_SESSION['total']!=0)
 {
 	$_SESSION['f1']=0;
	$_SESSION['f2']=0;
	$_SESSION['f3']=0;
	$_SESSION['f4']=0;
	$_SESSION['f5']=0;	
	$_SESSION['f6']=0;
	$_SESSION['f7']=0;
	$_SESSION['f8']=0;
	$_SESSION['f9']=0;
	//$_SESSION['total']=0;
	$_SESSION['totalOrder']++;
	//header('location: Payment.php');
	//_____________________________________//
	$myObj->name = "John";
	$myObj->age = 30;
	$myObj->city = "New York";
	$myJSON = json_encode($myObj);

	echo $myJSON;
 }
 else if($_POST['action']=='c' && $_SESSION['total']!=0)
 {
 	$_SESSION['f1']=0;
	$_SESSION['f2']=0;
	$_SESSION['f3']=0;
	$_SESSION['f4']=0;
	$_SESSION['f5']=0;	
	$_SESSION['f6']=0;
	$_SESSION['f7']=0;
	$_SESSION['f8']=0;
	$_SESSION['f9']=0;
	$_SESSION['total']=0;
	//$_POST['cancelOrder']=;
 }
 ?>