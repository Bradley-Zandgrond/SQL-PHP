<?php
// authur: Zandgrond
include "connect.php";

if(isset($_POST['save'])) {
$merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
$prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$sql = "INSERT INTO fietsen(merk, type, prijs) VALUES (:merk, :type, :prijs)";
$query = $conn->prepare($sql);
$query->bindParam("merk", $merk);
$query->bindParam("type", $type);
$query->bindParam("prijs", $prijs);

if($query->execute()) {
    echo"de nieuwe gegevens zijn toegevoegd";
} else {
    echo "er is een fout opgetreden!";
}
}
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
    <form action="insert_db.php" method="post">
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