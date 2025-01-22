<?php
$name = "demo Name User";
$age = 24;
$sex = "Female";
$maritalstatus = "Married";
$height = 100;
$weight = 60;

$healthconditoinstatus = "Excellent";
$disabilitystatus = "None";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
    <link rel="stylesheet" href="/Css/profile.css">
    <link rel="stylesheet" href="/Css/onboarding.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require 'navbar.php';
    ?>

    <div id="profile">

        <div id="upperprofile">
            <div id="profilepicturecontainer">
                <img src="/Images/useravatar.png" alt="profile picture">
            </div>
            <div id="profilestatus">
                <div id="name">Name: &nbsp <?php echo $name; ?></div>
                <div id="age-sex-marital">
                    <div id="age">Age: &nbxp <?php echo $age; ?></div>
                    <div id="sex">Sex: &nbsp <?php echo $sex; ?></div>
                    <div id="marital">Marital Status: &nbsp <?php echo $maritalstatus ?> </div>
                </div>
            </div>
        </div>

        <hr>
        <div id="midprofile">
            <div class="heightinput">
                <img src="/Images/height.png" alt="height icon">
                <br>
                <label for="Height">Height: &nbsp;&nbsp;&nbsp;</label>
                <?php echo $height; ?> cm
            </div>

            <div class="weightinput">
                <img src="/Images/weight.png" alt="weight icon">
                <br>
                <label for="Weight">Weight: &nbsp;&nbsp;&nbsp</label>
                <?php echo $weight; ?> kg
            </div>

            <div id="health-disability-container" >
                <div id="healthstatus">Health Condition: &nbsp; <?php echo $healthconditoinstatus; ?></div>
                <div id="Disabilitystatus">Disability: &nbsp;<?php echo $disabilitystatus; ?> </div>
            </div>

        </div>


        <div id="lowerprofile">
            <h3>Health topics you are interested</h3>
            <div id="section3">
                <div>Nutrition</div>
                <div>Exercise</div>
                <div>Posture</div>
                <div>Hydration</div>
                <div>Stress</div>
                <div>Anxiety</div>
                <div>Mental Health</div>
                <div>Heart health</div>
                <div>Gut Health</div>
                <div>Eye Health</div>
                <div>Spine</div>
                <div>Infection</div>
                <div>Food</div>
                <div>Weight Loss</div>
                <div>Weight Gain</div>
                <div>Skin</div>
                <div>Hair</div>
                <div>Dental</div>
            </div>
        </div>

    </div>

    <?php
    require 'footer.php';
    ?>
</body>

</html>