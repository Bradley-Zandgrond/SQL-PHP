<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4 - opdracht 5</title>
</head>
<body>
    <?php
        $controller = 45;
        $tv = 300;
        $headset = 60;

        $producten = [$controller, $tv, $headset];

        foreach ($producten as $product) {
            if ($product > 150) {
                // Verhoog de prijs met 19%
                $prijsMetKorting = $product + ($product * 0.19);
                echo "Nieuwe prijs voor het product: €" . number_format($prijsMetKorting, 2) . "<br>";
            } else if ($product < 55) {
                // Verhoog de prijs met 11%
                $prijsMetKorting = $product + ($product * 0.11);
                echo "Nieuwe prijs voor het product: €" . number_format($prijsMetKorting, 2) . "<br>";
            } else {
                // Geen wijzigingen, behoud de oorspronkelijke prijs
                echo "Prijs van het product: €" . number_format($product, 2) . "<br>";
            }
        }
    ?>
</body>
</html>