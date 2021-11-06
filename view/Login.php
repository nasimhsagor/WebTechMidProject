<?php 
include '../init.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background-color:grey;">
	
	<?php Session::displayAlertMsg();?>

	<form method="post" action="../controller/loginCheck.php">
			<center>
    <table  width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>Restaurant Management System</b></h3>
            </td>
            <td align="Right">
                <a href="../index.php">Home</a> |
                <a href="Login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
            <?php
@$username=$_POST['username'];       
@$password=$_POST['password'];
if(isset($_POST['login.php']))	
{		
if($username=="sagor" && $password==1122)		
{			
if($_POST['ch']==true)			
{			
setcookie("username",$username,time()+60*60);			
setcookie("password",$password,time()+60*60);			
header('location:login.php');			
}			
header('location:login.php');		
}		
else		
{		
echo "invalid id or pass";		
}	
}    
?>
			<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
                
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
                <tr>
                    <td>

                        <input type="checkbox" name="ch"/>
                        <label for="ch">Remember me</label>
					</td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forgot Passwor?</td>
                </tr>
			</table>
            </fieldset>
            </td>
        </tr>
        
    </table>
    </center>
		
	</form>
    
</body>
</html>
<?php include 'footer.php' ?>