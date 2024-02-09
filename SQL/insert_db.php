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
    $query = $conn->prepare($sql);
    // Uitvoeren
    $status = $query->execute(
        [
            'merk'=>$_POST['merk'],
            'type'=>$_POST['type'],
            'prijs'=>$_POST['prijs'],
            'photo'=>$_POST['photo']
        ]
    
    );

    if($status == true) {
        echo "<script>alert('Fiets is toegevoegd')</script>";
        echo "<script>location.replace('home.php');</script>";
    } else {
        echo "<script>alert('Fiets is NIET toegevoegd')</script>";
    }
    //test of insert gelukt is

    // ga naar de home-page
    // Ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>