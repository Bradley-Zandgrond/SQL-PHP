<?php
    // Auteur: Zandgrond
    // Functie: toevoegen van 1 fiets""
        //test of toevoeg knop is ingedrukt
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Er is gepost<br>";
            print_r($_POST);
        }

    // Connect database
    include "connect.php";

    // Maak een query
    $sql = "INSERT INFO fietsen (id, merk, type, prijs, foto) VALUES (NULL, ':merk', ':type', ':prijs', ':foto');";
    // Prepare
    $stmt = $conn->prepare($sql);
    // Uitvoeren
    $stmt->execute(
        [
            'merk'=>$_POST['merk'],
            'type'=>$_POST['type'],
            'prijs'=>$_POST['prijs'],
            'photo'=>$_POST['photo']
        ]
    
    );
    //test of insert gelukt is

    // ga naar de home-page
    // Ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voeg Fiets Toe</h1>
    <form action="" method="post">
        <label for="merk">Merk: </label>
        <input type="text" name="merk"><br>
        <label for="type">Type: </label>
        <input type="text" name="type"><br>
        <label for="prijs">Prijs: </label>
        <input type="text" name="prijs"><br>
        <label for="foto">Foto (bestandsnaam): </label>
        <input type="text" name="foto"><br>  
        <input type="submit" value="voeg toe">
    </form>
</body>
</html>