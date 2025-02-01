<?php
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
    echo  $response_data["response"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
</head>
<body>
    <h2>Simple Chatbot</h2>
    <form method="post">
        <input type="text" name="message" placeholder="Type your message..." required>
        <input type="submit" value="Send">
    </form>
</body>
</html>
