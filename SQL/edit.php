<?php
//authur: Zandgrond
include "connect.php";

if(isset($_POST['save'])) {
$merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
$prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$sql = "UPDATE fietsen SET merk = :merk, type = :type, prijs = :prijs WHERE id = :id";
$query = $conn->prepare($sql);
$query->bindParam("merk", $merk);
$query->bindParam("type", $type);
$query->bindParam("prijs", $prijs);
$query->bindParam("id", $_GET['id']);

if($query->execute()) {
    echo"de nieuwe gegevens zijn toegevoegd";
} else {
    echo "er is een fout opgetreden!";
}
echo "<br>";
} else {
    $sql = "SELECT * FROM fietsen WHERE id = :id";
    $query = $conn->prepare($sql);
    $query->bindParam("id", $_GET['id']);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$data) {
        $merk = $data["merk"];
        $type = $data["type"];
        $prijs = $data["prijs"];
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
<form method="post" action="edit_db.php">
    <label>merk: </label>
    <input type="text" name="merk" value="<?php echo $merk; ?>"><br>

    <label>type: </label>
    <input type="text" name="type" value="<?php echo $type; ?>"><br>
    
    <label>prijs: </label>
    <input type="text" name="prijs" value="<?php echo $prijs; ?>"><br>

    <input type="submit" name="save" value="Opslaan">
</form>
</body>
</html>