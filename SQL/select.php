<?php
    // Auteur: Zandgrond
    // Functie: Selecteer data

    // Connect database
    include "connect.php";

    // Maak een query
    $sql = "SELECT * FROM fietsen";
    // Prepare
    $stmt = $conn->prepare($sql);
    // Uitvoeren
    $stmt->execute();
    // Ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Var dump result
    var_dump($result);

    // Print de data rij voor rij
    echo "<br>";
    foreach ($result as $row) {
        echo $row['Merk'] . " ";
        echo $row['Type'] . " ";
        echo $row['Prijs'] . "<br>";
    }
?>
