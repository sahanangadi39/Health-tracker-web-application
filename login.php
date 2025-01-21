<?php
require '/dbconnect/connect.php';
$connection = mysqli_connect($host,$username,$passphrase,$database);


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
        <a href="signup.php">Don't have an account? <b>Sign Up</b></a>
        <div class="logoformcontainer">
            <div class="logocontainer">
                <img style="margin: 240px auto 0px 20px;" height="20px" width="fit-content" src="/Images/Group 1000005572.png" alt="logo">
                <img style="margin: 8px auto 0px 20px;" height="14px" width="fit-content" src="/Images/Empowering Employees to Thrive.png" alt="">

            </div>
            <div class="formcontainer">
                <h1>Sign In</h1>
                <form id="socialform" action="login.php" method="post">
                    <button>Google</button>
                    <button>Apple ID</button>
                </form>
                <hr>
                <p>or continue with Email address</p>
                <form id="emailform" action="login.php" method="post">
                    <input placeholder="Email id" type="email" name="email" id="emailip">
                    <input placeholder="Password" type="password" name="passphrase" id="passphraseip">
                    <button type="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>