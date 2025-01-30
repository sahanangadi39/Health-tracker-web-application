<?php
   session_start();
require 'databaseconnection.php';
$email = $_POST['email'];
$password = $_POST['passphrase'];
$confirmpassword = $_POST['confirmpassphrase'];

$accountalreadyexist = true;
$isconfirmpasswordequal = true;
if($password != $confirmpassword){
    $isconfirmpasswordequal = false;
}
$sqlquery = "select * from users where email = '$email'";
$result = $connection->query($sqlquery);

if(!mysqli_num_rows($result)){
    $accountalreadyexist = false;
}

if(!$accountalreadyexist && $isconfirmpasswordequal && $email != '' && $password != ''){
    $signupquery = "insert into users(email,password) values('$email','$password')";
    $connection->query($signupquery);
    $_SESSION['email'] = $email;
    header("location: onboarding.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health is Wealth</title>
    <link rel="stylesheet" href="/Css/login.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login">
        <a href="login.php">Already have an account? <b>Login</b></a>
        <div class="logoformcontainer">
            <div class="logocontainer">
                <img style="margin: 240px auto 0px 20px;" height="20px" width="fit-content" src="/Images/Group 1000005572.png" alt="logo">
                <img style="margin: 8px auto 0px 20px;" height="14px" width="fit-content" src="/Images/Empowering Employees to Thrive.png" alt="">

            </div>
            <div class="formcontainer">
                <br>
                <h1>Sign Up</h1>
               <br>
               
                <form id="emailform" action="signup.php" method="post">
                    <input required placeholder="Mail id" type="email" name="email" id="emailip">
                    <input required placeholder="Password" type="password" name="passphrase" id="passphraseip">
                    <input required placeholder="confirm Password" name="confirmpassphrase" id="confirmpassphraseip" type="password">
                    <?php 

                       echo (!$isconfirmpasswordequal && isset($_POST['submitbtn']))?'<p style="font-size: 12px; color: red; margin-left: 10px;">Password and Confirm password does not match</p>':'';
                        
                        echo ($accountalreadyexist && isset($_POST['submitbtn']))? '<p style="font-size: 12px; color: red; margin-left: 10px;">Account already exists please login to continue</p>':'';
                    ?>
                    <button name="submitbtn" type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>