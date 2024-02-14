<?php
    // auteur: Zandgrond
    // functie

    if (isset($_GET['id'])){

        echo "Mijn id is:" . $_GET['id'] . "<br>";

    }
    // Connect database
    include "connect.php";

    // Maak een query
    $sql = "SELECT * FROM fietsen WHERE id = :id";
    // Prepare
    $stmt = $conn->prepare($sql);
    // Uitvoeren
    $stmt->execute([':id'=>$_GET['id']]);
    // Ophalen alle data
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit fiets</title>
</head>
<body>
    <h2>Wijzig fiets</h2>
    <form action="edit_db.php" method="post">
    <input type="hidden" id="merk" name="id" required value="<?php echo $result['id']?>"><br>
        <label for="merk"></label>
        <input type="text" id="merk" name="id" required value="<?php echo $result['merk']?>"><br>

    </form>
</body>
</html>