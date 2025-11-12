<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label> Podaj wysokość trójkąta:</label>
        <input type="number" name="wysokosc" min="1" required>
        <input type="submit" value="Generuj">
    </form>

    <?php
    if (isset($_POST['wysokosc'])) {
        $wysokosc = (int)$_POST['wysokosc'];

      for($i = $wysokosc; $i >= 1; $i--) {
        echo str_repeat ("*", $i) . "<br>";
      }
        }
    ?>


</body>
</html>