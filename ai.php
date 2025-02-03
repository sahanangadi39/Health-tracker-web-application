<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_message = $_POST["message"];
    $url = "http://127.0.0.1:5000/chat";

    $data = ["message" => $user_message];

    $options = [
        "http" => [
            "header"  => "Content-type: application/x-www-form-urlencoded",
            "method"  => "POST",
            "content" => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    $response_data = json_decode($response, true);
}

// $_SESSION['chatbotmessages'] = '';
if (isset($_POST['message'])) {
    $_SESSION['chatbotmessages'] = $_SESSION['chatbotmessages'] .  '<div class="user-response-container">
    <div class="user-response">
      <div class="user-response-text">'
        . $user_message .
        '</div>
      <img src="/Images/ai/user-image.png">
 </div>
<p> ' . date("h:i a") . '</p>
</div>' .

        '<div class="bot-response-container">
<div class="bot-response">
<img src="/Images/ai/bot-image.png">
<div class="bot-response-text">'
        . $response_data["response"] .

        '</div>
</div>
<p>' . date("h:i a") . '</p>
</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Fitforce</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
    <link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/Css/ai.css">
</head>

<body>
    <?php require 'navbar.php'; ?>

    <div id="ai">

        <div id="ai-logo">
            <img src="/Images/ai page.png" alt="Bot">
            <!-- <img src="/Images/user-img.svg" alt="user image"> -->
            <svg width="295" height="295" viewBox="0 0 295 295" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group 1000005574">
                    <circle id="Ellipse 43" cx="147.34" cy="147.341" r="129.985" stroke="#82E8A8" stroke-width="3" />
                    <circle id="Ellipse 44" cx="147.34" cy="147.34" r="146.84" stroke="#82E8A8" />
                    <circle id="Ellipse 45" cx="147.34" cy="147.34" r="139.365" stroke="#82E8A8" />
                    <circle id="Ellipse 39" cx="147.34" cy="148.659" r="112.577" stroke="#82E8A8" stroke-width="11" />
                    <image x="44" y = "47" href="/Images/useravatar.png" />
                </g>
            </svg>
        </div>


        <div id="ai-chat">

            <div id="ai-chat-up">

                <?php
                echo $_SESSION['chatbotmessages'];
                ?>

            </div>

            <div id="ai-chat-down">

                <!-- call icon  -->
                <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_117_155)">
                        <path d="M57.5666 5H23.28C15.9457 5 10 10.9457 10 18.28V52.5666C10 59.9009 15.9457 65.8466 23.28 65.8466H57.5666C64.9009 65.8466 70.8466 59.9009 70.8466 52.5666V18.28C70.8466 10.9457 64.9009 5 57.5666 5Z" fill="#D9D9D9" fill-opacity="0.27" />
                        <path d="M57.5667 5.66406H23.2801C16.3125 5.66406 10.6641 11.3125 10.6641 18.2801V52.5667C10.6641 59.5343 16.3125 65.1827 23.2801 65.1827H57.5667C64.5343 65.1827 70.1827 59.5343 70.1827 52.5667V18.2801C70.1827 11.3125 64.5343 5.66406 57.5667 5.66406Z" stroke="url(#paint0_linear_117_155)" stroke-width="1.328" />
                    </g>
                    <path d="M40 53C50.4934 53 59 44.4934 59 34C59 23.5066 50.4934 15 40 15C29.5066 15 21 23.5066 21 34C21 44.4934 29.5066 53 40 53Z" fill="#DA3F3A" />
                    <path d="M36 25C36.5 25 38.5 29.5 38.5 30C38.5 31 37 32 36.5 33C36 34 37 35 38 36C38.39 36.39 40 38 41 37.5C42 37 43 35.5 44 35.5C44.5 35.5 49 37.5 49 38C49 40 47.5 41.5 46 42C44.5 42.5 43.5 42.5 41.5 42C39.5 41.5 38 41 35.5 38.5C33 36 32.5 34.5 32 32.5C31.5 30.5 31.5 29.5 32 28C32.5 26.5 34 25 36 25Z" fill="#F5F5F5" stroke="#F5F5F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                        <filter id="filter0_d_117_155" x="0.07306" y="0.03653" width="80.7006" height="80.7006" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4.96347" />
                            <feGaussianBlur stdDeviation="4.96347" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_155" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_155" result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_117_155" x1="7.76806" y1="97.3561" x2="77.0421" y2="96.2541" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>


                <!-- microphone icon  -->
                <svg width="82" height="81" viewBox="0 0 82 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_117_156)">
                        <path d="M58.1425 5H23.856C16.5216 5 10.5759 10.9457 10.5759 18.28V52.5666C10.5759 59.9009 16.5216 65.8466 23.856 65.8466H58.1425C65.4769 65.8466 71.4225 59.9009 71.4225 52.5666V18.28C71.4225 10.9457 65.4769 5 58.1425 5Z" fill="#D9D9D9" fill-opacity="0.27" />
                        <path d="M58.1426 5.66406H23.856C16.8884 5.66406 11.24 11.3125 11.24 18.2801V52.5667C11.24 59.5343 16.8884 65.1827 23.856 65.1827H58.1426C65.1102 65.1827 70.7586 59.5343 70.7586 52.5667V18.2801C70.7586 11.3125 65.1102 5.66406 58.1426 5.66406Z" stroke="url(#paint0_linear_117_156)" stroke-width="1.328" />
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9829 35.426C21.9829 45.927 30.4969 54.44 40.9979 54.44C51.4989 54.44 60.0129 45.927 60.0129 35.426C60.0129 24.924 51.4989 16.411 40.9979 16.411C30.4969 16.411 21.9829 24.924 21.9829 35.426ZM38.6149 37.116C39.2959 37.796 40.1219 38.137 41.0939 38.137C42.0659 38.137 42.892 37.796 43.572 37.116C44.253 36.436 44.593 35.609 44.593 34.637V27.639C44.593 26.667 44.253 25.841 43.572 25.16C42.892 24.48 42.0659 24.14 41.0939 24.14C40.1219 24.14 39.2959 24.48 38.6149 25.16C37.9349 25.841 37.5949 26.667 37.5949 27.639V34.637C37.5949 35.609 37.9349 36.436 38.6149 37.116ZM39.9269 42.715V46.301H42.2599V42.715C44.2819 42.443 45.9539 41.539 47.2759 40.003C48.5979 38.467 49.2589 36.679 49.2589 34.637H46.926C46.927 36.251 46.3589 37.626 45.2209 38.763C44.0819 39.9 42.7069 40.469 41.0939 40.469C39.4809 40.47 38.106 39.902 36.968 38.764C35.831 37.627 35.262 36.251 35.262 34.637H32.929C32.929 36.679 33.5899 38.467 34.9119 40.003C36.2339 41.539 37.9059 42.443 39.9269 42.715Z" fill="#3A49DA" />
                    <defs>
                        <filter id="filter0_d_117_156" x="0.648988" y="0.03653" width="80.7006" height="80.7006" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4.96347" />
                            <feGaussianBlur stdDeviation="4.96347" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_156" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_156" result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_117_156" x1="8.34399" y1="97.3561" x2="77.618" y2="96.2541" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>

                <!-- video icon -->
                <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_117_157)">
                        <path d="M57.7197 5H23.433C16.0987 5 10.1531 10.9457 10.1531 18.28V52.5666C10.1531 59.9009 16.0987 65.8466 23.433 65.8466H57.7197C65.054 65.8466 70.9996 59.9009 70.9996 52.5666V18.28C70.9996 10.9457 65.054 5 57.7197 5Z" fill="#D9D9D9" fill-opacity="0.27" />
                        <path d="M57.7197 5.66406H23.4331C16.4655 5.66406 10.8171 11.3125 10.8171 18.2801V52.5667C10.8171 59.5343 16.4655 65.1827 23.4331 65.1827H57.7197C64.6874 65.1827 70.3357 59.5343 70.3357 52.5667V18.2801C70.3357 11.3125 64.6874 5.66406 57.7197 5.66406Z" stroke="url(#paint0_linear_117_157)" stroke-width="1.328" />
                    </g>
                    <path d="M38.015 54.029C27.513 54.029 19 45.516 19 35.015C19 24.513 27.513 16 38.015 16C48.516 16 57.029 24.513 57.029 35.015C57.029 45.516 48.516 54.029 38.015 54.029Z" fill="#3A49DA" />
                    <path d="M32 28.5C31.271 28.5 30.571 28.79 30.055 29.305C29.54 29.821 29.25 30.521 29.25 31.25V38.75C29.25 39.479 29.54 40.179 30.055 40.695C30.571 41.21 31.271 41.5 32 41.5H40.5C41.229 41.5 41.929 41.21 42.445 40.695C42.96 40.179 43.25 39.479 43.25 38.75V37.156L46.669 40.201C47.474 40.918 48.75 40.346 48.75 39.267V30.365C48.75 29.285 47.474 28.714 46.669 29.431L43.25 32.476V31.25C43.25 30.521 42.96 29.821 42.445 29.305C41.929 28.79 41.229 28.5 40.5 28.5H32Z" fill="#F5F5F5" />
                    <defs>
                        <filter id="filter0_d_117_157" x="0.226136" y="0.03653" width="80.7006" height="80.7006" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4.96347" />
                            <feGaussianBlur stdDeviation="4.96347" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_157" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_157" result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_117_157" x1="7.92114" y1="97.3561" x2="77.2001" y2="96.2541" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>

                <!-- message input  -->
                <form action="ai.php" method="post">
                    <input type="text" name="message" id="message">

                    <!-- send button  -->
                    <button>
                        <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_117_158)">
                                <path d="M57.5667 5H23.28C15.9457 5 10 10.9457 10 18.28V52.5666C10 59.9009 15.9457 65.8466 23.28 65.8466H57.5667C64.901 65.8466 70.8466 59.9009 70.8466 52.5666V18.28C70.8466 10.9457 64.901 5 57.5667 5Z" fill="#D9D9D9" fill-opacity="0.27" />
                                <path d="M57.5627 5.66406H23.2761C16.3085 5.66406 10.6602 11.3125 10.6602 18.2801V52.5667C10.6602 59.5343 16.3085 65.1827 23.2761 65.1827H57.5627C64.5304 65.1827 70.1787 59.5343 70.1787 52.5667V18.2801C70.1787 11.3125 64.5304 5.66406 57.5627 5.66406Z" stroke="url(#paint0_linear_117_158)" stroke-width="1.328" />
                            </g>
                            <path d="M40.01 54.029C29.51 54.029 21 45.516 21 35.015C21 24.513 29.51 16 40.01 16C50.52 16 59.03 24.513 59.03 35.015C59.03 45.516 50.52 54.029 40.01 54.029Z" fill="#3A49DA" />
                            <path d="M34.6899 42.896C34.2899 43.065 33.9 43.028 33.54 42.785C33.18 42.542 33 42.189 33 41.726V36.031L42.64 33.5L33 30.969V25.274C33 24.81 33.18 24.457 33.54 24.214C33.9 23.972 34.2899 23.935 34.6899 24.103L53.25 32.329C53.75 32.561 54 32.951 54 33.5C54 34.048 53.75 34.438 53.25 34.67L34.6899 42.896Z" fill="#F5F5F5" />
                            <defs>
                                <filter id="filter0_d_117_158" x="0.0691538" y="0.03653" width="80.7045" height="80.7006" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4.96347" />
                                    <feGaussianBlur stdDeviation="4.96347" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_158" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_158" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_117_158" x1="7.77016" y1="97.3561" x2="77.0401" y2="96.2541" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </button>

                </form>

            </div>
        </div>
    </div>




    <?php require 'footer.php'; ?>
    <script src="/Js/ai.js"></script>
</body>

</html>