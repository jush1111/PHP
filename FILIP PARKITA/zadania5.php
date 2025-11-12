<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    <label> Podaj liczbę:</label>
    <input type="number" name="liczba" required>
    <input type="submit" value="konwertuj">
</form>


<?php
if (isset($_POST['liczba'])) {
    $liczba = (int)$_POST['liczba'];
    echo "<p> W systemie binarnym: " . decbin($liczba) . "</p>";
}
?>
</body>
</html>