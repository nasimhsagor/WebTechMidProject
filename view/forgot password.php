<!DOCTYPE html>
<html>
<head>
	<title>FORGOT PASSWORD</title>
</head>
<body>
	<!--<form method="post" action="../controller/forgotpasswordCheck.php">-->
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
			<fieldset>
			<legend>FORGOT PASSWORD</legend>
			<table>
				<tr>
					<td>Enter Email</td>
					<td><input type="email" name="email"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
                </tr>
			</table>
            </td>
        </tr>
        
    </table>
    </center>
		
	</form>
</body>
</html>
<?php include 'footer.php' ?>