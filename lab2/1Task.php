<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання 1</title>
</head>
<body>
    <?php
    // Це PHP-код
    echo "Завдання 1<br><br>";
    
?>
<img src="1Task.png">
 <br>
<h2>Перевірка на високосний рік, використано JS, тому що умовність $SERVER в PHP не перевіряється ($_SERVER["REQUEST_METHOD"] == "POST")</h2>

<label for="year">Введіть рік (від 1 до 9999):</label><br>
<input type="text" id="year" name="year"><br>
<button onclick="checkLeapYear()">Перевірити</button>

<p id="result"></p>

<script>
    function checkLeapYear() {
        var yearInput = document.getElementById("year").value;
        var year = parseInt(yearInput);

        var resultElement = document.getElementById("result");

        if (isNaN(year) || year < 1 || year > 9999) {
            resultElement.textContent = "Будь ласка, введіть рік у діапазоні від 1 до 9999";
            return;
        }

        if ((year % 4 == 0 && year % 100 != 0) || (year % 400 == 0)) {
            resultElement.textContent = year + " - високосний рік";
        } else {
            resultElement.textContent = year + " - не є високосним роком";
        }
    }
</script>
 
</body>
</html>