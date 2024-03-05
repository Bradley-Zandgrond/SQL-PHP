<?php
    // Auteur: Zandgrond
    // functie: data fiets update in database

    // Test of er data is gepost
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        print_r($_POST);

        // Update database
        // Connect database
        include "connect.php";

        // Maak een query
        $sql = "
        UPDATE fietsen SET
            merk = :merk,
            type = :type,
            prijs = :prijs
        WHERE id = :id
        ";

        // Prepare
        $query = $conn->prepare($sql);
        
        // Uitvoeren
        $status = $query->execute(
            [
                'merk' => $_POST['merk'],
                'type' => $_POST['type'],
                'prijs'=> $_POST['prijs'],
                'id' => $_POST['id'],
            ]
        );

        if($status) {
            echo "<script>alert('Fiets is ge-edit')</script>";
            echo "<script>location.replace('homepage.php');</script>";
        } else {
            echo "<script>alert('Fiets is NIET ge-edit')</script>";
        }
    }
?>
