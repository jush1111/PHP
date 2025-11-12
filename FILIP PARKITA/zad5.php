<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $waga = 12;
    if ($waga >= 0 && $waga <= 1 ) {
        $rodzaj = "List zwykły";
    } elseif ($waga > 1 && $waga <= 5 ) {
        $rodzaj = "Paczka mała";
    } elseif ($waga > 5 && $waga <= 10 ) {
        $rodzaj = "Paczka średnia";
    } elseif ($waga > 10 && $waga <= 20 ) {
        $rodzaj = "Paczka duża";
    } elseif ($waga > 20 ) {
        $rodzaj = "przesyłka kurierska"
    } else{
        $rodzaj = "nieprawidłowa waga"
    }
    
    echo "rodzaj przesyłki: " . $rodzaj;
    ?>
</body>
</html>