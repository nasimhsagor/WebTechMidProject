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
    <title>Edit</title>
</head>

<body style="background-color:#3495eb;">
<form method="post" action="../controller/RegistrationCheck.php">
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
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>EDIT PROFILE</legend>
			<table width="500px">
				<tr>
					<td>Name</td>
                    <td>:<input type="text" name="username" value="<?=$username?>"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                
				<tr>
					<td>Email</td>
                    <td>:<input type="email" name="email" value="<?=$email?>"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Password</td>
                    <td>:<input type="password" name="password" value="<?=$_SESSION['user']['password']?>"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
					<td>Gender</td>
                    <td>
                    :<input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                    </td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>

                <tr>
                <td>Date of Birth</td>
                <td>:<input type="date" name="dob1" value="<?=$dob?>" min="1" max="31"> <b> </b>
                    
				</td>
                </tr>

                <tr>
                <td>Mobile:</td>
                <td><input type="mobile" name="mobile" value="<?=$mobile?>"></td>


                </tr>



                <tr>
                   <td colspan="3"><hr></td> 
                </tr>

                <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
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

<?php
	
	}else{
		header('location: login.php');
	}
?>
<?php include 'footer.php' ?>