<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewards</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/dash.css">
    <link rel="stylesheet" href="/Css/Blog.css">
    <link rel="stylesheet" href="/Css/home.css">
    <link rel="stylesheet" href="/Css/reward.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>
<body>

    <?php
        require 'navbar.php';

    ?>

    <p id="heading1">You are  1000 points away from unlocking your next rewards!!!</p>

    <!-- reward tracker -->
    <div id="rewards-container">
                <?php require 'vectors/rewards.php'  ?>
        </div>

    
    <p id="heading2"> Your Rewards</p>

    <div class="card-container">

        <div class="card">
            <img src="/Images/imageqr1.png" alt="reward 1">
            <div class="card-content">

            <p1>Free Health checkup</p1>
            <a href="" class="click">redeem now</a>
            </div>
        </div>

        <div class="card">
            <img src="/Images/imageqr2.png" alt="reward 2">
            <div class="card-content">
                <p1> 20% of on Coffee </p1>
                <a href="" class="click">redeem now</a>
            </div>
        </div>

        <div class="card">
            <img src="/Images/imageqr3.png" alt="reward 2">
            <div class="card-content">
                <p1> 10% of on office wears</p1>
                <a href="" class="click">redeem now</a>
            </div>
        </div>

    </div>





        <?php
        require 'footer.php';
        ?>






    
</body>
</html>