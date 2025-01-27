<?php
//    session_start();
//     if((!isset($_SESSION["email"]))){
//         header("location: login.php");
//         die();
//     }

$username = "Sahan";
$continuework_inscreentime = 4.3; //in hours
$totalofficeworingtime = 7; // in hours
$percentage = $continuework_inscreentime / $totalofficeworingtime;
$screentime = 952 - 952 * $percentage; // in percentage
$average_screen_time = 6; // in hours
$break_compliance = 60; // in percentage
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/dash.css">
    <link rel="stylesheet" href="/Css/Blog.css">
    <link rel="stylesheet" href="/Css/home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <style>
        @keyframes anime {
            100% {
                stroke-dashoffset: <?php echo $screentime ?>;
            }
        }
    </style>

</head>

<body>
    <!-- navbar  -->
    <?php
    require 'navbar.php';
    ?>


    <!-- Dashboard  -->
    <div class="upperdashboard">

        <!-- Left side  -->
        <div id="upperleftdashboard">

            <h1>Hey &nbsp; <?php echo $username; ?>,</h1>
            <p>Here is how you are doing today</p>


            <div id="rewards-container">
                <?php require 'vectors/rewards.php'  ?>
            </div>

            <div id="leftgrid">
                <?Php
                require 'vectors/leftgrid-svg.php'

                ?>
            </div>



        </div>

        <!-- Right side  -->
        <div id="upperrightdashboard">

            <!-- Progress bar  -->
            <div id="rightprogressbar">

                <svg id="progress" width="334" height="334" viewBox="0 0 334 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_di_17_7)">
                        <path d="M330 163C330 253.022 257.022 326 167 326C76.9776 326 4 253.022 4 163C4 72.9776 76.9776 0 167 0C257.022 0 330 72.9776 330 163ZM27.1366 163C27.1366 240.244 89.7556 302.863 167 302.863C244.244 302.863 306.863 240.244 306.863 163C306.863 85.7556 244.244 23.1366 167 23.1366C89.7556 23.1366 27.1366 85.7556 27.1366 163Z" fill="#3A49DA" />
                    </g>
                    <circle id="stroke-circle" cx="167" cy="163" r="151.5" stroke="#84FF5F" stroke-width="24" />
                    <defs>
                        <filter id="filter0_di_17_7" x="0" y="0" width="334" height="334" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_17_7" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_17_7" result="shape" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="shape" result="effect2_innerShadow_17_7" />
                        </filter>
                    </defs>
                </svg>

                <div id="innerprogressbar">
                    <svg width="76" height="75" viewBox="0 0 76 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_567)">
                            <path d="M70.8126 37.4991C72.3507 39.5255 73.5104 41.735 74.2916 44.1276C75.0729 46.5201 75.4757 48.9982 75.5001 51.5616C75.5001 54.8087 74.8898 57.8483 73.6691 60.6803C72.4484 63.5123 70.776 66.0026 68.652 68.151C66.528 70.2994 64.0499 71.9718 61.2179 73.1681C58.3859 74.3644 55.3341 74.9747 52.0626 74.9991C48.8156 74.9991 45.776 74.3888 42.944 73.1681C40.1119 71.9474 37.6217 70.275 35.4733 68.151C33.3248 66.027 31.6525 63.549 30.4562 60.7169C29.2599 57.8849 28.6495 54.8331 28.6251 51.5616H5.18762C4.52844 51.5616 3.91809 51.4396 3.35657 51.1954C2.79504 50.9513 2.30676 50.6217 1.89172 50.2067C1.47668 49.7916 1.13489 49.2911 0.866333 48.7052C0.597778 48.1193 0.475708 47.5089 0.500122 46.8741V9.37415C0.500122 8.71497 0.622192 8.10461 0.866333 7.54309C1.11047 6.98157 1.44006 6.49329 1.8551 6.07825C2.27014 5.66321 2.77063 5.32141 3.35657 5.05286C3.9425 4.7843 4.55286 4.66223 5.18762 4.68665H66.1251C66.7843 4.68665 67.3947 4.80872 67.9562 5.05286C68.5177 5.297 69.006 5.62659 69.421 6.04163C69.8361 6.45667 70.1779 6.95715 70.4464 7.54309C70.715 8.12903 70.837 8.73938 70.8126 9.37415V37.4991ZM29.1012 46.8741C29.6383 44.1398 30.6149 41.6251 32.0309 39.3302C33.4469 37.0353 35.1803 35.0577 37.2311 33.3976C39.2819 31.7374 41.5646 30.4435 44.0792 29.5157C46.5939 28.588 49.255 28.1241 52.0626 28.1241C54.6017 28.1241 57.0675 28.5148 59.4601 29.296C61.8527 30.0773 64.0743 31.2491 66.1251 32.8116V9.37415H5.18762V46.8741H29.1012ZM52.0626 70.3116C54.6505 70.3116 57.0797 69.8234 59.3502 68.8468C61.6207 67.8702 63.5983 66.5275 65.2828 64.8185C66.9674 63.1095 68.3102 61.1198 69.3112 58.8492C70.3121 56.5787 70.8126 54.1495 70.8126 51.5616C70.8126 48.9738 70.3243 46.5446 69.3478 44.274C68.3712 42.0035 67.0284 40.026 65.3195 38.3414C63.6105 36.6569 61.6207 35.3141 59.3502 34.3131C57.0797 33.3121 54.6505 32.8116 52.0626 32.8116C49.4747 32.8116 47.0455 33.2999 44.775 34.2765C42.5045 35.2531 40.527 36.5958 38.8424 38.3048C37.1578 40.0138 35.8151 42.0035 34.8141 44.274C33.8131 46.5446 33.3126 48.9738 33.3126 51.5616C33.3126 54.1495 33.8009 56.5787 34.7775 58.8492C35.754 61.1198 37.0968 63.0973 38.8058 64.7819C40.5148 66.4664 42.5045 67.8092 44.775 68.8102C47.0455 69.8112 49.4747 70.3116 52.0626 70.3116ZM52.0626 51.5616H61.4376V56.2491H47.3751V37.4991H52.0626V51.5616Z" fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_567">
                                <rect width="75" height="75" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <h3><?php echo $continuework_inscreentime; ?> Hours</h3>
                    <p>Screen Time</p>

                </div>

                <!-- screen time disclamer messsage  -->
                <div class="disclamer">
                    <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_1_574" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="50" height="44">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9993 1.41602L1.16602 42.5827H48.8327L24.9993 1.41602Z" fill="white" stroke="white" stroke-width="2" stroke-linejoin="round" />
                            <path d="M25 33.9154V34.9987M25 16.582L25.0087 27.4154" stroke="black" stroke-width="2" stroke-linecap="round" />
                        </mask>
                        <g mask="url(#mask0_1_574)">
                            <path d="M-1 -4H51V48H-1V-4Z" fill="#FF5F5F" />
                        </g>
                    </svg>
                    <p>You have been working for almost <?php echo $continuework_inscreentime ?> hours without breaks</p>
                </div>

            </div>

            <!-- track your health button  -->

            <button>
                Track your Health
            </button>

        </div>

    </div>

    <!-- Health insights middle page  -->
    <div id="health-insights-container">

        <h3>Health Analytics</h3>
        <div id="health-insights">


            <div id="graph-freq-container">
                <select name="graph-freq" id="graph-freq">
                    <option value="Weekely">Weekely</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">yearly</option>
                </select>
                <div class="metric-container">
                    <div class="metric">Screen time</div>
                    <div class="metric">Weight</div>
                    <div class="metric">hydration</div>
                    <div class="metric">Steps</div>
                    <div class="metric">Posture</div>
                </div>
            </div>

            <div><?php require 'vectors/rectangle-graphs.php' ?></div>

            <div id="insights-text-container">
                <h3>insights</h3>
                <br><br>
                <p>Screen Time Average :<?php echo $average_screen_time ?> hours</p>
                <br>
                <p>Break Compliance: <?php echo $break_compliance ?>% adherence to recommended breaks</p>
                <br>
                <p>Activity Level: Sedentary, with minimal physical activity</p>
            </div>
        </div>

    </div>



    <!-- blogs grid  -->
    <h2 style="margin-left: 10vw;">Articles</h2>
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

    <?php require 'footer.php'; ?>



</body>

</html>