<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health is Wealth</title>
    <link rel="stylesheet" href="/Css/login.css">
</head>

<body>
    <div class="login">
        <a href="signup.php">Don't have an account? <b>Sign Up</b></a>
        <div class="logoformcontainer">
            <div class="logocontainer">
                <img src="/Images/logo.png" alt="Logo" class="logo">
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