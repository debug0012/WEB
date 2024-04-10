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
 // Шлях до файлу source.txt
$sourceFile = 'source.txt';
// Шлях до файлу, в який буде записаний випадковий рядок
$outputFile = 'output.txt';

// Перевірка наявності файлу source.txt
if (!file_exists($sourceFile)) {
    die("Файл $sourceFile не знайдено.");
}

 // Читаємо вміст файлу в масив рядків
$lines = file('source.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Перевірка наявності рядків у файлі
if (empty($lines)) {
    die("Файл $sourceFile порожній або не містить дійсних рядків.");
}

// Вибираємо випадковий рядок
$randomLine = $lines[array_rand($lines)];

// Виводимо випадковий рядок
echo "Випадковий рядок: $randomLine <br>";

// Записуємо випадковий рядок у файл
file_put_contents('output.txt', $randomLine);

echo "Рядок був записаний у файл 'output.txt'.";
 ?>