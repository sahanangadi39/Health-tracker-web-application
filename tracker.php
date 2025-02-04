<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health tracker</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/tracker.css">
    <link rel="stylesheet" href="/Css/footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">


</head>

<body>
    <?php
    require 'navbar.php';
    ?>

    <p id="heading1">You are  1000 points away from unlocking your next rewards!!!</p>

    <div class="rewards-container">
        <?php require 'vectors/rewards.php'  ?>
    </div>

    <?Php
                require 'vectors/tracker-page.php'

                ?>


   


    <?php
    require 'footer.php'
    ?>
</body>

</html>