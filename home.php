<?php
//    session_start();
//     if((!isset($_SESSION["email"]))){
//         header("location: login.php");
//         die();
//     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/dash.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar  -->
    <?php
    require 'navbar.php';
    ?>

    <div class="dash">
        <div class="outer">
            <div class="inner">
                    
            </div>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>