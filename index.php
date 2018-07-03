<?php 

if (isset($_POST['validate'])) {
    $secret = '6LdsKWIUAAAAANxZoQJs3k9XVKnQTm-kfcmgWbna';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $captcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result = json_decode($captcha, true);
    echo $result['success'] ? 'Success' : 'Failed';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google reCaptcha</title>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    
    <form method="POST">
        <div class="g-recaptcha" data-sitekey="6LdsKWIUAAAAAPdYUVyUPjYEFnY7Kch5TkHfteHT"></div>
        <input type="submit" name="validate" value="Validate">
    </form>
</body>
</html>