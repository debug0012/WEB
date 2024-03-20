<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 6</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 6<br><br>";
    
?>
 <img src="6Task.png"><br>
 <?php
 
 // Рядки для тестування
$string1 = "abcdef";
$string2 = "abcdefgh";
$string3 = "abcde";

// Вилучення середніх букв
$length1 = strlen($string1);
$length2 = strlen($string2);
$length3 = strlen($string3);

$mid1 = floor($length1 / 2);
$mid2 = floor($length2 / 2);
$mid3 = floor($length3 / 2);

if ($length1 % 2 == 0) { // Парна довжина рядка
    $result1 = substr($string1, 0, $mid1 - 1) . substr($string1, $mid1 + 1);
} else { // Непарна довжина рядка
    $result1 = substr($string1, 0, $mid1) . substr($string1, $mid1 + 1);
}

if ($length2 % 2 == 0) { // Парна довжина рядка
    $result2 = substr($string2, 0, $mid2 - 1) . substr($string2, $mid2 + 1);
} else { // Непарна довжина рядка
    $result2 = substr($string2, 0, $mid2) . substr($string2, $mid2 + 1);
}

if ($length3 % 2 == 0) { // Парна довжина рядка
    $result3 = substr($string3, 0, $mid3 - 1) . substr($string3, $mid3 + 1);
} else { // Непарна довжина рядка
    $result3 = substr($string3, 0, $mid3) . substr($string3, $mid3 + 1);
}

echo "Результат для \"$string1\": $result1 <br>";
echo "Результат для \"$string2\": $result2 <br>";
echo "Результат для \"$string3\": $result3 <br>";

 
 ?>
</body>
</html>