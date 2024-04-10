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
    ?>
<img src="2Task.png">
 <br>
 <h2>Визначення годин з градусів, використано JS, тому що умовність $SERVER в PHP не перевіряється ($_SERVER["REQUEST_METHOD"] == "POST")</h2>
 <div id="result"></div>

    <label for="degrees">Введіть градуси:</label><br>
    <input type="text" id="degrees"><br>
    <button onclick="calculateHours()">Розрахувати</button>

    <script>
        function calculateHours() {
            var degreesInput = document.getElementById('degrees');
            var degrees = parseFloat(degreesInput.value);

            var resultDiv = document.getElementById('result');

            if (!isNaN(degrees) && degrees >= 0 && degrees <= 360) {
                var hours = (degrees / 360) * 12;
                resultDiv.innerHTML = "<p>Кількість минулих годин: " + hours + "</p>";
            } else {
                resultDiv.innerHTML = "<p>Будь ласка, введіть градуси у діапазоні від 0 до 360</p>";
            }
        }
    </script>
</body>
</html>