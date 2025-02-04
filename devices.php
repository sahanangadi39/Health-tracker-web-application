<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
    <link rel="stylesheet" href="/Css/devices.css">
    <link rel="stylesheet" href="/Css/Blogpage.css">
    <link rel="stylesheet" href="/Css/navigation.css">
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

<section class="device-container">
    <div class="paired-devices-card">
        <h3>Paired Devices</h3>
        <ul>
            <li>
                Apple Watch
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </li>
            <li>
                iPhone 16 Pro
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </li>
            <li>
                MacBook Pro
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </li>
            <li>
                Google Pixel
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </li>
        </ul>
    </div>

    <div class="scanning-area">
        <div class="scanning-animation">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <button class="scan-btn">Scanning for Devices</button>
        </div>
    </div>
</section>

<?php
    require 'footer.php';
    ?>

</body>
</html>