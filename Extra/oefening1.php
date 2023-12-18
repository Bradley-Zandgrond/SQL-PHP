<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.6 oefening</title>
</head>
<body>
<form method="post">
    <p>Getal1 / 100 * Getal2</p>
    <input type="number" id="getal1" name="getal1" value="" placeholder="Getal1">
    <input type="number" id="getal2" name="getal2" value="" placeholder="Getal2">
    <br><br>
    <input type="submit" id="knop" name="knop" value="submit" placeholder="verzenden">
</form>

<?php

    // auteur: Bradley
    // Functie: uitleg over 7.6

    // print_r($_POST);

    // is er op de knop gedrukt
    if (isset($_POST['knop']) == true) {
        
        // set number to other variable
        $getal1 = $_POST['getal1'];
        $getal2 = $_POST['getal2'];

        echo "<br>";
        echo $getal1 / 100 * $getal2; 
    }

?>

</body>
</html>