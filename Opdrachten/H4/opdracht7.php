<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4 - opdracht 7</title>
</head>
<body>
    <?php
        $spaargeld = 1000;
        $product = 1000;

        if ($spaargeld < 750) {
            $tekort = $product - $spaargeld;
            echo "Je kunt beter een bijbaantje zoeken, je komt €" . $tekort . " tekort";
        } elseif ($spaargeld > 750 && $spaargeld < 1000) {
            echo "Je bent er bijna!";
        } elseif ($spaargeld >= 1000) {
            $teveel = $spaargeld - $product;
            echo "Je hebt genoeg geld om het product te halen u heeft nog €" . $teveel . " over";
        }
    ?>
</body>
</html>