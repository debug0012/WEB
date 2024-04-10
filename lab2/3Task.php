<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 3</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 3<br><br>";
    ?>
 <img src="3Task.png"><br><br>
<?php
    function generateRandomString($length) {
        // Стрічка з усіма можлимими символами, які можуть з'явитися у випадковій стрічці
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
    
        // Генерація випадкової стрічки із заданою довжиною
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    
        return $randomString;
    }
    
    // Приклад використання функції для генерації випадкової стрічки довжиною 10, 20, 30 символів
    $randomString = generateRandomString(10);
    echo "Випадкова стрічка: $randomString<br><br>";
    $randomString = generateRandomString(20);
    echo "Випадкова стрічка: $randomString<br><br>";
    $randomString = generateRandomString(30);
    echo "Випадкова стрічка: $randomString<br><br>";


?>
</body>
</html>