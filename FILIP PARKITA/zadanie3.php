<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="liczby">Podaj liczby oddzielone spacją (zakoncz wpisujac 0 ):</label><br>
    <input type="text" id="liczby" name="liczby" required>
    <input type="submit" value="Oblicz">
</form>
<?php
if (!empty($_POST['liczby'])) {
    $tablica = explode(",", $_POST['liczby']);
    $suma = 0;
    $ilosc = 0;

    foreach ($tablica as $liczba) {
       $liczba = (int)$liczba;
       if ($liczba == 0) break;
       $suma += $liczba;
       $ilosc++;
    }
    echo "<p>Suma: $suma<br> ilość liczb: $ilosc</p>";
}
?>
</body>
</html>