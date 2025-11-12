<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 85;
    $grade = "":

    if( score >= 90 && $score <= 100 ) {
        $grade = "A";
    } elseif ( $score >= 80  && $score <= 89) {
        $grade = "B";
    } elseif ( $score >= 70  && $score <= 79) {
        $grade = "C";
    } elseif ( $score >= 60  && $score <= 69) {
        $grade = "D";
    } elseif ( $score >= 0 ) {
        $grade = "F";
    } else {
        $grade = "Invalid score";
    }

    echo "wynik testu: " . $score . "<br>";
    echo "ocena: " . $grade . "<br>";
    ?>  
</body>
</html>