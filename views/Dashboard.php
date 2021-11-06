<?php 
	session_start();
	//echo $_SESSION[''];
	if($_COOKIE['flag']==1)
	{
?>
<?php 
	//1 
	if(isset($_POST['a1'])){
		$_SESSION['f1']++;
		$_SESSION['total']+=200;
	}
	else if(isset($_POST['d1'])&&$_SESSION['f1']>0)
	{
		$_SESSION['f1']--;
		$_SESSION['total']-=200;
	}
	//2
	else if(isset($_POST['a2'])){
		$_SESSION['f2']++;
		$_SESSION['total']+=220;
	}
	else if(isset($_POST['d2'])&&$_SESSION['f2']>0)
	{
		$_SESSION['f2']--;
		$_SESSION['total']-=220;
	}
	//3
	else if(isset($_POST['a3'])){
		$_SESSION['f3']++;
		$_SESSION['total']+=500;
	}
	else if(isset($_POST['d3'])&&$_SESSION['f3']>0)
	{
		$_SESSION['f3']--;
		$_SESSION['total']-=500;
	}
	//4
	else if(isset($_POST['a4'])){
		$_SESSION['f4']++;
		$_SESSION['total']+=250;
	}
	else if(isset($_POST['d4'])&&$_SESSION['f4']>0)
	{
		$_SESSION['f4']--;
		$_SESSION['total']-=250;
	}
	
	//5
	else if(isset($_POST['a5'])){
		$_SESSION['f5']++;
		$_SESSION['total']+=90;
	}
	else if(isset($_POST['d5'])&&$_SESSION['f5']>0)
	{
		$_SESSION['f5']--;
		$_SESSION['total']-=90;
	}

	//6
	else if(isset($_POST['a6'])){
		$_SESSION['f6']++;
		$_SESSION['total']+=500;
	}
	else if(isset($_POST['d6'])&&$_SESSION['f6']>0)
	{
		$_SESSION['f6']--;
		$_SESSION['total']-=500;
	}
	
	//7
	else if(isset($_POST['a7'])){
		$_SESSION['f7']++;
		$_SESSION['total']+=120;
	}
	else if(isset($_POST['d7'])&&$_SESSION['f7']>0)
	{
		$_SESSION['f7']--;
		$_SESSION['total']-=120;
	}
	
	//8
	else if(isset($_POST['a8'])){
		$_SESSION['f8']++;
		$_SESSION['total']+=300;
	}
	else if(isset($_POST['d8'])&&$_SESSION['f8']>0)
	{
		$_SESSION['f8']--;
		$_SESSION['total']-=300;
	}

	//9 juice
	else if(isset($_POST['a9'])){
		$_SESSION['j1']++;
		$_SESSION['total']+=50;
	}
	else if(isset($_POST['d9'])&&$_SESSION['j1']>0)
	{
		$_SESSION['j1']--;
		$_SESSION['total']-=50;
	}
	
	
?>
<?php 
 if(isset($_POST['placeOrder']) && $_SESSION['total']!=0)
 {
 	$_SESSION['f1']=0;
	$_SESSION['f2']=0;
	$_SESSION['f3']=0;
	$_SESSION['f4']=0;
	$_SESSION['f5']=0;	
	$_SESSION['f6']=0;
	$_SESSION['f7']=0;
	$_SESSION['f8']=0;
	$_SESSION['j1']=0;
	//$_SESSION['total']=0;
	$_SESSION['totalOrder']++;
	header('location: Payment.php');
 }
 else if(isset($_POST['cancelOrder']) && $_SESSION['total']!=0)
 {
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
 }
 ?>
<!DOCTYPE html>
<html style="background-color:	#B0C4DE;">
<head>
	<title></title>
</head>
<body >
	<form method="POST" action="" >
		<table align= "center" border="0" width=100% height=700px style="background-color:#FF8000;">
			<tr height=70px><!-- r1-->
				<td rowspan="3" style="background-color:#FF8000;" width=80 align= "center" >
					<img src="picture/manu.png" height="40px" width="40px" ><br><br>
					<a href="Dashboard.php"><img src="picture/home.png" height="30px" width="30px" ></a>
					<a href="Profile.php"><img src="picture/profile.png" height="60px" width="60px" ></a>
					<a href="Help.php"><img src="picture/help.png" height="40px" width="40px" ></a><br>Help<br>
					<a href="../logics/logoutCheck.php"><img src="picture/logout.png" height="60px" width="60px" ></a>
				</td>
				<td colspan="5" style="background-color:#FFB266;">
					<h1 align="center"  style="color:white;"><?php echo "Wellcome ".$_COOKIE['name']; ?></h1>
					
				</td>
			</tr>
			<tr height=70px><!-- r2-->
				<td colspan="3" style="background-color:white;">
					<h2> Total Price: <?php echo $_SESSION['total'];?></h2>
					Total Order Placed: <?php echo $_SESSION['totalOrder'];?>
				</td>
				<td style="background-color:white;">
					<input type="submit" name="placeOrder" value="  Place Order  " style="background-color:#66CC00;">
					<input type="submit" name="cancelOrder" value=" Cancel Order " style="background-color:red;">
				</td>
				<td style="background-color:cyan;">
					<h3 align="center" style="color:#008000;"> Enjoy Up to 10% Discount.</h3>
				</td>
			</tr>
			<tr><!-- r3-->
				<td style="background-color:white;" width="210px">
					<img src="picture/foods/food1.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Chow Mein 200 TK.</b>
					<br><input type="submit" name="a1" value="Add to Cart" style="color:green;">
					<input type="submit" name="d1" value=" - " style="color:red;">
					<?php echo $_SESSION['f1'];?>
				</td>
				<td style="background-color:white;" width="210px">
					<img src="picture/foods/food2.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Pasta 220 TK.</b>
					<br><input type="submit" name="a2" value="Add to Cart" style="color:green;">
					<input type="submit" name="d2" value=" - " style="color:red;">
					<?php echo $_SESSION['f2'];?>
				</td>
				<td style="background-color:white;" width="210px">
					<img src="picture/foods/food3.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Baked Fish 500 TK.</b>
					<br><input type="submit" name="a3" value="Add to Cart" style="color:green;">
					<input type="submit" name="d3" value=" - " style="color:red;">
					<?php echo $_SESSION['f3'];?>
				</td>
				<td style="background-color:white;" width="210px">
					<img src="picture/foods/food4.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Burger 250 TK.</b>
					<br><input type="submit" name="a4" value="Add to Cart" style="color:green;">
					<input type="submit" name="d4" value=" - " style="color:red;">
					<?php echo $_SESSION['f4'];?>
				</td>
				<td rowspan="2" style="background-color:white;">
					<img src="picture/foods/juice2.jpg" height="500px" width="300px">
					<b style="color:#FF8000;"> Juice 50 TK.</b>
					<br><input type="submit" name="a9" value="Add to Cart" style="color:green;">
					<input type="submit" name="d9" value=" - " style="color:red;">
					<?php echo $_SESSION['j1'];?>
				</td>
			</tr>
			<tr><!-- r4-->
				<td style="background-color:#FF8000;">
					
				</td>
				<td style="background-color:white;">
					<img src="picture/foods/food5.jpg" height="200px" width="200px" >
					<b style="color:#FF8000;"> Potato Fries 90 TK.</b>
					<br><input type="submit" name="a5" value="Add to Cart" style="color:green;">
					<input type="submit" name="d5" value=" - " style="color:red;">
					<?php echo $_SESSION['f5'];?>
				</td>
				<td style="background-color:white;">
					<img src="picture/foods/food6.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Pizza 9" 500 TK.</b>
					<br><input type="submit" name="a6" value="Add to Cart" style="color:green;">
					<input type="submit" name="d6" value=" - " style="color:red;">
					<?php echo $_SESSION['f6'];?>
				</td>
				<td style="background-color:white;" width="210px">
					<img src="picture/foods/food7.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Sandwich 120 TK.</b>
					<br><input type="submit" name="a7" value="Add to Cart" style="color:green;">
					<input type="submit" name="d7" value=" - " style="color:red;">
					<?php echo $_SESSION['f7'];?>
				</td>
				<td style="background-color:white;">
					<img src="picture/foods/food8.jpg" height="200px" width="200px">
					<b style="color:#FF8000;"> Burger & Fries 300 TK.</b>
					<br><input type="submit" name="a8" value="Add to Cart" style="color:green;">
					<input type="submit" name="d8" value=" - " style="color:red;">
					<?php echo $_SESSION['f8'];?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td align="center"><a href="Payment.php">Payment</a></td>
				<td align="center"><a href="Review.php">Review</a></td>
				<td align="center"><a href="Aboutus.php">About Us</a></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php  
}
else
{
	//$_SESSION['flag']=0;
echo"<h1> Invalid Request! Go Back..</h1>";
}

?>