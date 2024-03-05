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

    //print data rij voor rij
    echo "<br>";
    echo "<table border=1px>";

    // print de header van de tabel
    echo "<tr>
        <th>Merk</th>
        <th>Prijs</th>    
        <th>Prijs</th>
        <th>Foto</th>
        <th>Edit</th>
        <th>Verwijder</th>
        </tr>";

    // Print de data rij voor rij
    foreach ($result as $row) {
        echo "<tr>";
            echo "<td>". $row['merk'] . "</td>";
            echo "<td>". $row['type'] . "</td>";
            echo "<td>". $row['prijs'] . "</td>";
            echo "<td>". "<img src='/SQL/ace.jpeg'" . $row['foto'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>" . "Wijzig</a></td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>" . "Verwijder</a></td>";
        echo "</tr>";
    }

    echo "</table>";
?>