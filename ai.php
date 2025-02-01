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
    // echo  $response_data["response"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with ai</title>
    <link rel="stylesheet" href="/Css/navigation.css">
    <link rel="stylesheet" href="/Css/footer.css">
    <link rel="shortcut icon" href="/Images/favicon.svg" type="image/x-icon">
</head>
<body>
<?php require 'navbar.php'; ?>
<h1>Fitforce Ai chat </h1>

<form method="post">
        <input type="text" name="message" placeholder="Type your message..." required>
        <input type="submit" value="Send">
    </form>

    <br>

<?php
echo $response_data["response"];
?>

    <?php require 'footer.php'; ?>
</body>
</html>

    <?php
    require 'navbar.php';
    ?>
    <main class="chat-container ">
        <aside class="side-icon">
            <img src="Images/ai page.png" alt="ai-bot icon" class="chat-icon">
            <img src="Images/user-img.svg" alt="user icon" class="chat-icon">
        </aside>
        

        

    </main>


</body>

