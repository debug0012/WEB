<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 5</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 5<br><br>";
    
?>
 <img src="5Task.png"><br><br>
 <?php
 
$A = array(2, -5, 7, -8, 10, 0, 3, -6);
$B = array(-3, 6, -9, 12, 15, -18, 21, 24);

$positive_elements_A = 0;
$positive_elements_B = 0;

foreach ($A as $element) {
    if ($element > 0) {
        $positive_elements_A++;
    }
}

foreach ($B as $element) {
    if ($element > 0) {
        $positive_elements_B++;
    }
}

$total_positive_elements = $positive_elements_A + $positive_elements_B;
echo "Масив A:<br>";

    foreach ($A as $value) {
            echo $value . " ";
    }
   echo "<br>";
    echo "Масив B:<br>";
    foreach ($B as $value) {
        echo $value . " ";
    }
    echo "<br>";
echo "Загальна кількість додатних елементів у масиві A: " . $positive_elements_A . "<br>";
echo "Загальна кількість додатних елементів у масиві B: " . $positive_elements_B . "<br>";
echo "Загальна кількість додатних елементів у обох масивах: " . $total_positive_elements . "<br>";

 
 ?>
</body>
</html>