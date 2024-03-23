<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    
</head>
<body>
<?php
                    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    //     extract($_POST);
                    //     $first_name = dataClean($first_name);
                    //     $last_name = dataClean($last_name);
                    //     $address_line1 = dataClean($address_line1);
                    //     $address_line2 = dataClean($address_line2);
                    //     $address_line3 = dataClean($address_line3);

                    //     $message = array();
                    //     Required validation-----------------------------------------------
                    //     if (empty($first_name)) {
                    //         $message['first_name'] = "The first name should not be blank...!";
                    //     }
                    //     if (empty($last_name)) {
                    //         $message['last_name'] = "The last name should not be blank...!";
                    //     }
                    //     if (!isset($gender)) {
                    //         $message['gender'] = "Gender is required";
                    //     }
                    //     if (empty($user_name)) {
                    //         $message['user_name'] = "User Name is required";
                    //     }
                    //     if (empty($password)) {
                    //         $message['password'] = "Password is required";
                    //     }


                        // Advance validation------------------------------------------------
                        // if (ctype_alpha(str_replace(' ', '', $first_name)) === false) {
                        //     $message['first_name'] = "Only letters and white space allowed";
                        // }
                        // if (ctype_alpha(str_replace(' ', '', $last_name)) === false) {
                        //     $message['last_name'] = "Only letters and white space allowed";
                        // }
                        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        //     $message['email'] = "Invalid Email Address...!";
                        // } else {
                        //     $db = dbConn();
                        //     $sql = "SELECT * FROM customers WHERE Email='$email'";
                        //     $result = $db->query($sql);

                        //     if ($result->num_rows > 0) {
                        //         $message['email'] = "This Email address already exsist...!";
                        //     }
                        // }
                        
                    //     if(!empty($user_name)){
                    //         $db = dbConn();
                    //         $sql = "SELECT * FROM users WHERE UserName='$user_name'";
                    //         $result = $db->query($sql);

                    //         if ($result->num_rows > 0) {
                    //             $message['user_name'] = "This User Name already exsist...!";
                    //         }
                    //     }
                        
                    //     if(!empty($password)){
                    //         if(strlen($password)<8){
                    //             $message['password']="The password should be 8 characters more";
                    //         }
                    //     }

                    //     if (empty($message)) {
                    //         Use bcrypt hasing algorithem
                    //         $pw= password_hash($password,PASSWORD_DEFAULT);
                    //         $db = dbConn();
                    //         $sql = "INSERT INTO `users`(`UserName`, `Password`) VALUES ('$user_name','$pw')";
                    //         $db->query($sql);

                    //         $user_id = $db->insert_id;
                            
                    //         $reg_number=date('Y').date('m').date('d').$user_id;
                    //         $_SESSION['RNO']=$reg_number;
                    //         $sql = "INSERT INTO `customers`(`FirstName`, `LastName`, `Email`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `TelNo`, `MobileNo`, `Gender`, `DistrictId`,`RegNo`,`UserId`) VALUES ('$first_name','$last_name','$email','$address_line1','$address_line2','$address_line3','$telno','$mobile_no','$gender','$district','$reg_number','$user_id')";
                    //         $db->query($sql);
                    //         $msg="<h1>SUCCESS</h1>";
                    //         $msg.="<h2>Congratulations</h2>";
                    //         $msg.="<p>Your account has been successfully created</p>";
                    //         $msg.="<a href='http://localhost/bittest/verify.php'>Click here to verifiy your account</a>";
                    //         sendEmail($email,$first_name,"Account Verification",$msg);
                            
                    //         header("Location:register_success.php");
                            
                    //     }
                    // }
                    ?>
<center>
    <div class="container">
        <table border="0">
            <tr>
                <td colspan="2">
                    <p class="header-text">Let's Get Started</p>
                    <p class="sub-text">Add Your Personal Details to Continue</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="address" class="form-label">Address: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="address" class="input-text" placeholder="Address" required>
                </td>
            </tr>
           
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Date of Birth: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>

                    </form>
            </tr>
        </table>

    </div>
</center>
</body>
</html>