<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div>
        <?php
         $zmienna1 = $_POST['imie'];
        echo "Podane imię: " . $zmienna1 . "<br>";

        $zmienna2 = $_POST['nazwisko'];
        echo "Podane nazwisko: " . $zmienna2 . "<br>";

        $zmienna3 = $_POST['data_urodzenia'];
        echo "Podana data urodzenia: " . $zmienna3 . "<br>";

        $zmienna4 = $_POST['numer_telefonu'];
        echo "Podany numer telefonu: " . $zmienna4 . "<br>";

        $zmienna5 = $_POST['adres_email'];
        echo "Podany adres email: " . $zmienna5 . "<br>";

        $zmienna6 = $_POST['wykonywany_zawód'];
        echo "wykonywany_zawód: " . $zmienna6 . "<br>";

        $zmienna7 = $_POST['obsługiwane_języki'];
        echo "obsługiwane_języki: " . $zmienna7 . "<br>";
    ?>
    </div>
</body>
</html>