<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dzien = "sroda";
    switch ($dzien) {
        case "poniedzialek":
            echo "poniedziałek - zupa pomidorowa";
            break;
        case "wtorek":
            echo "wtorek - kotlet schabowy ";
            break;
        case "sroda":
            echo "środa - pierogi ruskie";
            break;
        case "czwartek":
            echo "czwartek - gulasz wolowy";
            break;
        case "piatek":
            echo "piątek - ryba z frytkami";
            break;
        case "sobota":
            echo "sobota - pizza";
            break;
        case "niedziela":
            echo "niedziela - rosół";
            break;
        default:
            echo "Nieprawidłowy dzień tygodnia";
    }
</body>
</html>