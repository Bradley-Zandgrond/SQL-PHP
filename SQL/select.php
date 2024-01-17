<?php
    //Auteur: Zandgrond
    // Functie: Selecteer data

    //connect database
    include "connect.php";

    // Maak een query
    $sql = "SELECT * FROM fietsen";
    // prepare
    $stmt = $conn->prepare($sql);
    // uitvoeren
    $stmt->execute();
    // Ophalen ale data
    $result = $stmt->fechAll(POD::FETCH_ASSOC);

    var_dump($result)
    // Print de data rij voor rij
    echo "<br>"
    foreach ($result as $row) {
        echo $row['Merk'] . " ";
        echo $row['Type'] . " ";
        echo $row['Prijs'] . "<br>";
    }
?>