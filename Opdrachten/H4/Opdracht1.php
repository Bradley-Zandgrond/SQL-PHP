<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dagdeel if else</title>
</head>
<body>
<?php
    $time = 6;

    if ($time >= 6 && $time <= 12) {
        echo "het is ochtend";
    } elseif ($time > 12 && $time <= 18) {
        echo "het is middag";
    } elseif ($time > 18 && $time <= 24) {
        echo "het is avond";
    } else {
        echo "het is nacht";
    }
?>
</body>
</html>