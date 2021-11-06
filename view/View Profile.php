<?php
	include '../init.php';
	
	$username = $email = $gender = $dob = $mobile =  $type = null;
	
	
			if(file_exists('../controller/users-data.json'))
			{
                $current_data = file_get_contents('../controller/users-data.json');
                $users = json_decode($current_data, true);
				
				$isLogin = false;
				
				
				foreach($users as $user){
				
					if($user['username']==Session::get('username'))
					{
						$username = $user['username'];
						
						
						
						$email = $user['email'];
						$gender = $user['gender'];
						$dob = $user['dob'];
						$mobile =  $user['mobile'];
						$type = $user['type'];
					}
					
				}

			}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
</head>

<body style="background-color:#3495eb;">
    <center>
        <table  width="700px">

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
                        
                        <li><a href="About Us.php">About Us</a></li>
                        <li><a href="FeedBack.php">FeedBack</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>PROFILE</legend>
			<table width="500px">
				<tr>
					<td>Name</td>
					<td> :<?=$username?></td>
                    <td rowspan="4"><img src="pp.jpg" alt="profile pic" style="width:100px;height:100px;"align="Left"><br><a href="Change Profile Picture.php">Change</a></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                
				<tr>
					<td>Email</td>
					<td> :<?=$email?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Gender</td>
					<td> :<?=$gender?></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Date of Birth</td>
					<td> :<?=$dob?></td>
				</tr>

                <tr>
					<td>Mobile</td>
					<td> :<?=$mobile?></td>
				</tr>

                <tr>
					<td>Type</td>
					<td> :<?=$type?></td>
				</tr>

                <tr>
                   <td colspan="3"><hr></td> 
                </tr>

                <tr>
					<td><a href="Edit Profile.php">Edit Profile</a></td>
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
		header('location: login.php');
	}
?>