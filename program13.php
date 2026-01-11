<?php
function generateCaptchaCode($length = 6) {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $captcha = "";
    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $max)];
    }

    return $captcha;
}

echo "Captcha Code is: " . generateCaptchaCode();
?>
