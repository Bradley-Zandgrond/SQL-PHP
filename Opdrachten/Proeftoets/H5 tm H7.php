<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function BepaalGemiddelde($cijfers) {
            $totaal = 0;

            // Tel alles bij elkaar op
            foreach ($cijfers as $getal) {
                $totaal += $getal;
            }

            // Bereken gemiddelde
            $gemiddelde = $totaal / count($cijfers);
            return $gemiddelde;
        }

        $cijfers = array(5, 9, 8);

        $gemiddelde = BepaalGemiddelde($cijfers);
        echo $gemiddelde;
    ?>
</body>
</html>