<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $wartosc = 175;
    if($wartosc >= 0 && $wartosc <= 50) {
        echo "Dobra jakość powietrza";
    } elseif ($wartosc<= 100 ) {
        echo "Umiarkowana jakość powietrza";
    } elseif ($wartosc <= 150 ) {
        echo "zła jakosc powietrza";
    } elseif ($wartosc <= 200 ) {
        echo "Bardzo zła jakość powietrza";
    } elseif ($wartosc <= 300 ) {
        echo "Szkodliwa jakość powietrza";
    } elseif ( $wartosc <= 500) {
        echo "Niebezpieczna jakość powietrza";
    } else{
        echo " Wartosc poza zakreesem (0-500)";
    }
    ?>
</body>
</html>