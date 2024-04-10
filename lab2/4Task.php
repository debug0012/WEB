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
    function substring($string, $n) {
        // Перевірка, чи рядок не є порожнім
        if (strlen($string) <= $n) {
            return $string;
        }
    
        // Розділення рядка на слова
        $words = explode(' ', $string);
        $result = '';
    
        // Побудова результуючого рядка
        foreach ($words as $word) {
            // Перевірка, чи можна додати слово до результуючого рядка
            if (strlen($result) + strlen($word) <= $n) {
                // Додавання слова до результуючого рядка
                $result .= $word . ' ';
            } else {
                break; // Вийти з циклу, якщо додавання слова перевищить обмеження
            }
        }
    
        // Повернення результуючого рядка без останнього пробілу
        return rtrim($result);
    }
    
    // Приклад використання функції
    $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
    echo "Стрічка: ".$string;
    echo "<br>";
    $n = 20;
    echo "К-сть потрібних символів: ".$n;
    echo "<br>";

    echo "Результат: " . substring($string, $n);
    ?>