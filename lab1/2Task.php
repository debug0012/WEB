<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 2</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 2<br><br>";
    function multipleNumbers($number) {
        $product = 1;
        
        $numberStr = (string)$number;
        
        for ($i = 0; $i < strlen($numberStr); $i++) {
            $digit = (int)$numberStr[$i];
            // Умножение текущей цифры на произведение
            $product *= $digit;
        }
        
        return $product;
    }

    $number = 1234;
    $result = multipleNumbers($number);
    echo "Результат числа $number: $result";
    ?>
 <img src="2Task.png">
 <?php
 
 
 
 ?>
</body>
</html>