<?php
function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+1234567890';
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>   
    <h2>Generatore di Password Casuali</h2>
    <form action="index.php" method="GET">
        <label for="password_length">Lunghezza della password:</label>
        <input type="number" id="password_length" name="password_length" min="1" max="100" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php echo 'Password generata:' . ' ' . $random_password ?>
</body>
</html>