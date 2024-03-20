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
    $array = array(5, 3, 9, 2, 7);
    $min = min($array);
    echo "Масив:";
    foreach ($array as $element) {
        echo $element . " ";
    }
echo "Найменщий елемент у масиві: $min";
?>
</body>
</html>