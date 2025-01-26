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

        <div class="blogimagecontainer">
            <img onclick="window.location.href='nutrition.php'" src="/Images/Blog/nutrition.png" alt="Nutrition">
            <div class="blogimagetext">
                <h2>Nutrition</h2>
                <div onclick="window.location.href='nutrition.php'" class="showonhovercontainer">
                    Fuel you body Right: Discover how balanced, nutrient-rich meals bootst energy.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>

        </div>

        <div class="blogimagecontainer">
            <img onclick="window.location.href='hydration.php'" src="/Images/Blog/hydration.png" alt="Hydration">
            <div class="blogimagetext">
                <h2>Hydration</h2>
                <div onclick="window.location.href='hydration.php'" class="showonhovercontainer">
                   Stay Refreshed: Learn the importance of proper hydration.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>
        </div>

        <div class="blogimagecontainer">
            <img onclick="window.location.href='goodposture.php'" src="/Images/Blog/goodposture.png" alt="Good posture">
            <div class="blogimagetext">
                <h2>Good posture</h2>
                <div onclick="window.location.href='goodposture.php'" class="showonhovercontainer">
                    Sit straight, Feel Strong: Maintaining good posture.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>
        </div>

        <div class="blogimagecontainer">
            <img onclick="window.location.href='exercise.php'" src="/Images/Blog/exercise.png" alt="Exercise">
            <div class="blogimagetext">
                <h2>Exercise</h2>
                <div onclick="window.location.href='exercise.php'" class="showonhovercontainer">
                    Move to Thrive: Regular physical activities strengthens your body.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>
        </div>

        <div class="blogimagecontainer">
            <img onclick="window.location.href='hearthealth.php'" src="/Images/Blog/hearthealth.png" alt="Heart Health">
            <div class="blogimagetext">
                <h2>Heart Health</h2>
                <div onclick="window.location.href='hearthealth.php'" class="showonhovercontainer">
                    Care for you Heart: Simple habits can make a big difference.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>

        </div>

        <div class="blogimagecontainer">
            <img onclick="window.location.href='stressmanagement.php'" src="/Images/Blog/stressmanagement.png" alt="Stress management">
            <div class="blogimagetext">
                <h2>Stress Management</h2>
                <div onclick="window.location.href='stressmanagement.php'" class="showonhovercontainer">
                    Find you Calm: Master stress management techniques.
                    <br>
                    <p>Learn more ></p>
                </div>
            </div>

        </div>
    </div>

    <?php
    require 'footer.php';
    ?>
</body>


</html>