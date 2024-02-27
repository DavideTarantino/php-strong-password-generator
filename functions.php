<?php
function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+01234567890';
    $password = '';
    $chars_length = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $chars_length - 1)];
    }
    return $password;
}

if (isset($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);
    
    $random_password = generateRandomPassword($password_length);
}
?>