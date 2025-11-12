<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $prodouctType = "electronics"
     $price = 1200;

     switch ($prodouctType) {
        case "electronics":
            $discount = 0.1; 
            break;
        case "clothing":
             $discount = 0.2; 
            break;
        case "books":
            $discount = 0.05; 
            break;
            default:
            $discount = 0; 
            break;

            $newprice = $price - ($price * $discount);

            echo "rodzaj produktu: " . $prodouctType . "<br>";
            echo "cena przed znizka: " . $price . "PLN<br>";
            echo "cena po znizce: " . $newprice . "PLN<br>";
     }
</body>
</html>