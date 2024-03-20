<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 4</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 4<br><br>";
    ?>
    <img src="4Task.png"><br><br>
    <?php
    $array = array(
        array(1, 5, 3, 8, 2),
        array(7, 8, 4, 6, 2),
        array(3, 2, 6, 1, 0),
        array(4, 8, 9, 3, 5),
        array(2, 1, 7, 4, 6)
    );
    echo "Масив:<br>";

    foreach ($array as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
    $maxValue = $array[0][0];
$maxRow = 0;
$maxColumn = 0;

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] > $maxValue) {
            $maxValue = $array[$i][$j];
            $maxRow = $i;
            $maxColumn = $j;
        }
    }
}
    
    echo "Максимальний елемент масиву: $maxValue<br>";
    echo "Індекси максимального елемента: [$maxRow][$maxColumn]";
?>
</body>
</html>