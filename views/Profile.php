<?php 
//echo $_COOKIE['userName'];
	session_start();
	//echo $_SESSION['flag'];
	if($_COOKIE['flag']==1)
	{
?>
<!DOCTYPE html>
<html style="background-color:	#B0C4DE;">
<head>
	<title></title>
</head>
<body >
	<form method="POST" action="editProfile.php" >
		<table align= "center" border="1" width=100% height=700px style="background-color:#FF8000;">
			<tr height=70px><!-- r1-->
				<td rowspan="2" style="background-color:#FF8000;" width=80 align= "center" >
					<img src="picture/manu.png" height="40px" width="40px" ><br><br>
					<a href="Dashboard.php"><img src="picture/home.png" height="30px" width="30px" ></a>
					<a href="Profile.php"><img src="picture/profile.png" height="60px" width="60px" ></a>
					<a href="Help.php"><img src="picture/help.png" height="40px" width="40px" ></a><br>Help<br>
					<a href="../logics/logoutCheck.php"><img src="picture/logout.png" height="60px" width="60px" ></a>
				</td>
				<td  colspan="2" style="background-color:#FFB266;">
				</td>
			</tr>
			<tr style="background-color:white;">
				<td align="center">
				<h2 style="color:black;">NAME: <?php  echo $_COOKIE['name']; ?><br><br>
					EMAIL: <?php echo $_COOKIE['email']; ?><br><br>
					PHONE: <?php //echo $_COOKIE['phone']; ?><br><br>
					USER NAME: <?php  echo $_COOKIE['userName']; ?><br><br>
					PASSWORD: <?php echo "*******"; ?><br><br>
					LOCATION: <?php //echo $_POST['name']; ?><br><br>
				</h2>
				<input type="submit" name="d5" value="           Edit         " style="background-color:orange;">
				</td>
				<td align="center">
					<!--PHOTO-->
					<img src="picture/p.png" height="400px" width="400px">
				</td>

			</tr>
			
		</table>
	</form>
</body>
</html>
<?php  
}
else
{
	$_SESSION['flag']=0;
echo"<h1> Invalid Request! Go Back..</h1>";
}

?>