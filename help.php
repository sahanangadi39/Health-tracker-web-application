<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
    <link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/Css/help.css">
</head>

<body>
    <?php
    require 'navbar.php';
    ?>

    <!-- Help page -->
    <div id="upperhelp">
        <h1>How can we help you?</h1>
        <div id="searchcontainer">
            <img src="/Images/searchicon.svg" alt="Search">
            <input type="text" name="search" id="search">
        </div>
    </div>


    <div id="lowerlefthelp">
        <h1>FAQS</h1>
        <div id="faqs-container">
            <div class="faqs">
                <div class="faqsvisible"> How does the app work? <img src="/Images/downarrow.svg" alt="˅"> </div>
                <div class="faqsinvisible"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quo? Reprehenderit aut incidunt laboriosam culpa vero vitae consequatur a non, iste minus praesentium dolorem modi dicta officiis. Repudiandae, atque amet assumenda facilis incidunt molestiae beatae quis totam ullam aspernatur voluptate perspiciatis sunt debitis, quibusdam eius suscipit! Accusantium, minus. Quas, at.</div>
            </div>

            <div class="faqs">
                <div class="faqsvisible"> Who can use this app? <img src="/Images/downarrow.svg" alt="˅"> </div>
                <div class="faqsinvisible"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas ipsa dolorem fugit provident perspiciatis nulla eaque eveniet exercitationem qui ipsam nesciunt cumque asperiores fugiat beatae facilis veniam, architecto eligendi totam amet temporibus, tempore iure. Tenetur dicta autem doloribus praesentium odit itaque! At ipsa, amet soluta iste in architecto voluptates!</div>
            </div>

            <div class="faqs">
                <div class="faqsvisible"> Is my health data safe? <img src="/Images/downarrow.svg" alt="˅"> </div>
                <div class="faqsinvisible"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo optio alias adipisci? Adipisci, vero! Aperiam consequuntur aliquam expedita maiores id, quam cum pariatur. Harum similique porro necessitatibus optio quos quisquam modi blanditiis illum, dolore accusantium nam, reprehenderit asperiores odit amet doloribus aperiam sint ipsum excepturi repudiandae neque assumenda atque rem.</div>
            </div>

            <div class="faqs">
                <div class="faqsvisible">Will my employer have access to my health data? <img src="/Images/downarrow.svg" alt="˅"> </div>
                <div class="faqsinvisible"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga corrupti perspiciatis est velit aperiam nihil atque distinctio placeat consequatur alias natus accusamus debitis eveniet nisi quas quos dolorem minima officiis neque sint omnis, reiciendis dolorum ad eaque! Itaque magni fuga voluptas excepturi aliquam iusto ex autem omnis, quaerat facere non?</div>
            </div>

            <div class="faqs">
                <div class="faqsvisible"> How is my data protected? <img src="/Images/downarrow.svg" alt="˅"> </div>
                <div class="faqsinvisible"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo magnam nesciunt omnis optio rem, perspiciatis sit, quidem dignissimos molestiae laboriosam asperiores fuga similique ducimus quae aut voluptas non sunt eveniet illo. Maiores laudantium numquam perferendis adipisci pariatur! Similique explicabo eligendi officia, quidem nesciunt tempore nam molestiae voluptatum, earum nostrum suscipit!</div>
            </div>

        </div>
    </div>




    <?php
    require 'footer.php';
    ?>
    <script src="/Js/help.js"></script>
</body>

</html>