<?php
	include '../init.php';
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body style="background-color:#3495eb;">
    <center>
        <table width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>Restaurant Management System</b></h3>
                            </td>
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
                        <li><a href="FeedBack.php">FeedBack</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>

                    </ul>
                </td>
                <td>
                    <p>Contact with Admin:<a href="mailto:sagor.temp@gmail.com">sagor.temp@gmail.com</a></p>
                </td>
            </tr>

            
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>
<?php include 'footer.php' ?>