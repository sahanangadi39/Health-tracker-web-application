<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <link rel="stylesheet" href="/Css/Blog.css">
    <link rel="stylesheet" href="/Css/navigation.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    require 'navbar.php';
    ?>
    <div id="preventationcontainer">
        <div class="blogleftimage">
            <img src="/Images/Blog/box-nuts-spices-wood-table.png" alt="nuts-spices-wood-table image">
        </div>
        <div class="blogrightcontent">
            <h2>Prevention is Better Than Cure</h2>

            The saying "prevention is better than cure" emphasises the importance of proactive measures to avoid problems
            rather than dealing with their consequences. Maintaining a healthy lifestyle with proper nutrition and exercise
            reduces the risk of diseases, while regular safety checks prevents accidents. By addressing potential issues before
            they escalate, we foster a more sustainable and efficient approach to problem-solving, benefiting individuals and
            society as a whole.
        </div>
    </div>


    <div id="healthblogs">
        <img onclick="window.location.href='nutrition.php'" src="/Images/Blog/nutrition.png" alt="Nutrition">
        <img src="/Images/Blog/hyderation.png" alt="Hyderation">
        <img src="/Images/Blog/goodposture.png" alt="Good posture">
        <img src="/Images/Blog/exercise.png" alt="Exercise">
        <img src="/Images/Blog/hearthealth.png" alt="Heart Health">
        <img src="/Images/Blog/stressmanagement.png" alt="Stress management">
    </div>

<?php
    require 'footer.php';
?>
</body>


</html>