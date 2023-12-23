<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoger of lager</title>
</head>
<body>
    <?php
        $getal1 = 6;
        $getal2 = 9;

        if ($getal1 > $getal2) {
            $answer = $getal1 * 2 + $getal2;
        } else {
            $answer = $getal2 * 2 + $getal1;
        }

        echo "getal = ". "$answer";
    ?>
</body>
</html>