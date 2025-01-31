<?php
// check if the account already exists
$email = $_POST['email'];
$accountalreadyexist = true;
require 'databaseconnection.php';
$sqlquery = "select * from users where email = '$email'";
$result = $connection->query($sqlquery);
if (!mysqli_num_rows($result)) {
    $accountalreadyexist = false;
}

session_start();
//user input for email
if (!isset($_SESSION['email']) && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}

// user input for otp
$_SESSION['inputotp'] = (int) $_POST['digit1'] . $_POST['digit2'] . $_POST['digit3'] . $_POST['digit4'] . $_POST['digit5'] . $_POST['digit6'];

// generate otp
if (!isset($_SESSION['otpsent']) && isset($_POST['email']) && !$accountalreadyexist && isset($_POST['submitbtn'])) {
    $_SESSION['generatedotp'] = rand(100000, 999999);
    $subject = 'Your otp for signup';
    $_SESSION['email'] = $_POST['email'];
    //mailbody
    $message = "
    <html>
    <head>
        <title>Your OTP for Signup</title>
    </head>
    <body>
        <p>Hello,</p>
        <p>Your One-Time Password (OTP) is: <strong>" . $_SESSION['generatedotp'] . "</strong></p>
        <p>Please use this OTP to complete your signup process.</p>
        <p>Regards, <br> Fitforce Team</p>
    </body>
    </html>
    ";
    //mail headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Fitforce <no-reply@sahan.in>\r\n";
    $headers .= "Reply-To: fitforce@sahan.in\r\n";

    // send mail
    if (mail($_SESSION['email'], $subject, $message, $headers)) {
        $_SESSION['otpsent'] = true;
    }

    unset($_POST['digit3']);
}



// verify their email
if ($_SESSION['inputotp'] == $_SESSION['generatedotp'] &&  isset($_SESSION['generatedotp'])) {
    $_SESSION['otpverified'] = true;
    header("location: signup.php");
}

if (isset($_POST['digit1']) && isset($_POST['digit2']) && isset($_POST['digit3']) && isset($_POST['digit4']) && isset($_POST['digit5']) && isset($_POST['digit6']) && $_SESSION['otpsent'] == true) {
    $invalidotp = true;
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        .otpip {
            <?php
            if (isset($_SESSION['otpsent'])) { // logic to remove when otp not sent.
                echo 'display: flex';
            } else {
                echo 'display: none';
            }
            ?>
        }
    </style>
</head>

<body>
    <div class="login">
        <a href="login.php.php">Already have an account? <b>Login</b></a>
        <div class="logoformcontainer">
            <div class="logocontainer">
                <img style="margin: 240px auto 0px 20px;" height="20px" width="fit-content"
                    src="/Images/Group 1000005572.png" alt="logo">
                <img style="margin: 8px auto 0px 20px;" height="14px" width="fit-content"
                    src="/Images/Empowering Employees to Thrive.png" alt="">

            </div>
            <div class="formcontainer">
                <br>
                <h1>Sign Up</h1>
                <br>

                <form id="emailform" action="otp.php" method="post">
                    <!-- // if the otp is sent then make the input static with email -->
                    <?php
                    if (!isset($_SESSION['otpsent'])) {
                        echo ' <input required placeholder="Mail id" type="email" name="email" id="emailip">';
                    } else {
                        echo '<div id="emaildisplay">' . $_SESSION['email'] . '</div>';
                    }
                    if ($accountalreadyexist && isset($_POST['submitbtn'])) {
                        // account already exists
                        echo '<p style="color: red; font-size: 14px; font-weight: 500;"> Account already exists</p>';
                    }
                    ?>

                    <div class="otpip">
                        <input require name="digit1" maxlength="1" type="password" oninput="moveToNext(this)">
                        <input require name="digit2" maxlength="1" type="password" oninput="moveToNext(this)">
                        <input require name="digit3" maxlength="1" type="password" oninput="moveToNext(this)">
                        <input require name="digit4" maxlength="1" type="password" oninput="moveToNext(this)">
                        <input require name="digit5" maxlength="1" type="password" oninput="moveToNext(this)">
                        <input require name="digit6" maxlength="1" type="password" oninput="moveToNext(this)">
                    </div>

                    <!-- show that the otp is generated and sent successfully -->
                    <?php
                    if (isset($_SESSION['otpsent'])) {
                        echo '<p style="color: green; font-size: 14px; font-weight: 500;"> Otp is sent to your mail</p>';
                    }

                    if (isset($invalidotp)) {
                        echo '<p style="color: red; font-size: 14px; font-weight: 500;"> Invalid otp</p>';
                    }
                    ?>

                    <button name="submitbtn" type="submit">
                        <?php
                        if (!isset($_SESSION['otpsent'])) { //logic to show verify when otp sent
                            echo 'Generate otp';
                        } else {
                            echo 'Verify';
                        }
                        ?>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script src="/Js/otp.js"></script>
</body>

</html>