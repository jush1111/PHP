<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $zmienna1 = $_POST['imie'];
        echo "podane imie" $zmienna1 <br>;
        $zmienna2 = $_POST['nazwisko'];
        echo "podane nazwisko" $zmienna2 <br>;
        $zmienna3 = $_POST['data_urodzenia'];
        echo "podana data urodzenia" $zmienna3 <br>;
        $zmienna4 = $_POST['numer_telefonu'];
        echo "podany numer telefonu" $zmienna4 <br>;
        $zmienna5 = $_POST['adres_email'];
        echo "podany adres email" $zmienna5 <br>;
        $zmienna6 = $_POST['adres_zamieszkania'];
        echo "podany adres zamieszkania" $zmienna6 <br>;
        $zmienna7 = $_POST['numer_domu'];
        echo "podany numer domu" $zmienna7 <br>;
        $zmienna8 = $_POST['kod_pocztowy'];
        echo "podany kod_pocztowy" $zmienna8 <br>;
    </p>
</body>
</html>