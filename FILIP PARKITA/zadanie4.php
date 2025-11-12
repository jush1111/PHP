<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label> Początek predziału:</label>
    <input type="number" name="start" required><br>
    <label> Koniec przedziału:</label>
    <input type="number" name="end" required><br>
    <input type="submit" value="Pokaż liczby">
</form>

    <?php
    if(isset($_POST['start'], $_POST['end'])) {
        $start = (int)$_POST['start'];
        $end = (int)$_POST['end'];

        if($start > $end) {
           echo "<p>Błąd: początek musi byc mniejszy  od konca </p>";
            }
        } else {
            echo "<p>Liczby podzielne przez 3:</p>";
            for ($i = $start; $i <= $end; $i++) {
                if ($i % 3 == 0) {
                    echo $i . "<br>";
                }
        }
    }
    ?>
</body>
</html>