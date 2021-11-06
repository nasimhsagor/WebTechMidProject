<?php  
 $message = '';  
 $error = '';
 $check = 1;  


 $usernameErr = $passwordErr = $emailErr = $genderErr = $mobileErr = "";
 $username = $password = $email = $gender = $mobile = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
    $check = 0;
  } else {
    $name = $_POST["username"];
    $count = str_word_count("$username");
    if(preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) {
      $usernameErr = "Only letters and white space allowed and contains at least two words";
      $check = 0; // for english chars + numbers only
      // valid username, alphanumeric & longer than or equals 5 chars
  }
    // if ((!preg_match("/^[a-zA-Z-' ]*$/",$username)) || $count < 6 ){
    //   $usernameErr = "Only letters and white space allowed and contains at least two words";
    //   $check = 0;
    // }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    $check = 0;
  }else {
    $password = $_POST["password"];
    $count = strlen("$password");
    if ((!preg_match("([@#$%])",$password)) || $count < 8 ) {
      $passwordErr = "Password must not be less than eight characters and  must contain at least one of the special characters (@, #, $, %) ";
      $check = 0;
    }

  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $check = 0;
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $check = 0;
    }
  }

 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $check = 0;
  } else {
    $gender = $_POST["gender"];
  }

    

    if (empty($_POST["mobile"])) {
      $mobileErr = "Mobile field is empty";
      $check = 0;
    }else {
      $mobile = $_POST["mobile"];

    }

 if(isset($_POST["submit"]))  
 {
  if ($check == 1) {
    if(file_exists('users-data.json'))  
    {  
      $current_data = file_get_contents('users-data.json');
                $array_data = json_decode($current_data, true);
                $extra = array(
                     'username'               =>     $_POST['username'],
                       'password'               =>     $_POST['password'],
                     'email'          =>     $_POST['email'],
                     'gender'     =>     $_POST['gender'],
                    
                      'mobile'     =>    $_POST['mobile'],
                       'type'     =>     $_POST['type'],
                     'dob'     =>     $_POST["dob"]
                ); 
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('users-data.json', $final_data))  
          {  
            $message = "Data has been saved.";  
          }  
    }  
    else  
    {  
      $error = 'JSON File not exits';  
    }   
  }
}
  
 }
?> 

 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
  <form method="post">
    <fieldset>
      <legend><b>REGISTRATION</b></legend>
      <label>USER NAME: </label>
      <input type="text" name="username">
      <span class="error"><?php echo $usernameErr;?></span><hr>
      <label>Password: </label>
      <input type="password" name="password">
      <span class="error"><?php echo $passwordErr;?></span><hr>
      <label>Email: </label>
      <input type="text" name="email">
      <span class="error"><?php echo $emailErr;?></span><hr>
      <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
        <span class="error"><?php echo $genderErr;?></span>
      </fieldset><hr>
      <fieldset>
      <label>Mobile: </label>
      <input type="mobile" name="mobile">
      <span class="error"><?php echo $mobileErr;?></span><hr>
      </fieldset><hr>
      <fieldset>
        <legend>Date of Birth:</legend>
        <input type="date" name="dob">
      </fieldset><hr><br><br>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" name="reset" value="Reset">
    </fieldset><br><br>
    <?php   
      if(isset($error))  
        {  
          echo $error;  
        }  
    ?> 
    <?php   
      if(isset($message))  
        {  
          echo $message;  
        }  

    ?> 
  </form>
 </body>
 </html>