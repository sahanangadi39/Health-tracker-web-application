<?php
session_start();
require 'databaseconnection.php';
$session_email = $_SESSION['email'];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$maratialstatus = $_POST['maratial_status'];
$height = $_POST['Height'];
$weight = $_POST['Weight'];
$healthcondition = $_POST['healthCondition'];
$disability = $_POST['Disability'];

$sqlquery = "update users set name = '$name', sex = '$sex',age = '$age', maratialStatus = '$maratialstatus', healthCondition = '$healthcondition', disability = '$disability', height = '$height', weight = '$weight' where email = '$session_email';";
if($name != '' && $age != '' && $sex != '' && $maratialstatus != '' && $height !='' ){
    $connection->query($sqlquery);
    header("location: home.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health is Wealth</title>
    <link rel="stylesheet" href="/Css/login.css">
    <link rel="stylesheet" href="/Css/onboarding.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">


</head>

<body>
    <div class="login">
        <img src="/Images/logo.png" alt="Fitforce">
        <h3>Lets get you started</h3>
        <form action="" method="post">
            <div id="section1">
                <input placeholder="Name" required type="text" name="name" id="nameinput">
                <input size="8" placeholder="Age" required min="0" max="1000" type="number" name="age" id="ageinput">
                <select required name="sex" id="sexinput">
                    <option value="" disabled selected>Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="other">others</option>
                </select>
                <select name="maratial_status" id="maratial_status">
                    <option value="" disabled selected>Maratial Status</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Un-Married</option>
                </select>
            </div>
            <hr>
            <div id="section2">
                <div class="heightinput">
                    <img src="/Images/height.png" alt="height icon">
                    <br>
                    <label for="Height">Height: &nbsp;&nbsp;&nbsp;</label>
                    <input min="0" max="1000" type="number" name="Height" id="Height"> cm
                </div>

                <div class="weightinput">
                    <img src="/Images/weight.png" alt="weight icon">
                    <br>
                    <label for="Weight">Weight: &nbsp;&nbsp;&nbsp</label>
                    <input min="0" max="200" type="number" name="Weight" id="Weight"> kg
                </div>

                <div class="rightsection">
                    <select name="healthCondition" id="healthCondition">
                        <option value="" disabled selected>Health Condition</option>
                        <option value="Healthy">Healthy</option>
                        <option value="Un-Healthy">Un-Healthy</option>
                    </select>

                    <select name="Disability" id="Disability">
                        <option selected disabled value="">Disability</option>
                        <option value="No-Disability">No-Disability</option>
                        <option value="Blind">Blind</option>
                        <option value="Deaf">Deaf</option>
                        <option value="Dumb">Dumb</option>
                        <option value="physical-Disability">Physical-Disability</option>
                    </select>
                </div>

            </div>
            <hr>

            <p>Health topics you are interested</p>
            <div id="section3">
                <button class="interestedtopics" type="button">Exercise</button>
                <button class="interestedtopics" type="button">Nutrition</button>
                <button class="interestedtopics" type="button">Posture</button>
                <button class="interestedtopics" type="button">Hydration</button>
                <button class="interestedtopics" type="button">Stress</button>
                <button class="interestedtopics" type="button">Anxiety</button>
                <button class="interestedtopics" type="button">Mental Health</button>
                <button class="interestedtopics" type="button">Heart health</button>
                <button class="interestedtopics" type="button">Gut Health</button>
                <button class="interestedtopics" type="button">Eye Health</button>
                <button class="interestedtopics" type="button">Spine</button>
                <button class="interestedtopics" type="button">Infection</button>
                <button class="interestedtopics" type="button">Food</button>
                <button class="interestedtopics" type="button">Weight Loss</button>
                <button class="interestedtopics" type="button">Weight Gain</button>
                <button class="interestedtopics" type="button">Skin</button>
                <button class="interestedtopics" type="button">Hair</button>
                <button class="interestedtopics" type="button">Dental</button>
            </div>
            <button class="submitbtn" type="submit">Launch</button>
        </form>



    </div>
    <script src="/Js/onboarding.js"></script>
</body>

</html>