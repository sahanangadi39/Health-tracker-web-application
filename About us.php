<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Css/aboutus.css">
    <link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">
</head>

<body>
    <?php
    require 'navbar.php';
    ?>

    <div id="aboutusimage">
        <div id="image">
            <img style="margin: 260px auto 0px 290px;" height="60px" width="fit-content" src="/Images/logo.png" alt="logo">
            <img style="margin: 55px auto 0px 290px;" height="32px" width="fit-content" src="/Images/quote.png" alt="quote">
        </div>
    </div>
    <br>
    <div id="aboutustext">
        <p>
            At Fit force, we are committed to transforming workplace wellness by providing
            innovative health tracking solutions tailored for modern organisations.
            Our mission is to empower businesses and employees with actionable insights that
            promote well-being, enhance productivity, and foster a healthier work environment.
            With rising concerns over work-related health issues such as stress, obesity,
            and lifestyle diseases, we offer a comprehensive, AI-driven platform that helps
            companies proactively monitor and improve employee health.
        </p>
        <br><br>

        <h1> Why Choose Us?</h1>
        <br><br>

        <p><b>Data-Driven Insights:</b> Leverage real-time analytics to make informed decisions about employee well-being.</p>
        <p><b>Personalized Wellness Plans:</b> Tailored health recommendations based on individual and organizational goals. </p>
        <p><b>Seamless Integration:</b> Easily integrates with existing HR and workplace systems.</p>
        <p><b>Privacy First:</b> We prioritize data security and confidentiality, ensuring compliance with industry standards. </p>
        <p><b>Proven ROI:</b> Our platform helps organizations achieve significant cost savings through reduced healthcare expenses and improved workforce productivity.</p>
        <br>
        <p> Join us in our mission to create healthier workplaces, because when employees thrive, businesses succeed.</p>
        <br><br>

    </div>
    <?php
    require 'footer.php'
    ?>
</body>

</html>