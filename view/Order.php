<!DOCTYPE html>
<html>
<head>
	<title>Order Page</title>
</head>
<body style="background-color:#3495eb;">
	<form method="post" action="../controller/OrderCheck.php">
			<center>
    <table  width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>Menu Booking</b></h3>
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
			<legend>FOOD ITEMS</legend>
			<table>
				<tr>
					<td>Rice [40 TAKA]</td>
					<td><input type="number" name="rice"> </td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				
				<tr>
					<td>Chicken [ 150 TAKA ]</td>
					<td><input type="number" name="chicken"></td>
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Mutton [250 TAKA]</td>
					<td><input type="number" name="mutton"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Biriyani [350 TAKA]</td>
					<td><input type="number" name="biriyani"></td>
				
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
				
                <tr>
                    <td colspan="2">
					<fieldset>
					<legend>Drinks</legend>
                        <input type="radio" name="drinks" value="CocaCola"> CokaCola
                        <input type="radio" name="drinks" value="7up"> 7up
                        <input type="radio" name="drinks" value="Pepsi"> Pepsi
                    </fieldset>
					<hr>
					</td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"></td>
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