<?php
    // Auteur: Zandgrond
    // Functie: toevoegen van 1 fiets""
    
    // Test of toevoeg knop is ingedrukt
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Er is gepost<br>";
        print_r($_POST);
    }

    // Connect database
    include "connect.php";

    // Maak een query
    $sql = "INSERT INTO fietsen (merk, type, prijs, foto) VALUES (:merk, :type, :prijs, :foto)";
    
    // Prepare
    $query = $conn->prepare($sql);

    // Uitvoeren
    $status = $query->execute(
        [
            'merk' => $_POST['merk'],
            'type' => $_POST['type'],
            'prijs' => $_POST['prijs'],
            'foto' => $_POST['foto']
        ]
    );

    if($status) {
        echo "<script>alert('Fiets is toegevoegd')</script>";
        echo "<script>location.replace('homepage.php');</script>";
    } else {
        echo "<script>alert('Fiets is NIET toegevoegd')</script>";
    }
?>
