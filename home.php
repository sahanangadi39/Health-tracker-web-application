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
        <div class="container">
            <div class="outer">
                <div class="inner">
                        <div id="TextContainer">
                      <p class="text1"> 8.5 hours</p>
                      <p class="text2">Screen time</p>
                        </div>              
                       
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
             </svg>
         </div>
    </div>


    <?php require 'footer.php'; ?>
</body>

</html>