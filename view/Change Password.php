<?php
	include '../init.php';
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Password</title>
</head>

<body style="background-color:#3495eb;">
<form method="post" action="../controller/passwordCheck.php">
    <center>
        <table  style="width: 100%; height: 100%;">

            <tr>
                <td colspan="2">
                    <table style="width: 100%; height: 100%;">
                        <tr>
                            <td align="Right">
                            Logged in as
                                <a href="View Profile.php"><?=Session::get('username')?></a> |
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
                        <li><a href="About Us.php">About Us</a></li>
                        <li><a href="FeedBack.php">FeedBack</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>CHANGE PASSWORD</legend>
			<table width="500px">
                <tr>
					<td>Current Password</td>
                    <td>:<input type="password" name="op" value=""></td>
				</tr>
                <tr>
					<td><font color="green">New Password</font></td>
                    <td>:<input type="password" name="np" value=""></td>
				</tr>
                <tr>
					<td><font color="red">Retype New Password</font></td>
                    <td>:<input type="password" name="cp" value=""></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Submit">
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
		header('location: ../view/Login.php');
	}
?>
<?php include 'footer.php' ?>