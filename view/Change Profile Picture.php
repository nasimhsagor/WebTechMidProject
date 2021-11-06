<?php
	include '../init.php';
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>
</head>

<body style="background-color:#3495eb;">
<form method="post" action="../controller/upload.php" enctype="multipart/form-data">
    <center>
        <table style="width: 100%; height: 100%;">
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
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>PROFILE PICTURE</legend>
			<table width="500px">
				<tr>
                    <td><img src="PP.jpg" alt="profile pic" style="width:100px;height:100px;"align="Left"></td>
				</tr>
                <tr>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
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