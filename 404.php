<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page doesn't exist</title>
    <link rel="stylesheet" href="Css/404_page.css">
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
</head>
<body>
    <?php
        require 'navbar.php';
    ?>
        <div class="error-container">
            <div class="error-content">
                <!-- <img src="Images/404.png" alt="404 Error" class="error-image"> -->
                <!-- <h1>404</h1> -->
                <h2>This Page Does Not Exist</h2>
                <p>The page you were looking for appears to have been moved, deleted, or does not exist.</p>
                <a href="home.php" class="home-button">Return to Home</a>
            </div>
    </div>
      

    <?php
        require 'footer.php'
    ?>
</body>
</html>