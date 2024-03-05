<?php
//authur: Zandgrond
include "connect.php";
echo "<br>";

if (isset($_GET['id'])) {
    $sql = "DELETE FROM fietsen WHERE id = :id";
    $query = $conn->prepare($sql);
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $query -> bindParam("id", $id);
    if($query->execute()) {
        echo "het item is verwijderd.";
    } else {
        echo "er is een fout opgetreden!";
    }
}
echo "<br>";

$sql = "SELECT * FROM fietsen";
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as &$data) {
    echo "<a href='delete.php?id=" . $data['id'] . "'>";
    echo $data["merk"] . "" . $data["type"];
    echo "</a>";
    echo "<br>";

}
?>