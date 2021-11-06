<?php
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
</head>

<body style="background-color:#3495eb;">
    <center>
        <table  width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>Food Booking</b></h3>
                            </td>
                            <td align="Right">
                            Logged in as
                                <a href="View Profile.php"><?=$_SESSION['user']['username']?></a> |
                                <a href="../controller/Logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="150px" width="200px">
                    Account<br><hr>
                    <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View Profile.php">View Profile</a></li>
                        <li><a href="Edit Profile.php">Edit Profile</a></li>
                        <li><a href="Change Profile Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                        <li><a href="See Menu.php">See Menu</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>Order List:</legend>
			<table width="500px">
				<tr>
					<td>Rice</td>
					<td> :<?=$_SESSION['order']['rice']?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                
				<tr>
					<td>Chicken</td>
					<td> :<?=$_SESSION['order']['chicken']?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Mutton</td>
					<td> :<?=$_SESSION['order']['mutton']?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Biriyani</td>
					<td> :<?=$_SESSION['order']['biriyani']?></td>
				</tr>

                <tr>
					<td>Drinks</td>
					<td> :<?=$_SESSION['order']['drinks']?></td>
				</tr>

                <tr>
                   <td colspan="3"><hr></td> 
                </tr>	

			</table>
            </fieldset>
                </td>
            </tr>

            
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		//header('location: login.php');
	}
?>