<?php 
    include __DIR__ .
    '/functions.php';
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