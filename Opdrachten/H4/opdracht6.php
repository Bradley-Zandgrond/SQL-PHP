<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4 - opdracht 6</title>
</head>
<body>
    <?php
        $uur = 17;
        $temperatuur = 20;
        $luchtvochtigheid = 85;

        if ($uur == 17 || $temperatuur == 20 && $luchtvochtigheid == 85) {
            echo "airco off";
        } else {
            echo "airco on";
        }
    ?>
</body>
</html>